<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = '01categorias';

    public function Facturas(){
    	return $this->hasMany('App\Facturas_sistema');
    }
    public function Empresa(){
    	return $this->hasMany('App\Empresa');
    }
}
