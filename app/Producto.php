<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Producto extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_productos';
    }

    public function proveedor(){
    	return $this->belongsTo('App\Proveedor');
    }

    public function categoria_producto(){
    	return $this->belongsTo('App\CategoriaProducto');
    }

    public function marca(){
        return $this->belongsTo('App\Marca');
    }
    public function iva(){
        return $this->belongsTo('App\IVA');
    }

    public function scopeSearch($query, $value){
        return $query->where('codigo', 'LIKE', "%$value%")->orWhere('producto', 'LIKE', "%$value%");
    }
    public function scopeAlertaStock($query){
        return $query->where('stock_minimo', ">=", "stock");
    }
}
