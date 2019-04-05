<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use Laracasts\Flash\FlashNotifier;
use App\Actividad;
use Auth;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $marcas = Marca::search($request->buscar)->orderBy('marca', 'ASC')->get();
        return view('marcas.index')->with('marcas', $marcas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->marca = $request->marca;
        $marca->remarco = $request->remarco;
        $marca->save();
        //--------fin del guardado de actividad----------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Agrego la marca ".$request->marca;
        $actividad->save();
        //--------fin del guardado de actividad----------------

        flash("<b>¡$marca->marca</b> ha sido agregado con éxito!")->success()->important();
        return redirect(route('marcas.index'));
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
        $marca = Marca::find($id);
        return view('marcas.edit')->with('marca', $marca);
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
        $marca = Marca::find($id);
        $marca_vieja=$marca->marca;
        $marca->marca = $request->marca;
        $marca->remarco = $request->remarco;
        $marca->save();
         //--------fin del guardado de actividad----------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Edito la marca ".$marca_vieja." por ".$request->marca;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        flash("<b>¡$marca->marca</b> ha sido editado con éxito!")->warning()->important();
        return redirect(route('marcas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca_eliminada=$marca->marca;
        //$marca->delete();
        //--------fin del guardado de actividad----------------
        if($marca->delete()){
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Elimino la marca ".$marca_eliminada;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        }
        flash("<b>¡$marca->marca</b> se ha eliminado con éxito!")->error()->important();
        return redirect(route('marcas.index'));
    }
}
