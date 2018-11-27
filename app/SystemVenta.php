<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemVenta extends Model
{
    protected $table = 'eric_medina_ventas';

    public function cliente(){
    	return $this->belongsTo('App\Empresa');
    }
    public function Movimiento(){
    	return $this->hasOne('App\SystemMovimiento');
    }
    public function detalle(){
        return $this->hasMany('App\SystemDetalle');
    }
    public function factura_a(){
        return $this->belongsTo('App\SystemFacturaA', 'num_comprobante');
    }
    public function factura_b(){
        return $this->belongsTo('App\SystemFacturaB', 'num_comprobante');
    }
    public function factura_c(){
        return $this->belongsTo('App\SystemFacturaC', 'num_comprobante');
    }
    public function scopeLastTotal($query, $desde, $hasta){
        return $query->whereBetween('fecha', [$desde, $hasta])->where('estado',"Pago");
    }
    public function scopeCurrTotal($query, $desde, $hasta){
        return $query->whereBetween('fecha', [$desde, $hasta])->where('estado',"Pago");
    }
    public function scopeCuentas($query){
        return $query->select(DB::raw('cliente_id, sum(total) as total'))->where('estado', 'Pendiente')->groupBy('cliente_id');
    }
}
