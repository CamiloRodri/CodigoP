<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('paginas');
            $table->string('foto')->nullable();
            $table->text('descripcion');
            $table->double('calificacion');
            $table->string('fecha_publicacion');
            $table->unsignedInteger('autor_id');
            $table->foreign('autor_id')->references('id')->on('autor');  
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
        Schema::dropIfExists('libro');
    }
}
