<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Gasto;
use App\Movimiento;
use Auth;
use App\Actividad;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gastos = Gasto::search($request->buscar)->orderBy('id', 'DESC')->get();
        return view('gastos.index')->with('gastos', $gastos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::today()->format('Y-m-d');
        return view('gastos.create')->with('fecha',$fecha);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gasto = new Gasto();
        $gasto->descripcion = $request->descripcion;
        $gasto->total = $request->total;
        $gasto->fecha = $request->fecha;
        //$gasto->save();
        //--------guardado de actividad----------------
        if($gasto->save()){
            $actividad=new Actividad();
            $actividad->usuario_id=Auth::id();
            $actividad->tipo_usuario="Empresa";
            $actividad->actividad="Ingreso un nuevo gasto en: ".$gasto->descripcion. " de $".$request->total;
            $actividad->save();
        }
        //--------fin del guardado de actividad----------------
        $movimiento  = new Movimiento();
        $movimiento->movimiento_id = $gasto->id;
        $movimiento->movimiento = "GASTO";

        $saldo_anterior = Movimiento::orderBy('id','ASC')->get()->first()->saldo;
        $movimiento->saldo = floatval($saldo_anterior) - floatval($gasto->total);
        $movimiento->save();
        return redirect(route('gastos.index'));

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
        $gasto = Gasto::find($id);
        $gasto_total=$gasto->total;
        $gasto_descripcion=$gasto->descripcion;
       // $gasto->delete();
        //--------guardado de actividad----------------
        if($gasto->delete()){            
             $actividad=new Actividad();
             $actividad->usuario_id=Auth::id();
             $actividad->tipo_usuario="Empresa";
             $actividad->actividad="Borro gasto en: ".$gasto_descripcion." con el valor de $".$gasto_total;
             $actividad->save();
        }
        //--------fin del guardado de actividad----------------
        return redirect(route('gastos.index'));
    }
}
