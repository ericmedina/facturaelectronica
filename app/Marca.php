<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Marca extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_marcas';
    }

    public function productos(){
    	return $this->hasMany('App\Producto');
    }
    public function scopeSearch($query, $value){
    	return $query->where('marca', "LIKE", "%$value%");
    }


}
