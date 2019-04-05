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
        Schema::create('01facturas_sistema', function(Blueprint $table){
            $table->increments('id');
            $table->integer('contrato_id')->unsigned();
            $table->float('total');
            $table->date('fecha');
            $table->string('external_id');
            $table->string('payment_id');
            $table->enum('estado',['Pendiente','Pago','Vencido','Cancelado']);
            
            $table->foreign('contrato_id')->references('id')->on('01contratos');


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
