<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Venta extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_ventas';
    }
    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
    public function Movimiento(){
    	return $this->hasOne('App\Movimiento');
    }
    public function detalle(){
        return $this->hasMany('App\Detalle');
    }
    public function factura_a(){
        return $this->belongsTo('App\FacturaA', 'num_comprobante');
    }
    public function factura_b(){
        return $this->belongsTo('App\FacturaB', 'num_comprobante');
    }
    public function factura_c(){
        return $this->belongsTo('App\FacturaC', 'num_comprobante');
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
