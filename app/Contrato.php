<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = '01contratos';

    public function licencia(){
    	return $this->belongsTo('App\Licencia');
    }
    public function empresa(){
    	return $this->belongsTo('App\Empresa');
    }
    public function factura(){
    	return $this->hasMany('App\Facruras_sistema');
    }
    public function periodo(){
        return $this->belongsTo('App\Periodo');
    }
}
