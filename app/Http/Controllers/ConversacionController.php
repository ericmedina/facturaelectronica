<?php

namespace App\Http\Controllers;

use App\Conversacion;
use Illuminate\Http\Request;

class ConversacionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $conversacion = new App\Conversacion;
        $conversacion->ticket_id = $request->ticket_id;
        $conversacion->user_id = Auth::user()->id;
        $conversacion->tipo_user = 'empresa';
        $conversacion->mensaje = $request->mensaje;
        $conversacion->save();
        $ticket = Ticket_empresa::find($request->ticket_id);
        $ticket->estado = 'consulta';
        $ticket->leido = false;
        $ticket->save();
        return redirect(url('ticket/'.$request->ticket_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conversacion  $conversacion
     * @return \Illuminate\Http\Response
     */
    public function show(Conversacion $conversacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conversacion  $conversacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Conversacion $conversacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conversacion  $conversacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conversacion $conversacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conversacion  $conversacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conversacion $conversacion)
    {
        //
    }
}
