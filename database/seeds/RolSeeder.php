<?php

use \App\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// DB::table('rol')->insert([
        // 	'nombre_rol'=>'Administrador'
        // ]); 
    	Rol::create(['nombre_rol'=>'Administrador']);
       	Rol::create(['nombre_rol'=>'Usuario']); 
    }
}
