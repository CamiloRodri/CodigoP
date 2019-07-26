<?php

use Illuminate\Database\Seeder;
use App\EstadoEjemplar;

class EstadoEjemplarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EstadoEjemplar::create([
        	'estado' => 'Disponible'
        ]);

        $est = new EstadoEjemplar;
        $est->estado = 'En Carrito';
        $est->save();

        EstadoEjemplar::create([
            'estado' => 'Por Reclamar'
        ]);

        EstadoEjemplar::create([
        	'estado' => 'Prestado'
        ]);
    }
}
