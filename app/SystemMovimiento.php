<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemMovimiento extends Model
{
     protected $table = 'eric_medina_movimientos';

    public function compra(){
    	return $this->belongsTo('App\SystemCompra', 'movimiento_id', 'id');
    }
    public function gasto(){
    	return $this->belongsTo('App\SystemGasto', 'movimiento_id', 'id');
    }
    public function venta(){
    	return $this->belongsTo('App\SystemVenta', 'movimiento_id', 'id');
    }
    public function pago(){
        return $this->belongsTo('App\SystemPago', 'movimiento_id', 'id');
    }
    public function resumen_cuenta(){
        return $this->belongsTo('App\SystemResumenCuenta', 'movimiento_id', 'id');
    }
}
