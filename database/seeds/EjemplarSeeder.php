<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Ejemplar;
use \App\Libro;
use App\EstadoEjemplar;

class EjemplarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            EstadoEjemplar::create([
            'estado' => 'Disponible'
        ]);

        $est = new EstadoEjemplar;
        $est->estado = 'En Carrito';
        $est->save();

        EstadoEjemplar::create([
            'estado' => 'Prestado'
        ]);

    	$libro = Libro::where('titulo', 'Satanas')->value('id');
        Ejemplar::create([
        	'libro_id' => $libro,
            'codigo' => 'I87204713',
            'estado_id' => '1'
        ]);
    }
}
