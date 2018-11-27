<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use \Milon\Barcode\DNS1D;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;

use Laracasts\Flash\FlashNotifier;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


use Illuminate\Mail\Mailer;
use App\Mail\RecibirConsulta;
use App\Mail\EnviarConsulta;
use App\Mail\Tramitado;
use SantiGraviano\LaravelMercadoPago\MP;

use App\Fiscal;
use App\Responsabilidad_iva;
use App\Empresa;
use Pampadev\Facturacion\Facturacion;
use Carbon\Carbon;
use App\Movimiento;
use App\Compra;
use App\Venta;
use App\Gasto;
use App\Cliente;
use App\Producto;
use App\Servicio;
use App\FacturaB;
use App\Detalle;
use App\Facturas_sistema;
use App\FacturaA;
use App\FacturaC;
use App\CreditoA;
use App\CreditoB;
use App\CreditoC;
use App\Remito;
use App\Presupuesto;
use App\IVA;
use App\Reg_Venta_Cbte;
use App\Reg_Venta_Alic;
use App\Alicuota;
use App\ResumenCuenta;
use App\SystemFacturaC;
use App\SystemVenta;
use App\SystemMovimiento;
use App\SystemReg_Venta_Cbte;
use App\SystemReg_Venta_Alic;
use App\SystemDetalle;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

|
*/

Route::get('/mp', 'MercadoPagoController@getCreatePreference');

Route::get('/update_tables', function(){
    DB::transaction(function () {
        if (Schema::hasColumn('01fiscal', 'estado')) {
            Schema::table('01fiscal', function (Blueprint $table) {
                $table->dropColumn('estado');
            });
        }
        Schema::table('01fiscal', function(Blueprint $table){
            $table->enum('estado', ['Pendiente','Tramitado', 'Listo']);
        });
    });
});

Route::get('send_confirm', function(){
    return view('empresas.confirm');
});
Route::get('/register/verify/{confirmation_code}', function($confirmation_code){
    $empresas = Empresa::Confirm($confirmation_code)->get();
    if($empresas->count() <= 0){
        return view('empresas.error_confirm');
    }else{
        $empresa = $empresas->first();
        $empresa->confirmed = 1;
        $empresa->confirmation_code= null;
        $empresa->save();
        return redirect('/login');
    }
});


