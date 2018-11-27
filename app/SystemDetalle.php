<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemDetalle extends Model
{
    protected $table = 'eric_medina_detalles';

    public function venta(){
    	return $this->belongsTo('App\SystemVenta');
    }
}
