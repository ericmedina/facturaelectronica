<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaProducto;
use Laracasts\Flash\FlashNotifier;
use Auth;
use App\Actividad;


class CategoriaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $categorias = CategoriaProducto::search($request->buscar)->orderBy('categoria', 'ASC')->get();
        return view('categorias_productos.index')->with('categorias', $categorias);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias_productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new CategoriaProducto();
        $categoria->categoria = $request->categoria;
        $categoria->save();
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Agrego la categoria ".$categoria->categoria;
        $actividad->save();
        flash("<b>¡$categoria->categoria</b> ha sido agregado con éxito!")->success()->important();
        return redirect(route('categoriaproducto.index'));
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
        $categoria = CategoriaProducto::find($id);
        return view('categorias_productos.edit')->with('categoria', $categoria);
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
        $categoria = CategoriaProducto::find($id);
        $categoria_vieja=$categoria->categoria;
        $categoria->categoria = $request->categoria;
        $categoria->save();
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Edito la categoria ".$categoria_vieja." por ".$categoria->categoria;
        $actividad->save();
        flash("<b>¡$categoria->categoria</b> ha sido editado con éxito!")->warning()->important();
        return redirect(route('categoriaproducto.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = CategoriaProducto::find($id);
        $categoria->delete();
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Elimino la categoria ".$categoria->categoria;
        $actividad->save();
        flash("<b>¡$categoria->categoria</b> se ha eliminado con éxito!")->error()->important();
        return redirect(route('categoriaproducto.index'));
    }
}
