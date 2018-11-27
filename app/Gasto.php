<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Gasto extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_gastos';
    }
    public function scopeSearch($query, $value){
    	return $this->where('descripcion', 'like', "%$value%");
    }
    public function Movimiento(){
    	return $this->hasOne('App\Movimiento');
    }
    public function scopeLastTotal($query, $desde, $hasta){
        return $query->whereBetween('fecha', [$desde, $hasta]);
    }
    public function scopeCurrTotal($query, $desde, $hasta){
        return $query->whereBetween('fecha', [$desde, $hasta]);
    }
}
