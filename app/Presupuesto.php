<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Presupuesto extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_presupuestos';
    }
    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
    public function movimiento(){
    	return $this->hasOne('App\Movimiento');
    }
}
