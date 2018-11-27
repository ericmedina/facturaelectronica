<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CreditoC extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_credito_c';
    }

    public function cliente(){
    	return $this->belongsTo('App\Cliente');
    }
}
