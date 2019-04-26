<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table="01actividades";

     public function empresa(){
    	return $this->belongsTo('App\Empresa', 'usuario_id', 'id');
    }
     public function contador(){
    	return $this->belongsTo('App\Contador', 'usuario_id', 'id');
    }
    
}
