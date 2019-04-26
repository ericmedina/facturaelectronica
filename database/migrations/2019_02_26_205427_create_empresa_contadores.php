<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaContadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('01empresas_contadores', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('empresa_id')->unsigned();
            $table->integer('contador_id')->unsigned();
            $table->enum('estado', ['pendiente', 'aprobado', 'rechazado'])->default('pendiente');

            $table->foreign('empresa_id')->references('id')->on('01empresas')->onDelete('cascade');
            $table->foreign('contador_id')->references('id')->on('01contadores');

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
        Schema::dropIfExists('01empresas_contadores');
    }
}
