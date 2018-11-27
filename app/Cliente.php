<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cliente extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_clientes';
    }

    public function ventas(){
        return $this->hasMany('App\Venta');
    }
    public function resumen_cuenta(){
        return $this->hasMany('App\ResumenCuenta');
    }
    public function responsabilidades_iva(){
    	return $this->belongsTo('App\Responsabilidad_iva');
    }
    public function scopeSearch($query, $value){
        return $query->where('cuit', 'LIKE', "%$value%")->orWhere('nombre', 'LIKE', "%$value%");
    }
    public function scopeSearchCuit($query, $value){
        return $query->where('cuit', '=', $value);
    }
}
