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
        //Estado -> 0:Por Reclamar  °°   1:Reclamado  °°  2:Devuelto
        Schema::create('prestamo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ejemplar_id');
            $table->foreign('ejemplar_id')->references('id')->on('ejemplar');  
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');  
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->unsignedInteger('estado');
            $table->foreign('estado')->references('id')->on('estado_prestamo');
            $table->unsignedInteger('codigo');
            $table->foreign('codigo')->references('id')->on('codigos');
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
