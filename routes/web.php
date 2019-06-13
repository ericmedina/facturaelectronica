<?php

#----------------------------------------------
#IMPORTS

#----------------------------------------------

use \Milon\Barcode\DNS1D;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;

use Laracasts\Flash\FlashNotifier;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


use Illuminate\Mail\Mailer;
use App\Mail\AdjuntarComprobante;
use App\Mail\RecibirConsulta;
use App\Mail\EnviarConsulta;
use App\Mail\Tramitado;
use SantiGraviano\LaravelMercadoPago\MP;

use App\Ticket_empresa;
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
use App\Contador;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Contrato;
use App\Periodo;

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

@include('web_facturacion.php');

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
        //mensaje flash para ver si tiene contador asignado-----------
        
        if(Auth::user()->empresa_contador){
            if(Auth::user()->empresa_contador->estado =='pendiente'){
                flash("Usted tiene un contador que desea ayudarlo en su empresa, haz click <a href=".url('/contador/perfil')."><b>AQUI</b></a> para ver sus datos y aceptarlo.")->error();
            }
        }
        //----------------------------------------------------
        $movimientos = Movimiento::orderBy('id', 'DESC')->simplePaginate(15);
        $movimientos->each(function($movimiento){
            if($movimiento->movimiento == "VENTA"){
                $movimiento->venta->cliente;
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
        $tickets = Ticket_empresa::where('user_id' , Auth::user()->id)->where('tipo_user', 'empresa')->get();
        $notificacion = 0;
        foreach ($tickets as $ticket) {
            
            if ($ticket->leido == false) {
                if ($ticket->conversacion->last()->tipo_user == 'administrador') {
                    $notificacion = 1;
                    flash("Usted tiene un nuevo mensaje, haz click <a href=".url('/ticket')."><b>AQUI</b></a> para ver sus mensajes.")->success();
                }
            }
        }
        
        $contrato = Contrato::where('empresa_id', Auth::user()->id)->first();
       

       // if ($contrato->licencia->nombre != 'Gratis') {
            
           /* if ($contrato->periodo->dias =='Mensual') {
               $fecha_expira->addMonth(1); 
            }
            if ($contrato->periodo->dias =='Trimestral') {
               $fecha_expira->addMonth(3); 
            }
            if ($contrato->periodo->dias =='Semestral') {
               $fecha_expira->addMonth(6); 
            }
            if ($contrato->periodo->dias =='Anual') {
               $fecha_expira->addMonth(12); 
            }*/

            if ($contrato->licencia->nombre == 'Gratis') {
                $fecha_expira = Carbon::parse($contrato->created_at);   
                $fecha_expira->addMonth(1);
                //$diferencia = $fecha_expira->diffInDays(Carbon::now());
            
               if ($fecha_expira < Carbon::now()) {
                $periodos = Periodo::get();
                return view('contratos.create', compact('periodos'));
               }
            }




        /*if($pagos > 0){
            flash("Tienes $pagos pagos pendientes. Por favor clickea <a href='/pagos' title=''>aquí.</a>")->error();
        }*/
        if(Auth::user()->tipo_actividad == 'productos' || Auth::user()->tipo_actividad == 'productos y servicios'){
            
            return view('index')->with('movimientos', $movimientos)->with('notificacion',$notificacion);
        }else{
            return view('index')->with('movimientos', $movimientos)->with('notificacion',$notificacion);
        }

    }elseif(Auth::user()->estado == 'suspendida manualmente'){
        return view('empresas.suspendida_manual');
    }elseif(Auth::user()->estado == 'suspendida automaticamente'){
        return view('empresas.suspendida_automatica');
    }
});


Route::get('/modificar_codigo', function(){
    foreach (Empresa::get() as $empresa) {
        $comprobantes = DB::table(str_replace(" ", "_", strtolower($empresa->razon_social)).'_reg_ventas_cbte')->get();
        foreach($comprobantes as $comprobante){
            DB::table(str_replace(" ", "_", strtolower($empresa->razon_social)).'_reg_ventas_cbte')
            ->where('id', $comprobante->id)
            ->update(['cliente' => str_pad(substr(trim($comprobante->cliente),0,30), 30, " ", STR_PAD_RIGHT)]);
        }

        Schema::table(str_replace(" ", "_", strtolower($empresa->razon_social)).'_productos', function (Blueprint $table) {
            $table->string('codigo')->nullable()->change();
        });
    }
    Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
    Schema::table('01empresas', function (Blueprint $table) {
        $table->renameColumn('contrato_id','categoria_id');
    });
});

Route::get("/welcome2", function(){
    return view("welcome2");
});
Route::get("/sistemas-personalizados", function(){
    return view("sistema2");
});
Route::get("/marketing-digital", function(){
    return view("marketing2");
});

Route::get("/paginas-web", function(){
    return view("paginas-web2");
});
Route::get("/ecommerce", function(){
    return view("ecomerce2");
});
Route::get("/facturacion-electronica", function(){
    return view("facturacionelectronica2");
});
Route::get('array/productos/{buscar}', function($buscar){
    $productos = App\Producto::search($buscar)->orderBy('producto', 'ASC')->get();
    $productos->each(function($producto){
        $producto->proveedor;
        $producto->marca;
        $producto->categoria_producto;
    });
    return Response::json($productos, 200);
});
Route::get('menu', function(){
    return view('menu');
});