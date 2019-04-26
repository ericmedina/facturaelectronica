<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConversacionContador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
               Schema::create('01conversacion_contador', function(Blueprint $table){
            $table->increments('id');
            $table->integer('ticket_id')->unsigned();
            $table->enum('tipo_user', ['contador','administrador']);
            $table->text('mensaje');
            $table->integer('user_id');
            $table->timestamps();
            $table->foreign('ticket_id')->references('id')->on('01tickets_contador');
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
