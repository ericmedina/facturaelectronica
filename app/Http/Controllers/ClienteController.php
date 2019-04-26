<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Venta;
use App\Responsabilidad_iva;
use Laracasts\Flash\FlashNotifier;
use App\Actividad;
use Auth;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Cliente::search($request->buscar)->orderBy('nombre', 'ASC')->get();
        $clientes->each(function($cliente){
            $cliente->responsabilidades_iva;
        });
        return view('clientes.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsabilidad_iva = Responsabilidad_iva::orderBy('id', 'ASC')->get();
        return view('clientes.create')->with('responsabilidad_iva', $responsabilidad_iva);
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
            'nombre' => 'required|max:255',
            'cuit' => 'required|unique:'.str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_clientes|max:255',
        ]);
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->cuit = $request->cuit;
        $cliente->direccion = $request->direccion;
        $cliente->localidad = $request->localidad;
        $cliente->provincia = $request->provincia;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->responsabilidades_iva_id = $request->responsabilidad_iva;
        $cliente->save();
        //-----------guarda la actividad--------------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Agrego un nuevo cliente: ".$request->nombre;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        flash("<b>¡$cliente->nombre</b> ha sido agregado con éxito!")->success()->important();
        return redirect(route('clientes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        $cliente->responsabilidades_iva;
        $cliente->ventas;
        $total = 0;
        $cliente->ventas->each(function($client) use(&$total){
            $client->detalle;
            $client->detalle->each(function($detalle) use(&$total){
                $total+= floatval($detalle->total);
            });
        });
        return view('clientes.show')
            ->with('clientes', $cliente->ventas)
            ->with('cliente', $cliente)
            ->with('total', $total);
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
        $responsabilidad_iva = Responsabilidad_iva::orderBy('id','ASC')->get();
        return view('clientes.edit')->with('cliente', $cliente)->with('responsabilidad_iva', $responsabilidad_iva);
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
            'nombre' => 'required|max:255',
            'cuit' => 'required|unique:'.str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_clientes|max:255',
        ]);
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->cuit = $request->cuit;
        $cliente->direccion = $request->direccion;
        $cliente->localidad = $request->localidad;
        $cliente->provincia = $request->provincia;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->responsabilidades_iva_id = $request->responsabilidad_iva;
        $cliente->save();
        //-----------guarda la actividad--------------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Edito un datos del cliente: ".$request->nombre;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        flash("<b>¡$cliente->nombre</b> ha sido editado con éxito!")->warning()->important();
        return redirect(route('clientes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        //-----------guarda la actividad--------------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Elimino al cliente: ".$cliente->nombre;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        flash("<b>¡$cliente->nombre</b> ha sido eliminado con éxito!")->error()->important();
        return redirect(route('clientes.index'));
    }
}
