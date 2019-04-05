<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Fiscal;
use App\EmpresaContador;
use Auth;
use App\Actividad;
use App\Contador;
use App\Contrato;
use Carbon\Carbon;
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            

       $empresa = new Empresa();
        $empresa->razon_social = $request->razon_social;
        $empresa->cuit = $request->cuit;
        $empresa->nombre_fantasia = $request->nombre_fantasia;
        $empresa->direccion = $request->direccion;
        $empresa->localidad = $request->localidad;
        $empresa->provincia = $request->provincia;
        $empresa->telefono = $request->telefono;
        $empresa->email = $request->email;
        $empresa->password = bcrypt($request->password);
        $empresa->tipo_actividad = $request->tipo_actividad;
        $empresa->responsabilidad_iva_id = $request->responsabilidad_iva;
        $empresa->categoria_id = $request->categoria_id;
        if($empresa->save()){
            $empresa->migrar(strtolower(str_replace(" ","_",$empresa->razon_social)), $empresa->responsabilidad_iva_id);
            $fiscal = new Fiscal();
            $fiscal->empresa_id =  $empresa->id;
            $fiscal->save();
            

        //--------fin del guardado de actividad----------------
              $actividad=new Actividad();
              $actividad->usuario_id=Auth::id();
              $actividad->tipo_usuario="Empresa";
              $actividad->actividad="Se creo la empresa ".$nombre_fantasia;
              $actividad->save();
        //--------fin del guardado de actividad----------------
        }
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
    public function update(Request $request, $acepta)
    {
        //lo uso para aceptar este contador a una empresa
       // dd($a);
        if($acepta=='si'){
             $empresa_contador=EmpresaContador::find(Auth::user()->empresa_contador->id);
             $empresa_contador->estado='aprobado';
             $empresa_contador->save();
             //--------fin del guardado de actividad----------------
              $empresa=Empresa::find($empresa_contador->empresa_id);
              $contador=Contador::find($empresa_contador->contador_id);
              $actividad=new Actividad();
              $actividad->usuario_id=Auth::id();
              $actividad->tipo_usuario="Empresa";
              $actividad->actividad="La empresa ".$empresa->nombre_fantasia." acepto al contador ".$contador->nombre;
              $actividad->save();
        //--------fin del guardado de actividad----------------

        }
        if($acepta=='no'){
             $empresa_contador=EmpresaContador::find(Auth::user()->empresa_contador->id);
             $empresa_contador->estado='rechazado';
             $empresa_contador->save();
              //--------fin del guardado de actividad----------------
              $empresa=Empresa::find($empresa_contador->empresa_id);
              $contador=Contador::find($empresa_contador->contador_id);
              $actividad=new Actividad();
              $actividad->usuario_id=Auth::id();
              $actividad->tipo_usuario="Empresa";
              $actividad->actividad="La empresa ".$empresa->nombre_fantasia." rechazo al contador ".$contador->nombre;
              $actividad->save();
                //--------fin del guardado de actividad----------------
        }
        return redirect("/");
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
