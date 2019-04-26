<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conversacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('01conversacion', function(Blueprint $table){
            $table->increments('id');
            $table->integer('ticket_id')->unsigned();
            $table->enum('tipo_user', ['empresa','administrador']);
            $table->text('mensaje');
            $table->integer('user_id');
            $table->timestamps();
            $table->foreign('ticket_id')->references('id')->on('01tickets_empresa');
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
