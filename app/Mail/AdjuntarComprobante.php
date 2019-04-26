<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use App\Venta;

class AdjuntarComprobante extends Mailable
{
    use Queueable, SerializesModels;

    public $venta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Venta $venta)
    {
        $this->venta = $venta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.enviarcomprobante')->subject(Auth::user()->razon_social.' le envió un comprobante')->attach(storage_path().'/app/public/facturacion/comprobantes/'.Auth::user()->cuit.'/'.$this->venta->tipo_comprobante.str_pad($this->venta->num_comprobante, '8', '0', STR_PAD_LEFT).'.pdf');
    }
}
