<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemFacturaC extends Model
{
    protected $table = 'eric_medina_factura_c';

    
    public function cliente(){
    	return $this->belongsTo('App\Empresa');
    }
    public function venta(){
    	return $this->hasOne('App\SystemVenta', 'num_comprobante', 'id');
    }
}
