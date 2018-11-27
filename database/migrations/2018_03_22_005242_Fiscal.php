<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fiscal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiscal', function(Blueprint $table){
            $table->increments('id');
            $table->integer('empresa_id')->unsigned();
            $table->integer('punto_venta')->nullable();
            $table->date('inicio_actividades')->nullable();
            $table->string('ingresos_brutos')->nullable();
            $table->string('certificado')->nullable();
            $table->string('actividad')->nullable();
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
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
        Schema::dropIfExists('fiscal');
    }
}
