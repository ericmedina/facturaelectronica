<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Venta;
use App\Cliente;
use App\Responsabilidad_iva;
use App\ResumenCuenta;
use Carbon\Carbon;
use App\Movimiento;
use App\actividad;


class ResumenCuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::Cuentas()->orderBy('id', 'DESC')->get();
        $ventas->each(function($venta){
            $venta->cliente;
        });
        return view('resumen_cuentas.index')->with('ventas', $ventas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle = json_decode($request->detalle);
        foreach($detalle as $comprobante){
            $venta = Venta::find($comprobante->id);
            $venta->estado = "Pago";
            $venta->save();
        }
        $resumen = new ResumenCuenta();
        $resumen->fecha = $request->fecha;
        $resumen->total = $request->total;
        $resumen->cliente_id = $request->cliente_id;
        $resumen->save();
        $saldo_anterior = Movimiento::orderBy('id','DESC')->get()->first()->saldo;
        $movimiento = new Movimiento();
        $movimiento->movimiento_id = $resumen->id;
        $movimiento->movimiento = "COBRO CUENTA CORRIENTE";
        $movimiento->saldo = $saldo_anterior+$resumen->total;
        $movimiento->save();
        return(redirect(route('resumen_cuenta.index')));
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
        $cliente = Cliente::find($id);
        $ventas = $cliente->ventas->where('estado',"Pendiente");
        $iva = Responsabilidad_iva::orderBy('id', 'ASC');
        $fecha = Carbon::today()->format('Y-m-d');
        return view('resumen_cuentas.edit')->with(['cliente'=>$cliente, 'ventas'=>$ventas, 'responsabilidades_iva'=>$iva, 'fecha' => $fecha]);
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
