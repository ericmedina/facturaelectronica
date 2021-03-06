<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Producto;
use App\Movimiento;
use App\Responsabilidad_iva;
use Carbon\Carbon;
use App\Compra;
use App\DetalleCompra;
use App\Actividad;
use Auth;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $compras = Compra::orderBy('id', 'DESC')->get();
        $compras->each(function($compra){
            $compra->detalle_compra;
        });
        return view('compras.index')->with('compras', $compras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::today()->format('Y-m-d');
        $proveedor = Proveedor::orderBy('id', 'ASC')->get();
        $iva = Responsabilidad_iva::orderBy('id', 'ASC')->get();
        return view('compras.create')->with('proveedores', $proveedor)->with('iva', $iva)->with('fecha', $fecha);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo_comprobante' => 'required|max:255',
            'num_comprobante' => 'required|max:255',
            'total' => 'required|max:255',
            'pagado' => 'required|max:255',
            'id' => 'required|max:255',
            'detalle' => 'required',
        ]);
        $compra = new Compra();
        $compra->proveedor_id = $request->id;
        $compra->fecha = $request->fecha;
        $compra->tipo_comprobante = $request->tipo_comprobante;
        $compra->num_comprobante = $request->num_comprobante;
        $compra->total = $request->total;
        $compra->pagado = $request->pagado;
        $compra->save();
        $proveedor = Proveedor::find($request->id);
        $deuda = $request->total - $request->pagado;
        $proveedor->deuda += $deuda;
        $proveedor->save();
        $saldo_anterior = Movimiento::orderBy('id','DESC')->get()->first()->saldo;
        $movimiento = new Movimiento();
        $movimiento->movimiento_id = $compra->id;
        $movimiento->movimiento = "COMPRA";
        $movimiento->saldo = $saldo_anterior-$request->pagado;
        $movimiento->save();
        $detalles = json_decode($request->detalle);
        foreach ($detalles as $key => $value) {
            $detalle = new DetalleCompra();
            $detalle->compra_id = $compra->id;
            $detalle->producto_id = $value->id;
            $detalle->cantidad = $value->cantidad;
            $detalle->precio = $value->importe;
            $detalle->total = $value->total;
            $detalle->save();   
            $producto = Producto::find($value->id);
            $producto->stock = floatval($producto->stock)+floatval($value->cantidad);
            $producto->save();
        }
        //-----------guarda la actividad--------------------
        if(empty($proveedor->nombre)){
            $provedor_nombre=".";
        }else{
            $provedor_nombre=" al proveedor ".$proveedor->nombre;
        }
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Se hizo una compra de: ".$detalle->total.$provedor_nombre;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        return redirect(route('compras.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
