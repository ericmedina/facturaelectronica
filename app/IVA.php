<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IVA extends Model
{
    protected $table = '01iva';

    public function servicios(){
    	return $this->hasMany('App\Servicio');
    }
    
    public function productos(){
    	return $this->hasMany('App\Producto');
    }

    public function scopeAlic($query, $value){
    	return $query->where('id', $value);
    }
}
