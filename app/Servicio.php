<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Servicio extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_servicios';
    }

    public function iva(){
    	return $this->belongsTo('App\IVA');
    }


    public function scopeSearch($query, $value){
        return $query->Where('descripcion', 'LIKE', "%$value%");
    }
}
