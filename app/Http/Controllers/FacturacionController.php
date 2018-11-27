<?php

namespace App\Http\Controllers;

use phpseclib\Crypt\RSA;
use phpseclib\File\X509;
use \Milon\Barcode\DNS1D;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use File;
use Laracasts\Flash\FlashNotifier;
use PDF;
use App\Fiscal;
use App\Responsabilidad_iva;
use App\Empresa;
use Pampadev\Facturacion\Facturacion;
use Carbon\Carbon;
use App\Cliente;
use App\FacturaA;
use App\FacturaB;
use App\FacturaC;
use App\CreditoA;
use App\CreditoB;
use App\CreditoC;
use App\Remito;
use App\Presupuesto;
use App\Movimiento;
use App\Detalle;
use App\Producto;
use App\IVA;
use App\Venta;
use App\Reg_Venta_Cbte;
use App\Reg_Venta_Alic;
use App\Alicuota;
use App\ResumenCuenta;

class FacturacionController extends Controller
{

	public function create(){
    	$fecha = Carbon::today()->format('Y-m-d');
        $responsabilidades_iva = Responsabilidad_iva::orderBy('id', 'ASC')->get();
        $iva = IVA::orderBy('id', 'ASC')->get();
        if(Auth::user()->fiscal->certificado == null){
            flash("Para poder facturar debe generar sus certificados en AFIP, por favor clickee <a href=".route('keys')."><b>aquí</b></a> y siga los pasos o contáctese a administración@pampadev.com.ar y lo ayudaremos.")->error();
        }
        return view('facturacion.create')->with('fecha', $fecha)->with('responsabilidades_iva', $responsabilidades_iva)->with('iva', $iva)->with('vencimiento', Carbon::today()->addDays(29)->format('Y-m-d'));
    }

