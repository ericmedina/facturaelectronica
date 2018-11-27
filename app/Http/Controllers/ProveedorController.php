<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Proveedor;
use Laracasts\Flash\FlashNotifier;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $proveedor = Proveedor::search($request->buscar)->orderBy('nombre', 'ASC')->get();
        return view('proveedores.index')->with('proveedores', $proveedor);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor();
        $proveedor->nombre = $request->nombre;
        $proveedor->cuit = $request->cuit;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->observaciones = $request->observaciones;
        $proveedor->save();
        flash("<b>¡$proveedor->nombre</b> ha sido agregado con éxito!")->success()->important();
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
        $proveedor = Proveedor::find($id);
        return view('proveedores.edit')->with('proveedor', $proveedor);
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
        $proveedor = Proveedor::find($id);
        $proveedor->nombre = $request->nombre;
        $proveedor->cuit = $request->cuit;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->observaciones = $request->observaciones;
        $proveedor->save();
        flash("<b>¡$proveedor->nombre</b> ha sido editado con éxito!")->warning()->important();
        return redirect(route('proveedor.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        flash("<b>¡$proveedor->nombre</b> se ha eliminado con éxito!")->error()->important();
        return redirect(route('proveedor.index'));
    }
}
