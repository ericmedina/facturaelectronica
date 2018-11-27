<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas_sistema extends Model
{
    protected $table = '01facturas_sistema';

    public function Categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function Empresa(){
    	return $this->belongsTo('App\Empresa');
    }
    public function scopeSearch($query, $id){
    	return $query->where('empresa_id', "=", $id);
    }
    public function scopeSearchPendiente($query, $id){
        return $query->where('empresa_id', "=", $id)->where('estado', '=', 'Pendiente');
    }
    public function scopeExternalReference($query, $id){
        return $query->where('external_id', $id);
    }
}
