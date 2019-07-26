<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Ejemplar;
use \App\Libro;

class EjemplarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$libro = Libro::where('titulo', 'Satanas')->value('id');
        Ejemplar::create([
        	'libro_id' => $libro
        ]);
    }
}
