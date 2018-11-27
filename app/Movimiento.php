<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Movimiento extends Model
{
     protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_movimientos';
    }

    public function compra(){
    	return $this->belongsTo('App\Compra', 'movimiento_id', 'id');
    }
    public function gasto(){
    	return $this->belongsTo('App\Gasto', 'movimiento_id', 'id');
    }
    public function venta(){
    	return $this->belongsTo('App\Venta', 'movimiento_id', 'id');
    }
    public function pago(){
        return $this->belongsTo('App\Pago', 'movimiento_id', 'id');
    }
    public function resumen_cuenta(){
        return $this->belongsTo('App\ResumenCuenta', 'movimiento_id', 'id');
    }
}
