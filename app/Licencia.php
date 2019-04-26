<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    protected $table = '01licencias';

    public function contrato(){
    	return $this->hasMany('App\Contrato');
    }
   

}
