<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'name' => 'Administrador',
            'display_name' => 'Administrador de la Biblioteca', 
            'description' => 'Administrador de la Biblioteca' 
        ]);

        Role::create([
            'name' => 'Usuario',
            'display_name' => 'Usuario de la Biblioteca', 
            'description' => 'Usuario de la Biblioteca' 
        ]);
    }
}
