<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class FacturaC extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_factura_c';
    }
    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
    public function venta(){
    	return $this->hasOne('App\Venta', 'num_comprobante', 'id');
    }
}
