<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SaldoFavor extends Model
{
    protected $table = '';

    public function __construct(){
    	$this->table = $this->table = str_replace(" ", "_", strtolower(Auth::user()->razon_social)).'_saldo_favor';
    }
}
