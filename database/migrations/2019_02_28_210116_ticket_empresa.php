<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TicketEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('01tickets_empresa', function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->enum('tipo_user',['empresa','administrador']);
            $table->string('asunto');
            $table->enum('estado', ['consulta','respuesta','cerrado','no leido']);
            $table->boolean('leido')->default(false);
            
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
