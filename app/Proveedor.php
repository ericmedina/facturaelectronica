<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Proveedor extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_proveedores';
    }

    public function productos(){
    	return $this->hasMany('App\Producto');
    }
    public function scopeSearch($query, $value){
    	return $query->where('nombre', "LIKE", "%$value%")->orWhere('cuit', "LIKE", "%$value%");
    }


   
}
