<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaContador extends Model
{
	protected $table = "01empresas_contadores";

    public function empresa(){
    	return $this->belongsTo('App\Empresa');
    }
    public function contador(){
    	return $this->belongsTo('App\Contador');
    }
}
