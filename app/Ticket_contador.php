<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket_contador extends Model
{
      protected $table = "01tickets_contador";
    public function conversacion(){
    	return $this->hasMany('App\Conversacion', 'ticket_id', 'id');
    }
    public function empresa(){
    	return $this->belongsTo('App\Empresa', 'user_id', 'id');
    }
    
}
