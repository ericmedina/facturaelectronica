<?php

namespace App\Http\Controllers;

use App\Ticket_empresa;
use Illuminate\Http\Request;
use Auth;
use App\Empresa;
use App\Conversacion;
use App\Actividad;

class TicketEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = Ticket_empresa::where('user_id' , Auth::user()->id)->where('tipo_user', 'empresa')->orderBy('updated_at','DSC')->get();
        

        return view('tickets.index')->with('tickets',$ticket);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = Empresa::find(Auth::user()->id);
        $ticket = New Ticket_empresa;

        $ticket->asunto = $request->asunto;
        $ticket->user_id = $empresa->id;
        $ticket->tipo_user = 'empresa';
        $ticket->estado =  'consulta';
        $ticket->save();
        $conversacion = new Conversacion;
        $conversacion->ticket_id = $ticket->id;
        $conversacion->user_id= $empresa->id;
        $conversacion->tipo_user = 'empresa';
        $conversacion->mensaje = $request->mensaje;
        //--------guardado de actividad----------------
        $actividad=new Actividad();
        $actividad->usuario_id=Auth::id();
        $actividad->tipo_usuario="Empresa";
        $actividad->actividad="Inicio el ticket ".$request->asunto;
        $actividad->save();
        //--------fin del guardado de actividad----------------
        $conversacion->save();
        return redirect(route('ticket.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket_empresa  $ticket_empresa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket =Ticket_empresa::find($id);
      
        if ($ticket->estado == 'respuesta') {
        
            $ticket->leido = true;
            $ticket->save();
        }


        return view('tickets.show')->with('tickets', $ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket_empresa  $ticket_empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket_empresa $ticket_empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket_empresa  $ticket_empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket_empresa $ticket_empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket_empresa  $ticket_empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket_empresa $ticket_empresa)
    {
        //
    }
}
