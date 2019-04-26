<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('01contadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('dni')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('matricula');
            $table->rememberToken();
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
        Schema::dropIfExists('contadors');
    }
}
