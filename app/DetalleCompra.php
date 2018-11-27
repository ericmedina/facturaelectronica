<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DetalleCompra extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_detalle_compras';
    }

    public function compra(){
    	return $this->belongsTo('App\Compra');
    }
    public function producto(){
    	return $this->belongsTo('App\Producto');
    }
}
