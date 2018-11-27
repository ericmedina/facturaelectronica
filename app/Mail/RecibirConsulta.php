<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class RecibirConsulta extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request=$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.consulta')
            ->with([
                'nombre'    => $this->request->nombre,
                'email'     => $this->request->email,
                'telefono'  => $this->request->telefono,
                'localidad' => $this->request->localidad,
                'consulta'  => $this->request->consulta
            ]);
    }
}