    public function save(Request $request){
        
        $facturacion = new Facturacion();
    	$alicuotas = json_decode($request->alicuotas);
        $detalles = json_decode($request->detalle);
        $cliente = Cliente::searchCuit(str_replace("/", "", str_replace("-", "", $request->cuit)))->get()->first();
        $cliente_id = "";
        $i = 0;
        foreach ($alicuotas as $key => $value) {
            $i++;
        }
        if($request->cuit != ""){
            if($cliente == null){
                $cliente = new Cliente();
                $cliente->nombre = $request->nombre;
                $cliente->cuit = $request->cuit;
                $cliente->direccion = $request->direccion;
                $cliente->localidad = $request->localidad;
                $cliente->responsabilidades_iva_id =Responsabilidad_iva::Search($request->resp_iva)->id;;
                $cliente->save();
                $cliente_id = $cliente->id;
            }else{
                $cliente = Cliente::searchCuit($cliente->cuit)->get()->first();
                $cliente_id = $cliente->id;
            }
        }
        if ($request->tipo_comprobante == "A") {
            $factura = new FacturaA();
            $factura->fecha = $request->fecha;
            //$request->vencimiento = $request->fecha+30;
            $factura->total = $request->total;
            $factura->forma_pago = $request->forma_pago;
            if($request->cuit == ""){
                $factura->cliente_id = 1;
            }else{
                $factura->cliente_id = $cliente_id;
            }
            $factura->cae = $request->cae;
            $factura->fecha_vencimiento = date("Y-m-d", strtotime($request->vencimiento));
            if($request->forma_pago == "cuenta_corriente"){
                $factura->estado = "pendiente";
            }else{
                $factura->estado = "pago";
            }
            $factura->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $factura->nro_doc = str_replace("/", "", str_replace("-", "", $request->cuit));
            $factura->cliente = $request->nombre;
            $factura->total = $request->total;
            $factura->importe_neto = $request->subtotal;
            $factura->percepcion_no_categorizados = 0;
            $factura->operaciones_exentas = 0;
            $factura->impuestos_nacionales = 0;
            $factura->ingresos_brutos = 0;
            $factura->impuestos_municipales = 0;
            $factura->impuestos_internos = 0;
            $factura->codigo_moneda ="PES";
            $factura->tipo_cambio =1;
            $factura->cantidad_alicuotas = $i;
            $factura->codigo_operacion = " ";
            $factura->otros_tributos= 0;
            $factura->save();

            $venta = new Venta();
            $venta->cliente_id = $factura->cliente_id;
            $venta->fecha = $factura->fecha;
            $venta->tipo_comprobante = "A";
            $venta->num_comprobante = $factura->id;
            $venta->total = $factura->total;
            $venta->save();
            $facturacion = new Facturacion();
            $regimen_venta_cbte = new Reg_Venta_Cbte();
            $regimen_venta_cbte->fecha = date("Ymd", strtotime($request->fecha));
            $regimen_venta_cbte->tipo_comprobante = str_pad(1, 3, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante_hasta = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $regimen_venta_cbte->nro_doc = str_pad(str_replace("/", "", str_replace("-", "", $request->cuit)),20, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->cliente = str_pad($request->nombre, 30, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->total = str_pad(str_replace(".", "", $request->total), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->percepcion_no_categorizados = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->operaciones_exentas = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_nacionales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->ingresos_brutos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_municipales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_internos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->codigo_moneda ="PES";
            $regimen_venta_cbte->tipo_cambio =str_pad(str_replace(".", "", "1.00"), 15, "0", STR_PAD_LEFT);
            foreach ($alicuotas as $key => $value) {
                $alicuota_cbte = new Alicuota();
                $alicuota_cbte->tipo_comprobante = $request->tipo_comprobante;
                $alicuota_cbte->punto_venta = Auth::user()->fiscal->punto_venta;
                $alicuota_cbte->num_comprobante = $request->num_comprobante;
                $alicuota_cbte->importe_neto = $request->subtotal;
                $alicuota_cbte->alicuota = $value->codigo;
                $alicuota_cbte->importe_iva = $value->importe_iva;
                $alicuota_cbte->save();
                $regimen_venta_alic = new Reg_Venta_Alic();
                $regimen_venta_alic->tipo_comprobante = str_pad(1, 3, "0", STR_PAD_LEFT);
                $regimen_venta_alic->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
                $regimen_venta_alic->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
                $regimen_venta_alic->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->alicuota = str_pad(IVA::Alic($value->codigo)->get()->first()->alicuota, 4, " ", STR_PAD_LEFT);
                $regimen_venta_alic->importe_iva = str_pad(str_replace(".", "", $value->importe_iva), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->save();
            }
            $regimen_venta_cbte->cantidad_alicuotas = $i;
            $regimen_venta_cbte->codigo_operacion = " ";
            $regimen_venta_cbte->otros_tributos= "000000000000000";
            $regimen_venta_cbte->save();


            $saldo_anterior = Movimiento::orderBy('id','DESC')->get()->first()->saldo;
            $movimiento = new Movimiento();
            $movimiento->movimiento_id = $venta->id;
            $movimiento->movimiento = "VENTA";
            if($request->forma_pago == "cuenta_corriente"){
                $movimiento->saldo = $saldo_anterior;
            }else{
                $movimiento->saldo = $saldo_anterior+$factura->total;
            }

            $movimiento->save();
            foreach ($detalles as $key => $value) {
                $detalle = new Detalle();
                $detalle->venta_id = $venta->id;
                $detalle->descripcion = $value->detalle;
                $detalle->cantidad = $value->cantidad;
                $detalle->precio = $value->importe;
                $detalle->total = floatval($value->importe)*floatval($value->cantidad);
                $detalle->tipo = $value->tipo;
                $detalle->save();   
                if($value->tipo == 'producto' && $value->id != "0"){
                    $producto = Producto::find($value->id);
                    $producto->stock = floatval($producto->stock)-floatval($value->cantidad);
                    $producto->save();
                }
            }
        }else if($request->tipo_comprobante == "B"){
            $factura = new FacturaB();
            $factura->fecha = $request->fecha;
            //$request->vencimiento = $request->fecha+30;
            $factura->total = $request->total;
            $factura->forma_pago = $request->forma_pago;
            if($request->cuit == ""){
                $factura->cliente_id = 1;
            }else{
                $factura->cliente_id = $cliente_id;
            }
            $factura->cae = $request->cae;
            $factura->fecha_vencimiento = date("Y-m-d", strtotime($request->vencimiento));
            if($request->forma_pago == "cuenta_corriente"){
                $factura->estado = "pendiente";
            }else{
                $factura->estado = "pago";
            }
            $factura->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $factura->nro_doc = str_replace("/", "", str_replace("-", "", $request->cuit));
            $factura->cliente = $request->nombre;
            $factura->total = $request->total;
            $factura->importe_neto = $request->subtotal;
            $factura->percepcion_no_categorizados = 0;
            $factura->operaciones_exentas = 0;
            $factura->impuestos_nacionales = 0;
            $factura->ingresos_brutos = 0;
            $factura->impuestos_municipales = 0;
            $factura->impuestos_internos = 0;
            $factura->codigo_moneda ="PES";
            $factura->tipo_cambio =1;
            $factura->cantidad_alicuotas = $i;
            $factura->codigo_operacion = " ";
            $factura->otros_tributos= 0;
            $factura->save();
            $venta = new Venta();
            $venta->cliente_id = $factura->cliente_id;
            $venta->fecha = $factura->fecha;
            $venta->tipo_comprobante = "B";
            $venta->num_comprobante = $factura->id;
            $venta->total = $factura->total;
            $venta->save();

            $facturacion = new Facturacion();
            $regimen_venta_cbte = new Reg_Venta_Cbte();
            $regimen_venta_cbte->fecha = date("Ymd", strtotime($request->fecha));
            $regimen_venta_cbte->tipo_comprobante = str_pad(6, 3, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante_hasta = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $regimen_venta_cbte->nro_doc = str_pad(str_replace("/", "", str_replace("-", "", $request->cuit)),20, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->cliente = str_pad($request->nombre, 30, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->total = str_pad(str_replace(".", "", $request->total), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->percepcion_no_categorizados = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->operaciones_exentas = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_nacionales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->ingresos_brutos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_municipales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_internos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->codigo_moneda ="PES";
            $regimen_venta_cbte->tipo_cambio =str_pad(str_replace(".", "", "1.00"), 15, "0", STR_PAD_LEFT);
            foreach ($alicuotas as $key => $value) {
                $alicuota_cbte = new Alicuota();
                $alicuota_cbte->tipo_comprobante = $request->tipo_comprobante;
                $alicuota_cbte->punto_venta = Auth::user()->fiscal->punto_venta;
                $alicuota_cbte->num_comprobante = $request->num_comprobante;
                $alicuota_cbte->importe_neto = $request->subtotal;
                $alicuota_cbte->alicuota = $value->codigo;
                $alicuota_cbte->importe_iva = $value->importe_iva;
                $alicuota_cbte->save();
                $regimen_venta_alic = new Reg_Venta_Alic();
                $regimen_venta_alic->tipo_comprobante = str_pad(6, 3, "0", STR_PAD_LEFT);
                $regimen_venta_alic->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
                $regimen_venta_alic->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
                $regimen_venta_alic->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->alicuota = str_pad(IVA::Alic($value->codigo)->get()->first()->alicuota, 4, " ", STR_PAD_LEFT);
                $regimen_venta_alic->importe_iva = str_pad(str_replace(".", "", $value->importe_iva), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->save();
            }
            $regimen_venta_cbte->cantidad_alicuotas = $i;
            $regimen_venta_cbte->codigo_operacion = " ";
            $regimen_venta_cbte->otros_tributos= "000000000000000";
            $regimen_venta_cbte->save();
            $saldo_anterior = Movimiento::orderBy('id','DESC')->get()->first()->saldo;
            $movimiento = new Movimiento();
            $movimiento->movimiento_id = $venta->id;
            $movimiento->movimiento = "VENTA";
            if($request->forma_pago == "cuenta_corriente"){
                $movimiento->saldo = $saldo_anterior;
            }else{
                $movimiento->saldo = $saldo_anterior+$factura->total;
            }
            $movimiento->save();
            foreach ($detalles as $key => $value) {
                $detalle = new Detalle();
                $detalle->venta_id = $venta->id;
                $detalle->descripcion = $value->detalle;
                $detalle->cantidad = $value->cantidad;
                $detalle->precio = $value->importe;
                $detalle->total = floatval($value->importe)*floatval($value->cantidad);
                $detalle->tipo = $value->tipo;
                $detalle->save();   
                if($value->tipo == 'producto' && $value->id != "0"){
                    $producto = Producto::find($value->id);
                    $producto->stock = floatval($producto->stock)-floatval($value->cantidad);
                    $producto->save();
                }
            }       
        }else if($request->tipo_comprobante == "C"){
            $factura = new FacturaC();
            $factura->fecha = $request->fecha;
            $fecha = new Carbon($request->fecha);
            $factura->vencimiento = $fecha->addMonth(1)->format('Y-m-d');
            $factura->total = $request->total;
            $factura->forma_pago = $request->forma_pago;
            if($request->cuit == ""){
                $factura->cliente_id = 1;
            }else{
                $factura->cliente_id = $cliente_id;
            }
            $factura->cae = $request->cae;
            $factura->fecha_vencimiento = date("Y-m-d", strtotime($request->vencimiento));
            if($request->forma_pago == "cuenta_corriente"){
                $factura->estado = "pendiente";
            }else{
                $factura->estado = "pago";
            }
            $factura->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $factura->nro_doc = str_replace("/", "", str_replace("-", "", $request->cuit));
            $factura->cliente = $request->nombre;
            $factura->total = $request->total;
            $factura->importe_neto = $request->subtotal;
            $factura->percepcion_no_categorizados = 0;
            $factura->operaciones_exentas = 0;
            $factura->impuestos_nacionales = 0;
            $factura->ingresos_brutos = 0;
            $factura->impuestos_municipales = 0;
            $factura->impuestos_internos = 0;
            $factura->codigo_moneda ="PES";
            $factura->tipo_cambio =1;
            $factura->cantidad_alicuotas = $i;
            $factura->codigo_operacion = " ";
            $factura->otros_tributos= 0;
            $factura->save();
            $venta = new Venta();
            $venta->cliente_id = $factura->cliente_id;
            $venta->fecha = $factura->fecha;
            $venta->tipo_comprobante = "C";
            $venta->num_comprobante = $factura->id;
            $venta->total = $factura->total;
            $venta->save();

            $regimen_venta_cbte = new Reg_Venta_Cbte();
            $regimen_venta_cbte->fecha = date("Ymd", strtotime($request->fecha));
            $regimen_venta_cbte->tipo_comprobante = str_pad(11, 3, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante_hasta = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $regimen_venta_cbte->nro_doc = str_pad(str_replace("/", "", str_replace("-", "", $request->cuit)),20, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->cliente = str_pad($request->nombre, 30, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->total = str_pad(str_replace(".", "", $request->total), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->percepcion_no_categorizados = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->operaciones_exentas = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_nacionales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->ingresos_brutos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_municipales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_internos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->codigo_moneda ="PES";
            $regimen_venta_cbte->tipo_cambio =str_pad(str_replace(".", "", "1.00"), 15, "0", STR_PAD_LEFT);
            foreach ($alicuotas as $key => $value) {
                $alicuota_cbte = new Alicuota();
                $alicuota_cbte->tipo_comprobante = $request->tipo_comprobante;
                $alicuota_cbte->punto_venta = Auth::user()->fiscal->punto_venta;
                $alicuota_cbte->num_comprobante = $request->num_comprobante;
                $alicuota_cbte->importe_neto = $request->subtotal;
                $alicuota_cbte->alicuota = $value->codigo;
                $alicuota_cbte->importe_iva = $value->importe_iva;
                $alicuota_cbte->save();
                $regimen_venta_alic = new Reg_Venta_Alic();
                $regimen_venta_alic->tipo_comprobante = str_pad(11, 3, "0", STR_PAD_LEFT);
                $regimen_venta_alic->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
                $regimen_venta_alic->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
                $regimen_venta_alic->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->alicuota = str_pad(IVA::Alic($value->codigo)->get()->first()->alicuota, 4, " ", STR_PAD_LEFT);
                $regimen_venta_alic->importe_iva = str_pad(str_replace(".", "", $value->importe_iva), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->save();
            }
            $regimen_venta_cbte->cantidad_alicuotas = $i;
            $regimen_venta_cbte->codigo_operacion = " ";
            $regimen_venta_cbte->otros_tributos= "000000000000000";
            $regimen_venta_cbte->save();

            $saldo_anterior = Movimiento::orderBy('id','DESC')->get()->first()->saldo;
            $movimiento = new Movimiento();
            $movimiento->movimiento_id = $venta->id;
            $movimiento->movimiento = "VENTA";
            if($request->forma_pago == "cuenta_corriente"){
                $movimiento->saldo = $saldo_anterior;
            }else{
                $movimiento->saldo = $saldo_anterior+$factura->total;
            }
            $movimiento->save();
            foreach ($detalles as $key => $value) {
                $detalle = new Detalle();
                $detalle->venta_id = $venta->id;
                $detalle->descripcion = $value->detalle;
                $detalle->cantidad = $value->cantidad;
                $detalle->precio = $value->importe;
                $detalle->total = floatval($value->importe)*floatval($value->cantidad);
                $detalle->tipo = $value->tipo;
                $detalle->save();   
                if($value->tipo == 'producto' && $value->id != "0"){
                    $producto = Producto::find($value->id);
                    $producto->stock = floatval($producto->stock)-floatval($value->cantidad);
                    $producto->save();
                }
            }
        }else if($request->tipo_comprobante == "NCA"){
            $factura = new CreditoA();
            $factura->fecha = $request->fecha;
            $factura->total = $request->total;
            if($request->cuit == ""){
                $factura->cliente_id = 1;
            }else{
                $factura->cliente_id = $cliente_id;
            }
            $factura->cae = $request->cae;
            $factura->fecha_vencimiento = date("Y-m-d", strtotime($request->vencimiento));
            $factura->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $factura->nro_doc = str_replace("/", "", str_replace("-", "", $request->cuit));
            $factura->cliente = $request->nombre;
            $factura->total = $request->total;
            $factura->importe_neto = $request->subtotal;
            $factura->percepcion_no_categorizados = 0;
            $factura->operaciones_exentas = 0;
            $factura->impuestos_nacionales = 0;
            $factura->ingresos_brutos = 0;
            $factura->impuestos_municipales = 0;
            $factura->impuestos_internos = 0;
            $factura->codigo_moneda ="PES";
            $factura->tipo_cambio =1;
            $factura->cantidad_alicuotas = $i;
            $factura->codigo_operacion = " ";
            $factura->otros_tributos= 0;
            $factura->save();

            $venta = new Venta();
            $venta->cliente_id = $factura->cliente_id;
            $venta->fecha = $factura->fecha;
            $venta->tipo_comprobante = "NCA";
            $venta->num_comprobante = $factura->id;
            $venta->total = $factura->total;
            $venta->save();

            $facturacion = new Facturacion();
            $regimen_venta_cbte = new Reg_Venta_Cbte();
            $regimen_venta_cbte->fecha = date("Ymd", strtotime($request->fecha));
            $regimen_venta_cbte->tipo_comprobante = str_pad(3, 3, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante_hasta = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $regimen_venta_cbte->nro_doc = str_pad(str_replace("/", "", str_replace("-", "", $request->cuit)),20, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->cliente = str_pad($request->nombre, 30, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->total = str_pad(str_replace(".", "", $request->total), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->percepcion_no_categorizados = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->operaciones_exentas = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_nacionales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->ingresos_brutos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_municipales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_internos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->codigo_moneda ="PES";
            $regimen_venta_cbte->tipo_cambio =str_pad(str_replace(".", "", "1.00"), 15, "0", STR_PAD_LEFT);
            foreach ($alicuotas as $key => $value) {
                $alicuota_cbte = new Alicuota();
                $alicuota_cbte->tipo_comprobante = $request->tipo_comprobante;
                $alicuota_cbte->punto_venta = Auth::user()->fiscal->punto_venta;
                $alicuota_cbte->num_comprobante = $request->num_comprobante;
                $alicuota_cbte->importe_neto = $request->subtotal;
                $alicuota_cbte->alicuota = $value->codigo;
                $alicuota_cbte->importe_iva = $value->importe_iva;
                $alicuota_cbte->save();
                $regimen_venta_alic = new Reg_Venta_Alic();
                $regimen_venta_alic->tipo_comprobante = str_pad(3, 3, "0", STR_PAD_LEFT);
                $regimen_venta_alic->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
                $regimen_venta_alic->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
                $regimen_venta_alic->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->alicuota = str_pad(IVA::Alic($value->codigo)->get()->first()->alicuota, 4, " ", STR_PAD_LEFT);
                $regimen_venta_alic->importe_iva = str_pad(str_replace(".", "", $value->importe_iva), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->save();
            }
            $regimen_venta_cbte->cantidad_alicuotas = $i;
            $regimen_venta_cbte->codigo_operacion = " ";
            $regimen_venta_cbte->otros_tributos= "000000000000000";
            $regimen_venta_cbte->save();
            $saldo_anterior = Movimiento::orderBy('id','DESC')->get()->first()->saldo;
            $movimiento = new Movimiento();
            $movimiento->movimiento_id = $venta->id;
            $movimiento->movimiento = "VENTA";
            $movimiento->saldo = $saldo_anterior+$factura->total;
            $movimiento->save();
            foreach ($detalles as $key => $value) {
                $detalle = new Detalle();
                $detalle->venta_id = $venta->id;
                $detalle->descripcion = $value->detalle;
                $detalle->cantidad = $value->cantidad;
                $detalle->precio = $value->importe;
                $detalle->total = floatval($value->importe)*floatval($value->cantidad);
                $detalle->tipo = $value->tipo;
                $detalle->save();   
                if($value->tipo == 'producto' && $value->id != "0"){
                    $producto = Producto::find($value->id);
                    $producto->stock = floatval($producto->stock)+floatval($value->cantidad);
                    $producto->save();
                }
            }
        }else if($request->tipo_comprobante == "NCB"){
            $factura = new CreditoB();
            $factura->fecha = $request->fecha;
            $factura->total = $request->total;
            if($request->cuit == ""){
                $factura->cliente_id = 1;
            }else{
                $factura->cliente_id = $cliente_id;
            }
            $factura->cae = $request->cae;
            $factura->fecha_vencimiento = date("Y-m-d", strtotime($request->vencimiento));
            $factura->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $factura->nro_doc = str_replace("/", "", str_replace("-", "", $request->cuit));
            $factura->cliente = $request->nombre;
            $factura->total = $request->total;
            $factura->importe_neto = $request->subtotal;
            $factura->percepcion_no_categorizados = 0;
            $factura->operaciones_exentas = 0;
            $factura->impuestos_nacionales = 0;
            $factura->ingresos_brutos = 0;
            $factura->impuestos_municipales = 0;
            $factura->impuestos_internos = 0;
            $factura->codigo_moneda ="PES";
            $factura->tipo_cambio =1;
            $factura->cantidad_alicuotas = $i;
            $factura->codigo_operacion = " ";
            $factura->otros_tributos= 0;
            $factura->save();
            $venta = new Venta();
            $venta->cliente_id = $factura->cliente_id;
            $venta->fecha = $factura->fecha;
            $venta->tipo_comprobante = "NCB";
            $venta->num_comprobante = $factura->id;
            $venta->total = $factura->total;
            $venta->save();
            $facturacion = new Facturacion();
            $regimen_venta_cbte = new Reg_Venta_Cbte();
            $regimen_venta_cbte->fecha = date("Ymd", strtotime($request->fecha));
            $regimen_venta_cbte->tipo_comprobante = str_pad(8, 3, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante_hasta = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $regimen_venta_cbte->nro_doc = str_pad(str_replace("/", "", str_replace("-", "", $request->cuit)),20, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->cliente = str_pad($request->nombre, 30, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->total = str_pad(str_replace(".", "", $request->total), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->percepcion_no_categorizados = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->operaciones_exentas = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_nacionales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->ingresos_brutos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_municipales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_internos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->codigo_moneda ="PES";
            $regimen_venta_cbte->tipo_cambio =str_pad(str_replace(".", "", "1.00"), 15, "0", STR_PAD_LEFT);
            foreach ($alicuotas as $key => $value) {
                $alicuota_cbte = new Alicuota();
                $alicuota_cbte->tipo_comprobante = $request->tipo_comprobante;
                $alicuota_cbte->punto_venta = Auth::user()->fiscal->punto_venta;
                $alicuota_cbte->num_comprobante = $request->num_comprobante;
                $alicuota_cbte->importe_neto = $request->subtotal;
                $alicuota_cbte->alicuota = $value->codigo;
                $alicuota_cbte->importe_iva = $value->importe_iva;
                $alicuota_cbte->save();
                $regimen_venta_alic = new Reg_Venta_Alic();
                $regimen_venta_alic->tipo_comprobante = str_pad(8, 3, "0", STR_PAD_LEFT);
                $regimen_venta_alic->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
                $regimen_venta_alic->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
                $regimen_venta_alic->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->alicuota = str_pad(IVA::Alic($value->codigo)->get()->first()->alicuota, 4, " ", STR_PAD_LEFT);
                $regimen_venta_alic->importe_iva = str_pad(str_replace(".", "", $value->importe_iva), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->save();
            }
            $regimen_venta_cbte->cantidad_alicuotas = $i;
            $regimen_venta_cbte->codigo_operacion = " ";
            $regimen_venta_cbte->otros_tributos= "000000000000000";
            $regimen_venta_cbte->save();
            $saldo_anterior = Movimiento::orderBy('id','DESC')->get()->first()->saldo;
            $movimiento = new Movimiento();
            $movimiento->movimiento_id = $venta->id;
            $movimiento->movimiento = "VENTA";
            $movimiento->saldo = $saldo_anterior+$factura->total;
            $movimiento->save();
            foreach ($detalles as $key => $value) {
                $detalle = new Detalle();
                $detalle->venta_id = $venta->id;
                $detalle->descripcion = $value->detalle;
                $detalle->cantidad = $value->cantidad;
                $detalle->precio = $value->importe;
                $detalle->total = floatval($value->importe)*floatval($value->cantidad);
                $detalle->tipo = $value->tipo;
                $detalle->save();   
                if($value->tipo == 'producto' && $value->id != "0"){
                    $producto = Producto::find($value->id);
                    $producto->stock = floatval($producto->stock)+floatval($value->cantidad);
                    $producto->save();
                }
            }
        }else if($request->tipo_comprobante == "NCC"){
            $factura = new CreditoC();
            $factura->fecha = $request->fecha;
            $factura->total = $request->total;
            if($request->cuit == ""){
                $factura->cliente_id = 1;
            }else{
                $factura->cliente_id = $cliente_id;
            }
            $factura->cae = $request->cae;
            $factura->fecha_vencimiento = date("Y-m-d", strtotime($request->vencimiento));
            $factura->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $factura->nro_doc = str_replace("/", "", str_replace("-", "", $request->cuit));
            $factura->cliente = $request->nombre;
            $factura->total = $request->total;
            $factura->importe_neto = $request->subtotal;
            $factura->percepcion_no_categorizados = 0;
            $factura->operaciones_exentas = 0;
            $factura->impuestos_nacionales = 0;
            $factura->ingresos_brutos = 0;
            $factura->impuestos_municipales = 0;
            $factura->impuestos_internos = 0;
            $factura->codigo_moneda ="PES";
            $factura->tipo_cambio =1;
            $factura->cantidad_alicuotas = $i;
            $factura->codigo_operacion = " ";
            $factura->otros_tributos= 0;
            $factura->save();
            $venta = new Venta();
            $venta->cliente_id = $factura->cliente_id;
            $venta->fecha = $factura->fecha;
            $venta->tipo_comprobante = "NCC";
            $venta->num_comprobante = $factura->id;
            $venta->total = $factura->total;
            $venta->save();
            $facturacion = new Facturacion();
            $regimen_venta_cbte = new Reg_Venta_Cbte();
            $regimen_venta_cbte->fecha = date("Ymd", strtotime($request->fecha));
            $regimen_venta_cbte->tipo_comprobante = str_pad(13, 3, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->num_comprobante_hasta = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->tipo_doc = $facturacion->doc_tipo($request->cuit);
            $regimen_venta_cbte->nro_doc = str_pad(str_replace("/", "", str_replace("-", "", $request->cuit)),20, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->cliente = str_pad($request->nombre, 30, " ", STR_PAD_LEFT);
            $regimen_venta_cbte->total = str_pad(str_replace(".", "", $request->total), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->percepcion_no_categorizados = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->operaciones_exentas = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_nacionales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->ingresos_brutos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_municipales = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->impuestos_internos = str_pad(0, 15, "0", STR_PAD_LEFT);
            $regimen_venta_cbte->codigo_moneda ="PES";
            $regimen_venta_cbte->tipo_cambio =str_pad(str_replace(".", "", "1.00"), 15, "0", STR_PAD_LEFT);
            foreach ($alicuotas as $key => $value) {
                $alicuota_cbte = new Alicuota();
                $alicuota_cbte->tipo_comprobante = $request->tipo_comprobante;
                $alicuota_cbte->punto_venta = Auth::user()->fiscal->punto_venta;
                $alicuota_cbte->num_comprobante = $request->num_comprobante;
                $alicuota_cbte->importe_neto = $request->subtotal;
                $alicuota_cbte->alicuota = $value->codigo;
                $alicuota_cbte->importe_iva = $value->importe_iva;
                $alicuota_cbte->save();
                $regimen_venta_alic = new Reg_Venta_Alic();
                $regimen_venta_alic->tipo_comprobante = str_pad(13, 3, "0", STR_PAD_LEFT);
                $regimen_venta_alic->punto_venta = str_pad(Auth::user()->fiscal->punto_venta, 5 , "0", STR_PAD_LEFT);
                $regimen_venta_alic->num_comprobante = str_pad($request->num_comprobante, 20, "0", STR_PAD_LEFT);
                $regimen_venta_alic->importe_neto = str_pad(str_replace(".", "", $request->subtotal), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->alicuota = str_pad(IVA::Alic($value->codigo)->get()->first()->alicuota, 4, " ", STR_PAD_LEFT);
                $regimen_venta_alic->importe_iva = str_pad(str_replace(".", "", $value->importe_iva), 15, "0", STR_PAD_LEFT);
                $regimen_venta_alic->save();
            }
            $regimen_venta_cbte->cantidad_alicuotas = $i;
            $regimen_venta_cbte->codigo_operacion = " ";
            $regimen_venta_cbte->otros_tributos= "000000000000000";
            $regimen_venta_cbte->save();
            $saldo_anterior = Movimiento::orderBy('id','DESC')->get()->first()->saldo;
            $movimiento = new Movimiento();
            $movimiento->movimiento_id = $venta->id;
            $movimiento->movimiento = "VENTA";
            $movimiento->saldo = $saldo_anterior+$factura->total;
            $movimiento->save();
            foreach ($detalles as $key => $value) {
                $detalle = new Detalle();
                $detalle->venta_id = $venta->id;
                $detalle->descripcion = $value->detalle;
                $detalle->cantidad = $value->cantidad;
                $detalle->precio = $value->importe;
                $detalle->total = floatval($value->importe)*floatval($value->cantidad);
                $detalle->tipo = $value->tipo;
                $detalle->save();   
                if($value->tipo == 'producto' && $value->id != "0"){
                    $producto = Producto::find($value->id);
                    $producto->stock = floatval($producto->stock)+floatval($value->cantidad);
                    $producto->save();
                }
            }
        }else if($request->tipo_comprobante == "R"){
            $factura = new Remito();
            $factura->fecha = $request->fecha;
            $factura->total = $request->total;
            if($request->cuit == ""){
                $factura->cliente_id = 1;
            }else{
                $factura->cliente_id = $cliente_id;
            }
            $factura->save();
        }else if($request->tipo_comprobante == "P"){
            $factura = new Presupuesto();
            $factura->fecha = $request->fecha;
            $factura->total = $request->total;
            if($request->cuit == ""){
                $factura->cliente_id = 1;
            }else{
                $factura->cliente_id = $cliente_id;
            }
            $factura->save();
        }
        return redirect(url('facturas/create'));
    }
    public function create_keys(){
		$rsa = new RSA();
		$keys =json_encode($rsa->createKey(4096));
		$privatekey = json_decode($keys)->privatekey;
		$file = public_path().'/facturacion/certs/'.Auth::user()->cuit.'/'.Auth::user()->cuit.".key";
		if(!file_exists($file)){
			fopen($file, "w+");
			$file = fopen($file, "w+") or die("Unable to open file!");;
			fwrite($file, $privatekey);
			fclose($file);
		}


		$privKey = new RSA();
		$privKey->loadKey($privatekey);		

		$x509 = new X509();
		$x509->setPrivateKey($privKey);
		$x509->setDN("/C=AR/O=".Auth::user()->nombre_fantasia."/CN=".Auth::user()->razon_social."/serialNumber=CUIT ".Auth::user()->cuit);

		$csr = $x509->signCSR();

		$x509->saveCSR($csr);
		$file = public_path()."/facturacion/certs/".Auth::user()->cuit."/".Auth::user()->cuit.".csr";
		if(!file_exists($file)){
			fopen($file, "w+");
			$file = fopen($file, "w+") or die("Unable to open file!");;
			fwrite($file, $x509->saveCSR($csr));
			fclose($file);
		}
        return view('empresas.create_cert');
    }
    public function mostrar_pdf($archivo){
    	$headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; ' . $archivo,
            ];
        return Response::make(File::get(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$archivo.'.pdf'), 200, $headers);
    }
    public function generar_comprobante(Request $request){
    	$alicuotas = json_decode($request->alicuotas, true);
        $detalles = json_decode($request->detalle);
        $facturacion = new Facturacion();
        //URLS Y CERTS
        $facturacion->cert = public_path().'/facturacion/certs/'.Auth::user()->cuit.'/'.Auth::user()->cuit.'.crt';
        $facturacion->key = public_path().'/facturacion/certs/'.Auth::user()->cuit.'/'.Auth::user()->cuit.'.key';
        //DATOS EMISOR
        $facturacion->cuit_emisor = Auth::user()->cuit;

        $facturacion->tipos_iva();
        $facturacion->punto_venta = Auth::user()->fiscal->punto_venta;
        $facturacion->concepto = $facturacion->tipo_actividad(Auth::user()->tipo_actividad);
        //DATOS CLIENTE
        $facturacion->doc_nro = str_replace("/", "", str_replace("-", "", $request->cuit));
        $facturacion->tipo_doc = $facturacion->doc_tipo($request->cuit);
        //DATOS COMPROBANTE
        $facturacion->tipo_comprobante = $facturacion->tipo_comprobante($request->tipo_comprobante);
        $facturacion->comprobante_desde =intval($request->num_comprobante);
        $facturacion->comprobante_hasta =intval($request->num_comprobante);
        $facturacion->comprobante_fecha = Carbon::parse($request->fecha)->format('Ymd');
        $facturacion->importe_total = $request->total;
        $facturacion->importe_neto = $request->subtotal;
        $facturacion->importe_iva = $request->importe_iva;
        $facturacion->assoc = $request->assoc;
        $facturacion->IVA = $alicuotas;
        if($request->tipo_comprobante == "C"){
            $facturacion->CAE_Factura_C();
        }elseif($request->tipo_comprobante == "A"){
            $facturacion->CAE_Factura_A();
        }elseif ($request->tipo_comprobante == "B") {
            $facturacion->CAE_Factura_B();
        }elseif ($request->tipo_comprobante == "NCA") {
            $facturacion->CAE_Credito_A();
        }elseif ($request->tipo_comprobante == "NCB") {
            $facturacion->CAE_Credito_B();
        }elseif ($request->tipo_comprobante == "NCC") {
            $facturacion->CAE_Credito_C();
        }elseif($request->tipo_comprobante == "R"){
            $facturacion->resultado = "A";
        }elseif($request->tipo_comprobante == "P"){
            $facturacion->resultado = "A";
        }
        
        echo json_encode($facturacion);
        if($request->tipo_comprobante == "R"){
            $cae = "NO EXISTE";
            $vencimiento = "NO EXISTE";
            $codigo = "NO";
            $name = $request->tipo_comprobante.$request->num_comprobante.'.pdf';
            fopen(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name,'w+');
            $pdf = PDF::loadView('layouts.pdf.comprobante', ['barcode'=>"",'codigo'=>$codigo,'detalles'=>$detalles, 'Comprobante'=>$request, 'vencimiento'=>"", 'cae'=>$facturacion->cae, 'num_comprobante' => $request->num_comprobante, 'tipo_comprobante' => $facturacion->tipo_comprobante, 'comp' => $request->tipo_comprobante, 'titulo_factura'=>"Remito", 'punto_venta'=>$facturacion->punto_venta, 'fecha'=>$request->fecha]);
            $pdf->save(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name);
        }elseif($request->tipo_comprobante == "P"){
            $cae = "NO EXISTE";
            $vencimiento = "NO EXISTE";
            $codigo = "NO";
            $name = $request->tipo_comprobante.$request->num_comprobante.'.pdf';
            fopen(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name,'w+');
                        $pdf = PDF::loadView('layouts.pdf.comprobante', ['barcode'=>"",'codigo'=>$codigo,'detalles'=>$detalles, 'Comprobante'=>$request, 'vencimiento'=>"", 'cae'=>$facturacion->cae, 'num_comprobante' => $request->num_comprobante, 'tipo_comprobante' => $facturacion->tipo_comprobante, 'comp' => $request->tipo_comprobante, 'titulo_factura'=>"Presupuesto", 'punto_venta'=>$facturacion->punto_venta, 'fecha'=>$request->fecha]);
            $pdf->save(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name);
        }elseif($request->tipo_comprobante == "NCA"){
            $cae = $facturacion->cae;
            $vencimiento = $facturacion->vencimiento_cae;
            $codigo = $facturacion->cuit_emisor.$facturacion->tipo_comprobante.$facturacion->punto_venta.$facturacion->cae.$facturacion->vencimiento_cae;
            $bar = new DNS1D;
            $barcode = '<img src="data:image/png;base64,' . $bar->getBarcodePNG("$codigo", "I25+",1.2,45,array(1,1,1)) . '" alt="barcode"   />';
            $name = $request->tipo_comprobante.$request->num_comprobante.'.pdf';
            fopen(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name,'w+');
            $pdf = PDF::loadView('layouts.pdf.comprobante', ['barcode'=>$barcode,'codigo'=>$codigo,'detalles'=>$detalles, 'Comprobante'=>$request, 'vencimiento'=>date("d-m-Y", strtotime($facturacion->vencimiento_cae)), 'cae'=>$facturacion->cae, 'num_comprobante' => $request->num_comprobante, 'tipo_comprobante' => $facturacion->tipo_comprobante, 'comp' => "A", 'titulo_factura'=>"Nota de crédito", 'punto_venta'=>$facturacion->punto_venta, 'fecha'=>$request->fecha]);
            $pdf->save(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name);
        }elseif($request->tipo_comprobante == "NCB"){
            $cae = $facturacion->cae;
            $vencimiento = $facturacion->vencimiento_cae;
            $codigo = $facturacion->cuit_emisor.$facturacion->tipo_comprobante.$facturacion->punto_venta.$facturacion->cae.$facturacion->vencimiento_cae;
            $bar = new DNS1D;
            $barcode = '<img src="data:image/png;base64,' . $bar->getBarcodePNG("$codigo", "I25+",1.2,45,array(1,1,1)) . '" alt="barcode"   />';
            $name = $request->tipo_comprobante.$request->num_comprobante.'.pdf';
            fopen(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name,'w+');
            $pdf = PDF::loadView('layouts.pdf.comprobante', ['barcode'=>$barcode,'codigo'=>$codigo,'detalles'=>$detalles, 'Comprobante'=>$request, 'vencimiento'=>date("d-m-Y", strtotime($facturacion->vencimiento_cae)), 'cae'=>$facturacion->cae, 'num_comprobante' => $request->num_comprobante, 'tipo_comprobante' => $facturacion->tipo_comprobante, 'comp' => "B", 'titulo_factura'=>"Nota de crédito", 'punto_venta'=>$facturacion->punto_venta, 'fecha'=>$request->fecha]);
            $pdf->save(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name);
        }elseif($request->tipo_comprobante == "NCC"){
            $cae = $facturacion->cae;
            $vencimiento = $facturacion->vencimiento_cae;
            $codigo = $facturacion->cuit_emisor.$facturacion->tipo_comprobante.$facturacion->punto_venta.$facturacion->cae.$facturacion->vencimiento_cae;
            $bar = new DNS1D;
            $barcode = '<img src="data:image/png;base64,' . $bar->getBarcodePNG("$codigo", "I25+",1.2,45,array(1,1,1)) . '" alt="barcode"   />';
            $name = $request->tipo_comprobante.$request->num_comprobante.'.pdf';
            fopen(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name,'w+');
            $pdf = PDF::loadView('layouts.pdf.comprobante', ['barcode'=>$barcode,'codigo'=>$codigo,'detalles'=>$detalles, 'Comprobante'=>$request, 'vencimiento'=>date("d-m-Y", strtotime($facturacion->vencimiento_cae)), 'cae'=>$facturacion->cae, 'num_comprobante' => $request->num_comprobante, 'tipo_comprobante' => $facturacion->tipo_comprobante, 'comp' => "C", 'titulo_factura'=>"Nota de crédito", 'punto_venta'=>$facturacion->punto_venta, 'fecha'=>$request->fecha]);
            $pdf->save(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name);
        }else{
            $cae = $facturacion->cae;
            $vencimiento = $facturacion->vencimiento_cae;
            $codigo = $facturacion->cuit_emisor.$facturacion->tipo_comprobante.$facturacion->punto_venta.$facturacion->cae.$facturacion->vencimiento_cae;
            $bar = new DNS1D;
            $barcode = '<img src="data:image/png;base64,' . $bar->getBarcodePNG("$codigo", "I25+",1.2,45,array(1,1,1)) . '" alt="barcode"   />';
            $name = $request->tipo_comprobante.$request->num_comprobante.'.pdf';
            fopen(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name,'w+');
            $pdf = PDF::loadView('layouts.pdf.comprobante', ['barcode'=>$barcode,'codigo'=>$codigo,'detalles'=>$detalles, 'Comprobante'=>$request, 'vencimiento'=>date("d-m-Y", strtotime($facturacion->vencimiento_cae)), 'cae'=>$facturacion->cae, 'num_comprobante' => $request->num_comprobante, 'tipo_comprobante' => $facturacion->tipo_comprobante, 'comp' => $request->tipo_comprobante, 'titulo_factura'=>"Factura", 'punto_venta'=>$facturacion->punto_venta, 'fecha'=>$request->fecha]);
            $pdf->save(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name);
        }
    }

    public function num_comprobante($tipo){
        if($tipo == "A"){
            $factura = FacturaA::orderBy('id', 'DESC')->get()->first();
            if($factura == null){
                return "00000001";
            }else{
                $id = floatval($factura->id)+1;
                return str_pad($id, 8, "0", STR_PAD_LEFT);
            }
        }elseif($tipo == "B"){
            $factura = FacturaB::orderBy('id', 'DESC')->get()->first();
            if($factura == null){
                return "00000001";
            }else{
                $id = floatval($factura->id)+1;
                return str_pad($id, 8, "0", STR_PAD_LEFT);
            }
        }elseif($tipo == "C"){
            $factura = FacturaC::orderBy('id', 'DESC')->get()->first();
            if($factura == null){
                return "00000001";
            }else{
                $id = floatval($factura->id)+1;
                return str_pad($id, 8, "0", STR_PAD_LEFT);
            }
        }elseif($tipo == "NCA"){
            $factura = CreditoA::orderBy('id', 'DESC')->get()->first();
            if($factura == null){
                return "00000001";
            }else{
                $id = floatval($factura->id)+1;
                return str_pad($id, 8, "0", STR_PAD_LEFT);
            }
        }elseif($tipo == "NCB"){
            $factura = CreditoB::orderBy('id', 'DESC')->get()->first();
            if($factura == null){
                return "00000001";
            }else{
                $id = floatval($factura->id)+1;
                return str_pad($id, 8, "0", STR_PAD_LEFT);
            }
        }elseif($tipo == "NCC"){
            $factura = CreditoC::orderBy('id', 'DESC')->get()->first();
            if($factura == null){
                return "00000001";
            }else{
                $id = floatval($factura->id)+1;
                return str_pad($id, 8, "0", STR_PAD_LEFT);
            }
        }elseif($tipo == "R"){
            $factura = Remito::orderBy('id', 'DESC')->get()->first();
            if($factura == null){
                return "00000001";
            }else{
                $id = floatval($factura->id)+1;
                return str_pad($id, 8, "0", STR_PAD_LEFT);
            }
        }elseif($tipo == "P"){
            $factura = Presupuesto::orderBy('id', 'DESC')->get()->first();
            if($factura == null){
                return "00000001";
            }else{
                $id = floatval($factura->id)+1;
                return str_pad($id, 8, "0", STR_PAD_LEFT);
            }
        }elseif($tipo == "RC"){
            $factura = ResumenCuenta::orderBy('id', 'DESC')->get()->first();
            if($factura == null){
                return "00000001";
            }else{
                $id = floatval($factura->id)+1;
                return str_pad($id, 8, "0", STR_PAD_LEFT);
            }
        }
    }
}