Route::get('/fiscal/edit', function(){
    $empresa = Empresa::find(Auth::user()->id);
    $empresa->fiscal->estado = "Tramitado";
    $empresa->fiscal->save();
    Mail::to('administracion@pampadev.com.ar')->send(new Tramitado($empresa));
    return view('empresas.tramite');
});
//URL RESPUESTA DE MERCADOPAGO
Route::post('/pagos/check', function(Request $request){
    $topic = $request->input('topic');
    $id = $request->input('id');
    $today = new Carbon('today');
    $file = fopen(public_path().'/logsmp.txt','a+');
    fwrite($file, $topic);
    fwrite($file, $id);
    $mp =  new MP(config('mercadopago.app_id'),config('mercadopago.app_secret'));
    $payment_info = $mp->get("/v1/payments/" . $id);
    $estado = $payment_info['response']['status'];
    if($estado = "approved"){
        $comprobante = Facturas_sistema::ExternalReference($payment_info['response']['external_reference'])->get()->first();
        $comprobante->estado = "Pago";
        $comprobante->save();

        $alicuotas = array((object)array('codigo' => '5','importe_neto' => '700', 'importe_iva' => '0'));
        $detalles = array((object)array('detalle'=>'CUOTA MENSUAL SISTEMA DE GESTIÒN', 'cantidad'=> 0, ' importe' => '700', 'total' => '700', 'id'=>'0', 'tipo' => 'servicio'));


        $facturacion = new Facturacion();
        $facturacion->cert = public_path().'/facturacion/certs/20371763644/20371763644.crt';
        $facturacion->key = public_path().'/facturacion/certs/20371763644/20371763644.key';
        //DATOS EMISOR
        $facturacion->cuit_emisor = 20371763644;
        $facturacion->tipos_iva();
        $facturacion->punto_venta = 3;
        $facturacion->concepto = $facturacion->tipo_actividad('servicios');
        //DATOS CLIENTE
        $facturacion->doc_nro = str_replace("/", "", str_replace("-", "", Auth::user()->cuit));
        $facturacion->tipo_doc = $facturacion->doc_tipo(Auth::user()->cuit);
        //DATOS COMPROBANTE
        $ultimo_comprobante = SystemFacturaC::orderBy('id', 'DESC')->first();
        $facturacion->tipo_comprobante = $facturacion->tipo_comprobante("C");
        $facturacion->comprobante_desde =intval($ultimo_comprobante->id)+1;
        $facturacion->comprobante_hasta =intval($ultimo_comprobante->id)+1;
        $facturacion->comprobante_fecha = Carbon::today()->format('Ymd');
        $facturacion->importe_total = 700;
        $facturacion->importe_neto = 700;
        $facturacion->importe_iva = 0;
        $facturacion->assoc = 0;
        $facturacion->IVA = $alicuotas;
        $facturacion->CAE_Factura_C();

        $request = new StdClass;
        $request->fecha = Carbon::today();
        $request->total = "700";
        $request->forma_pago = "Contado";
        $request->cuit = $facturacion->doc_nro;
        $request->cae = $facturacion->cae;
        $request->vencimiento = date("Y-m-d", strtotime($facturacion->vencimiento_cae));
        if(Auth::user()->nombre_fantasia == null){
            $request->nombre = Auth::user()->razon_social;
        }else{
            $request->nombre = Auth::user()->nombre_fantasia;
        }
        $request->direccion = Auth::user()->direccion;
        $request->localidad = Auth::user()->localidad;
        $request->txtObservaciones = "";
        $request->subtotal = "700";
        $request->num_comprobante = str_pad($facturacion->comprobante_desde,8,'0', STR_PAD_LEFT);
        $request->tipo_comprobante = "C";
        $request->resp_iva = Auth::user()->responsabilidad_iva->nombre;

        $cae = $facturacion->cae;
        $vencimiento = $facturacion->vencimiento_cae;
        $codigo = $facturacion->cuit_emisor.$facturacion->tipo_comprobante.$facturacion->punto_venta.$facturacion->cae.$facturacion->vencimiento_cae;
        $bar = new DNS1D;
        $barcode = '<img src="data:image/png;base64,' . $bar->getBarcodePNG("$codigo", "I25+",1.2,45,array(1,1,1)) . '" alt="barcode"   />';
        $name = 'C'.str_pad($facturacion->comprobante_desde,8,'0', STR_PAD_LEFT).'.pdf' ;
        fopen(public_path().'/facturacion/comprobantes/20371763644/'.$name,'w+');
        $pdf = PDF::loadView('layouts.pdf.comprobante', ['barcode'=>$barcode,'codigo'=>$codigo,'detalles'=>$detalles, 'Comprobante'=>$request, 'vencimiento'=>date("d-m-Y", strtotime($facturacion->vencimiento_cae)), 'cae'=>$facturacion->cae, 'num_comprobante' => $request->num_comprobante, 'tipo_comprobante' => $facturacion->tipo_comprobante, 'comp' => $request->tipo_comprobante, 'titulo_factura'=>"Factura", 'punto_venta'=>$facturacion->punto_venta, 'fecha'=>$request->fecha]);
        $pdf->save(public_path().'/facturacion/comprobantes/20371763644/'.$name);

        $factura = new SystemFacturaC();
            $factura->fecha = $request->fecha;
            $fecha = new Carbon($request->fecha);
            $factura->vencimiento = $fecha->addMonth(1)->format('Y-m-d');
            $factura->total = $request->total;
            $factura->forma_pago = $request->forma_pago;
            $factura->empresa_id = Auth::user()->id; 
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
            $venta = new SystemVenta();
            $venta->cliente_id = $factura->empresa_id;
            $venta->fecha = $factura->fecha;
            $venta->tipo_comprobante = "C";
            $venta->num_comprobante = $factura->id;
            $venta->total = $factura->total;
            $venta->save();

            $regimen_venta_cbte = new SystemReg_Venta_Cbte();
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
                $regimen_venta_alic = new SystemReg_Venta_Alic();
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

            $saldo_anterior = SystemMovimiento::orderBy('id','DESC')->get()->first()->saldo;
            $movimiento = new SystemMovimiento();
            $movimiento->movimiento_id = $venta->id;
            $movimiento->movimiento = "VENTA";
            if($request->forma_pago == "cuenta_corriente"){
                $movimiento->saldo = $saldo_anterior;
            }else{
                $movimiento->saldo = $saldo_anterior+$factura->total;
            }
            $movimiento->save();
            foreach ($detalles as $key => $value) {
                $detalle = new SystemDetalle();
                $detalle->venta_id = $venta->id;
                $detalle->descripcion = $value->detalle;
                $detalle->cantidad = $value->cantidad;
                $detalle->precio = $value->importe;
                $detalle->total = floatval($value->importe)*floatval($value->cantidad);
                $detalle->tipo = $value->tipo;
                $detalle->save();   
            }
    }
    return response('',200);
    //usar getPayment
});

