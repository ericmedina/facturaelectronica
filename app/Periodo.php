<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
	protected $table = '01periodos';
    public function contrato(){
    	return $this->hasMany('App\Contrato');
    }

}
