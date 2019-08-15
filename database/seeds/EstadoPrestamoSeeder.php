<?php

use Illuminate\Database\Seeder;
use App\EstadoPrestamo;

class EstadoPrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Estado -> 0:Por Reclamar  °°   1:Reclamado  °°  2:Devuelto
        EstadoPrestamo::create([
        	'estado' => 'Por Reclamar'
        ]);

        EstadoPrestamo::create([
            'estado' => 'Reclamado'
        ]);

        EstadoPrestamo::create([
            'estado' => 'Devuelto'
        ]);
    }
}
