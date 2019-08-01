<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categoria::create([
        	'categoria_nombre' => 'Generalidades'
        ]);

        Categoria::create([
        	'categoria_nombre' => 'Filosofia y Psicologia'
        ]);

        Categoria::create([
        	'categoria_nombre' => 'Religión'
        ]);

        Categoria::create([
        	'categoria_nombre' => 'Ciencias Sociales'
        ]);

        Categoria::create([
        	'categoria_nombre' => 'Lenguas'
        ]);

        Categoria::create([
        	'categoria_nombre' => 'Matematicas y Ciencias Naturales'
        ]);

        Categoria::create([
        	'categoria_nombre' => 'Tecnologia y Ciencias Aplicadas'
        ]);

        Categoria::create([
        	'categoria_nombre' => 'Artes'
        ]);

        Categoria::create([
        	'categoria_nombre' => 'Literatura'
        ]);

        Categoria::create([
        	'categoria_nombre' => 'Historia y Geografia'
        ]);

    }
}
