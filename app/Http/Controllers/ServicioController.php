<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\IVA;
use Laracasts\Flash\FlashNotifier;
use App\Actividad;
use Auth;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $servicios = Servicio::search($request->buscar)->orderBy('descripcion', 'ASC')->get();
        $servicios->each(function($servicio){
            $servicio->iva;
        });
        return view('servicios.index')->with('servicios', $servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iva = IVA::orderBy('id', 'ASC')->get();
        return view('servicios.create')->with('IVA', $iva);
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
            'descripcion' => 'required|max:255',
            'precio' => 'required|max:255',
            'iva' => 'required|max:255',
        ]);
        $servicio = new Servicio();

        $servicio->descripcion = $request->descripcion;
        $servicio->precio = $request->precio;
        $servicio->iva_id = $request->iva;
        $servicio->save();
        //--------guardado de actividad----------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Agrego el servicio ".$request->descripcion;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        flash("<b>¡$servicio->descripcion</b> ha sido agregado con éxito!")->success()->important();
        return redirect(route('servicios.index'));
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
        $servicio = Servicio::find($id);
        $iva = IVA::orderBy('id', 'ASC')->get();
        return view('servicios.edit')->with('IVA', $iva)->with('servicio', $servicio);
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
        $request->validate([
            'descripcion' => 'required|max:255',
            'precio' => 'required|max:255',
            'iva' => 'required|max:255',
        ]);
        $servicio = Servicio::find($id);
        $servicio->descripcion = $request->descripcion;
        $servicio->precio = $request->precio;
        $servicio->iva_id = $request->iva;
        $servicio->save();
        //--------guardado de actividad----------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Edito el servicio ".$request->descripcion;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        flash("<b>¡$servicio->descripcion</b> ha sido editado con éxito!")->warning()->important();
        return redirect(route('servicios.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicio::find($id);
        $servicio_nombre=$servicio->descripcion;
        $servicio->delete();
        //--------guardado de actividad----------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Elimino el servicio ".$servicio_nombre;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        flash("<b>¡$servicio->descripcion</b> ha sido eliminado con éxito!")->error()->important();
        return redirect(route('servicios.index'));
    }
}
