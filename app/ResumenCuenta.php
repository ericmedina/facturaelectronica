<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ResumenCuenta extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_resumen_cuenta';
    }

    public function movimiento(){
    	return $this->hasOne('App\Movimiento');
    }
    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
}
