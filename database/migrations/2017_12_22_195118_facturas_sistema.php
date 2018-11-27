<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacturasSistema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas_sistema', function(Blueprint $table){
            $table->increments('id');
            $table->integer('empresa_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->float('total');
            $table->date('fecha');

            $table->foreign('empresa_id')->references('id')->on('empresas');
            $table->foreign('categoria_id')->references('id')->on('categorias');

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
        Schema::dropIfExists('facturas_sistema');
    }
}
