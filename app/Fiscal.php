<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Fiscal extends Model
{
    protected $table = '01fiscal';

    public function empresa(){
    	return $this->belongsTo('App\Empresa');
    }

    public function Cert(){
    	$cert = DB::table($this->table)->first();
        return $cert;
    }
}
