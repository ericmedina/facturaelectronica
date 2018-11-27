<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function(Blueprint $table){
            $table->increments('id');
            $table->string('razon_social');
            $table->string('cuit');
            $table->string('nombre_fantasia')->nullable();
            $table->string('direccion');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('telefono');
            $table->string('email');
            $table->string('password');
            $table->enum('tipo_actividad', ['productos', 'servicios', 'productos y servicios']);
            $table->integer('responsabilidad_iva_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->rememberToken();

            $table->foreign('responsabilidad_iva_id')->references('id')->on('responsabilidades_iva');
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
        Schema::dropIfExists('empresas');
    }
}
