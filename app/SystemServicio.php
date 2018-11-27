<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemServicio extends Model
{
    protected $table = 'eric_medina_servicios';

    

    public function iva(){
    	return $this->belongsTo('App\IVA');
    }


    public function scopeSearch($query, $value){
        return $query->Where('descripcion', 'LIKE', "%$value%");
    }
}
