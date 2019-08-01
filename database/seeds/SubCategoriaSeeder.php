<?php

use Illuminate\Database\Seeder;
use App\SubCategoria;
use App\Categoria;

class SubCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ficcion = Categoria::where('categoria_nombre' , 'Literatura')->value('id');
        SubCategoria::create([
        	'subcategoria_nombre' => 'Ficción',
        	'categoria_id' => $ficcion
        ]);
    }
}
