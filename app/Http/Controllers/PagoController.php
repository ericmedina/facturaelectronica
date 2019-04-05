<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use Carbon\Carbon;
use App\Movimiento;
use App\Proveedor;
use App\Actividad;
use Auth;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.pago');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fecha = Carbon::today()->format('Y-m-d');
        $pago = New Pago();
        $pago->proveedor_id = $request->id;
        $pago->fecha = $fecha;
        $pago->pago = $request->pago;
        dd($request->pago);
        $pago->save();
        $proveedor = Proveedor::find($request->id);
        $proveedor->deuda -= $request->pago;
        $proveedor->save();
        $saldo_anterior = Movimiento::orderBy('id','DESC')->get()->first()->saldo;
        $movimiento = new Movimiento();
        $movimiento->movimiento_id = $pago->id;
        $movimiento->movimiento = "PAGO";
        $movimiento->saldo = $saldo_anterior-$request->pago;
        $movimiento->save();
         //-------- guardado de actividad----------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Pago $".$request->pago." al proveedor ".$proveedor->nombre;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        return redirect(route('proveedor.index'));
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
