<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TicketContador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('01tickets_contador', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->enum('tipo_user',['contador','administrador']);
            $table->string('asunto');
            $table->enum('estado', ['consulta','respuesta','cerrado']);
            $table->boolean('leido');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