Route::get('/crear_usuariomp', function(){
    $body = array(
    "json_data" => array(
      "site_id" => "MLA"
    )
  );
  $result =  new MP(config('mercadopago.app_id'),config('mercadopago.app_secret'));
  $result->sandbox_mode(true);
  $response = $result->post('/users/test_user', '{"site_id":"MLA"}');

  dd($response);
});

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});
Route::get('/', function () {
    if(Auth::guest()){
        return view('welcome');
    }elseif(Auth::user()->estado == 'activa'){
        $fiscal = Fiscal::find(Auth::user()->fiscal->id);
        if($fiscal->inicio_actividades == null || $fiscal->punto_venta == null || $fiscal->ingresos_brutos == null){
            flash("Por favor dirígase a su perfil clickeando <a href=".url('/empresas/perfil')."><b>aquí</b></a> para completar los datos necesarios para la generación de comprobantes.")->error();
        }
        if($fiscal->certificado == null){
            flash("Para poder facturar debe generar sus certificados en AFIP, por favor clickee <a href=".route('keys')."><b>aquí</b></a> y siga los pasos o contáctese a administración@pampadev.com.ar y lo ayudaremos.")->error();
        }
        $movimientos = Movimiento::orderBy('id', 'DESC')->simplePaginate(15);
        $movimientos->each(function($movimiento){
            if($movimiento->movimiento == "VENTA"){
                $movimiento->venta;
            }elseif($movimiento->movimiento == "COMPRA"){
                $movimiento->compra;
            }elseif($movimiento->movimiento == "GASTO"){
                $movimiento->gasto;
            }elseif($movimiento->movimiento == "PAGO"){
                $movimiento->pago;
                $movimiento->pago->proveedor;
            }elseif($movimiento->movimiento == "COBRO CUENTA CORRIENTE"){
                $movimiento->resumen_cuenta;
                $movimiento->resumen_cuenta->cliente;
            }
        });
        $pagos = Facturas_sistema::SearchPendiente(Auth::user()->id)->get()->count();
        if($pagos > 0){
            flash("Tienes $pagos pagos pendientes. Por favor clickea <a href='/pagos' title=''>aquí.</a>")->error();
        }
        if(Auth::user()->tipo_actividad == 'productos' || Auth::user()->tipo_actividad == 'productos y servicios'){
            return view('index')->with('movimientos', $movimientos);
        }else{
            return view('index')->with('movimientos', $movimientos);
        }
    }elseif(Auth::user()->estado == 'suspendida manualmente'){
        return view('empresas.suspendida_manual');
    }elseif(Auth::user()->estado == 'suspendida automaticamente'){
        return view('empresas.suspendida_automatica');
    }
});

