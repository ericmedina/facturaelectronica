<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Compra extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_compras';
    }
    public function proveedor(){
    	return $this->belongsTo('App\Proveedor');
    }

    public function movimiento(){
    	return $this->hasOne('App\Movimiento');
    }
    public function detalle_compra(){
        return $this->hasMany('App\DetalleCompra');
    }
    public function scopeLastTotal($query, $desde, $hasta){
        return $query->whereBetween('fecha', [$desde, $hasta]);
    }
    public function scopeCurrTotal($query, $desde, $hasta){
        return $query->whereBetween('fecha', [$desde, $hasta]);
    }
}
