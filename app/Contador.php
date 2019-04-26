<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contador extends Model
{
    //
	protected $table="01contadores";    

	public function empresa_contador(){
    	return $this->hasMany('App\EmpresaContador');
    }

}