Route::group(['middleware'=>'auth'], function(){

    Route::get('/crear_cert', function(){
        return view('empresas.create_cert');
    })->name('keys');

    Route::get('getPersona', function() {
        $facturacion = new Facturacion();
        //URLS Y CERTS
        $facturacion->cert = public_path().'/facturacion/certs/'.Auth::user()->cuit.'/'.Auth::user()->cuit.'.crt';
        $facturacion->key = public_path().'/facturacion/certs/'.Auth::user()->cuit.'/'.Auth::user()->cuit.'.key';
        //DATOS EMISOR
        $facturacion->cuit_emisor = Auth::user()->cuit;
        $facturacion->persona('30202020204');
    });

    //INDEX

    //MI PERFIN
    Route::get('/empresas/perfil', function(){
        $responsabilidad_iva = Responsabilidad_iva::orderBy('id', 'ASC')->get();
        return view('empresas.profile')->with('responsabilidad_iva', $responsabilidad_iva);
    });
    Route::get('/empresas/password', function(){
        return view('empresas.password');
    });
    Route::POST('/empresas/password', function(Request $request){
        $empresa = Empresa::find(Auth::id());
        if(!Hash::check($request->password_actual, $empresa->password)){
            flash("La contraseña actual no es correcta")->error();
            return redirect('/empresas/password');
        }
        $empresa->password = bcrypt($request->nueva_password);
        $empresa->save();
        return redirect('/');
    });
    Route::post('/empresas/perfil', function(Request $request){
        $empresa = Empresa::find(Auth::user()->id);
        $empresa->razon_social = $request->razon_social;
        $empresa->nombre_fantasia = $request->nombre_fantasia;
        $empresa->cuit = $request->cuit;
        $empresa->direccion = $request->direccion;
        $empresa->localidad = $request->localidad;
        $empresa->provincia = $request->provincia;
        $empresa->telefono = $request->telefono;
        $empresa->email = $request->email;
        $empresa->responsabilidad_iva_id = $request->responsabilidad_iva;
        $empresa->tipo_actividad = $request->tipo_actividad;
        $empresa->save();
        $fiscal = Fiscal::find($empresa->fiscal->id);
        $fiscal->punto_venta = $request->punto_venta;
        $fiscal->inicio_actividades = $request->inicio_actividades;
        $fiscal->ingresos_brutos = $request->ingresos_brutos;
        $fiscal->actividad = $request->actividad;
        $fiscal->save();

        return redirect('/');
    });
    Route::get('/empresas/confirmar_suspender', function(Request $request){
        return view('empresas/confirmar_suspender');
    });
    Route::get('/empresas/suspender_cuenta', function(Request $request){
        $empresa = Empresa::find(Auth::id());
        $empresa->estado = 'suspendida manualmente';
        $empresa->save();
        Auth::logout();
        return view('empresas/cuenta_cancelada');
    });
    Route::get('/empresas/activar_cuenta', function(Request $request){
        $empresa = Empresa::find(Auth::id());
        $empresa->estado = "activa";
        $empresa->save();
        return redirect('/');
    });


    //CREAR CERT

    Route::post('/upload_cert', function(Request $request){
        if($request->hasFile('cert')){
            $file = $request->file('cert');
            $path = public_path().'/facturacion/certs/'.Auth::user()->cuit.'/';
            $nombre = Auth::user()->cuit.'.'.$file->getClientOriginalExtension();
            if($file->move($path, $nombre)){
                $fiscal = Fiscal::where("empresa_id", Auth::user()->id)->first();
                $fiscal->certificado = Auth::user()->cuit;
                $fiscal->save();
            }
            return redirect('/');
        }
    });

    //PAGOS
    Route::resource('pagos', 'FacturasSistemaController');

    //PROVEEDORES
    Route::post('proveedor/deuda', 'PagoController@store')->name('pago.store');
    Route::get('proveedor/deuda', function(){
        return view('proveedores.pago');
    })->name('proveedor.deuda');
    Route::resource('proveedor', 'ProveedorController');
    Route::get('proveedor/{id}/destroy', 'ProveedorController@destroy')->name('proveedor.destroy');
    Route::get('proveedor/search/{value}', 'AjaxController@buscar_proveedor');
    Route::get('proveedor/search/{value}', 'AjaxController@buscar_proveedor');

    //categorias de productos
    Route::resource('categoriaproducto', 'CategoriaProductoController');
    Route::get('categoriaproducto/{id}/destroy', 'CategoriaProductoController@destroy')->name('categoriaproducto.destroy');

    //Marcas
    Route::resource('marcas', 'MarcaController');
    Route::get('marcas/{id}/destroy', 'MarcaController@destroy')->name('marcas.destroy');

    //Productos
    Route::resource('productos', 'ProductoController');
    Route::get('productos/{id}/destroy', 'ProductoController@destroy')->name('productos.destroy');
    Route::get('productos/search/{value}', 'AjaxController@buscar_producto');

    //Productos
    Route::resource('servicios', 'ServicioController');
    Route::get('servicios/{id}/destroy', 'ServicioController@destroy')->name('servicios.destroy');
    Route::get('servicios/search/{value}', 'AjaxController@buscar_servicio');

    //Clientes
    Route::resource('clientes', 'ClienteController');
    Route::get('clientes/{id}/destroy', 'ClienteController@destroy')->name('clientes.destroy');
    Route::get('clientes/search/{value}', 'AjaxController@buscar_cliente');

    //Facturas
    Route::get('ventas', "VentaController@index")->name('ventas.index');
    Route::get('facturas/create', "FacturacionController@create")->name('facturas.create');
    Route::post('facturas', "FacturacionController@generar_comprobante");
    Route::get('facturas/num_comprobante/{tipo}', "FacturacionController@num_comprobante");
    Route::get('facturas/a', 'FacturaAController@index')->name('facturas_a.index');
    Route::get('facturas/b', 'FacturaBController@index')->name('facturas_b.index');
    Route::get('facturas/c', 'FacturaCController@index')->name('facturas_c.index');
    Route::get('/facturas/{archivo}', 'FacturacionController@mostrar_pdf');
    Route::post('comprobantes', "FacturacionController@save");

    //Resumen cuenta
    Route::post('resumen/generate', function(Request $request){
        $detalles = json_decode($request->detalle);
        $name = $request->tipo_comprobante.$request->num_comprobante.'.pdf';
        fopen(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name,'w+');
        $pdf = PDF::loadView('layouts.pdf.resumen', ['detalles'=>$detalles, 'Comprobante'=>$request, 'num_comprobante' => $request->num_comprobante, 'tipo_comprobante' => $request->tipo_comprobante, 'comp' => 'X', 'titulo_factura'=>"Resúmen de cuenta", 'punto_venta'=>Auth::user()->fiscal->punto_venta, 'fecha'=>$request->fecha]);
        $pdf->save(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name);
    });
    Route::resource('resumen_cuenta', 'ResumenCuentaController');


    //Compras
    Route::resource('compras', 'CompraController');
    Route::get('compras/{id}/destroy', 'CompraController@destroy')->name('compras.destroy');

    //Gastos
    Route::resource('gastos', 'GastoController');
    Route::get('gastos/{id}/destroy', 'GastoController@destroy')->name('gastos.destroy');
    Route::get('/save_comprobante', function(){
        $request = new StdClass;
        $request->fecha = "2018-06-07";
        $request->total = "3500";
        $request->forma_pago = "contado";
        $request->cuit = "30616500593";
        $request->cae = "68239218519548";
        $request->vencimiento = "2018-06-17";
        $request->nombre = "SERVICIO MEDICO PREVISONAL";
        $request->subtotal = "3500";
        $request->num_comprobante = "00000004";
        $request->tipo_comprobante = "B";
        $request->resp_iva = "IVA Sujeto Exento";

        $facturacion = new Facturacion();
        $cliente = Cliente::searchCuit($request->cuit)->get()->first();
        $cliente_id = "";
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
            $factura->cantidad_alicuotas = "1";
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
            //foreach ($alicuotas as $key => $value) {
            $value = new StdClass;
            $value->codigo = "5";
            $value->importe_iva = "0";
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
            //}
            $regimen_venta_cbte->cantidad_alicuotas = "1";
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
            $value = new StdClass;
            $value->detalle = "CAMBIAR KIT CORREAS AUXILIARES IVECO 3.0 AMBULANCIA";
            $value->cantidad = "1";
            $value->importe = "3500";
            $value->tipo = "servicio";
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
            
    });
});

