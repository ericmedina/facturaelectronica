<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Empresa;

class Tramitado extends Mailable
{
    use Queueable, SerializesModels;

    public $empresa;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($empresa)
    {
        $this->empresa = $empresa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.tramitado')->with('empresa', $this->empresa);
    }
}
