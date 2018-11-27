<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsabilidad_iva extends Model
{
    protected $table = '01responsabilidades_iva';

    public function empresas(){
    	return $this->hasMany('App\Empresa');
    }

    public function scopeSearch($query, $name){
    	return $query->where('nombre', "=", $name)->get()->first();
    }
}