Route::get('/consulta', function(Request $request){
    Mail::to('administracion@pampadev.com.ar')->send(new RecibirConsulta($request));
    Mail::to($request->email)->send(new EnviarConsulta($request));
    return redirect('/');
});

Route::get('/cbte2', function(){
        $detalles = array((object)array('cantidad'=>'1', 'importe' => 4950, "total" => 4950, "detalle" => 'Servicio completo dodge ram', "id"=> "0", "tipo"=> "producto"));
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
        $facturacion->doc_nro = 30500017704;
        $facturacion->tipo_doc = 80;
        //DATOS COMPROBANTE
        $facturacion->tipo_comprobante = 1;
        $facturacion->comprobante_desde =1;
        $facturacion->comprobante_hasta =1;
        $facturacion->comprobante_fecha = '20180421';
        $facturacion->importe_total = 4950;
        $facturacion->importe_neto = 4090.91;
        $facturacion->importe_iva = 859.09;
        $facturacion->cae = 68122438193731;
        $facturacion->vencimiento_cae = 20180421;
        $request = (object) array('tipo_comprobante' => "A", 'fecha' => '2018-04-21', 'nombre' => "LA SEGUNCA C LSG", 'cuit' => "30500017704", 'direccion' => "ROSAS 957", 'localidad' => "ROSARIO", 'forma_pago' => "Contado" , 'resp_iva' => "IVA Responsable Inscripto", "txtObservaciones" => "",'subtotal' => 4090.91,'importe_iva' => 859.09, 'total' => 4950);
        $cae = $facturacion->cae;
        $vencimiento = $facturacion->vencimiento_cae;
        $codigo = $facturacion->cuit_emisor.$facturacion->tipo_comprobante.$facturacion->punto_venta.$facturacion->cae.$facturacion->vencimiento_cae;
        $bar = new DNS1D;
        $barcode = '<img src="data:image/png;base64,' . $bar->getBarcodePNG("$codigo", "I25+",1.2,45,array(1,1,1)) . '" alt="barcode"   />';
        $name = 'P00000001.pdf';
        fopen(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name,'w+');
        $pdf = PDF::loadView('layouts.pdf.comprobante', ['barcode'=>$barcode,'codigo'=>$codigo,'detalles'=>$detalles, 'Comprobante'=>$request, 'vencimiento'=>date("d-m-Y", strtotime($facturacion->vencimiento_cae)), 'cae'=>$facturacion->cae, 'num_comprobante' => '00000001', 'tipo_comprobante' => $facturacion->tipo_comprobante, 'comp' => 'A', 'titulo_factura'=>"Factura", 'punto_venta'=>$facturacion->punto_venta, 'fecha'=>'22/03/2018']);
        $pdf->save(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$name);
        $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; ' ."P00000001.pdf",
            ];
        return Response::make(File::get(public_path().'/facturacion/comprobantes/'.Auth::user()->cuit.'/P00000001.pdf'), 200, $headers);
});
Route::get('/cert/download_csr/{cuit}', function($cuit){
    $pathToFile = public_path().'/facturacion/certs/'.$cuit.'/'.$cuit.'.csr';
    return response()->download($pathToFile);
});
Route::post('cert/upload_crt', function(Request $request){
    $name = $request->cuit.'.crt';
    $file = fopen(public_path().'/facturacion/certs/'.$request->cuit.'/'.$name,'w+');
    fwrite($file, $request->certificado);
    return array('success' => true);
});
Route::get('/ultimo_autorizado', function(){
    $facturacion = new Facturacion();
    //URLS Y CERTS
    $facturacion->cert = public_path().'/facturacion/certs/'.Auth::user()->cuit.'/'.Auth::user()->cuit.'.crt';
    $facturacion->key = public_path().'/facturacion/certs/'.Auth::user()->cuit.'/'.Auth::user()->cuit.'.key';
    //DATOS EMISOR
    $facturacion->cuit_emisor = Auth::user()->cuit;
    $facturacion->tipo_comprobante = "1";
    $facturacion->punto_venta = Auth::user()->fiscal->punto_venta;
    //dd($facturacion->UltimoAutorizado());
    $facturacion->tipos_iva();
    $facturacion->concepto = $facturacion->tipo_actividad(Auth::user()->tipo_actividad);
    //DATOS CLIENTE
    $facturacion->comprobante_desde ="11";
    dd($facturacion->Consultar());
});