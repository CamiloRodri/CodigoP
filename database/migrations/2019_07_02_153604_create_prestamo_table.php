<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ejemplar_id');
            $table->foreign('ejemplar_id')->references('id')->on('ejemplar');  
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');  
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->string('titulo');

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
        Schema::dropIfExists('prestamo');
    }
}
