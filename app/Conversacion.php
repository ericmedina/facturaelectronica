<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversacion extends Model
{
    protected $table = "01conversacion";
    
    public function ticketEmpresa(){
    	return $this->belongsTo('App\Ticket_empresa', 'ticket_id', 'id');
    }
    public function empresa(){
    	return $this->belongsTo('App\Empresa', 'user_id', 'id');
    }
    public function administrador(){
    	return $this->belongsTo('App\Administrador', 'user_id', 'id');
    }
}
