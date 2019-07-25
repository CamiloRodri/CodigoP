<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjemplarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejemplar', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('libro_id');
            $table->foreign('libro_id')->references('id')->on('libro');
            $table->string('codigo');
            //1 Disponible - 0 Prestado
            $table->boolean('estado')->nullable();
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
        Schema::dropIfExists('ejemplar');
    }
}
