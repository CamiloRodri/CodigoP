<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Autor;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autor::create(['name_autor'=>'Mario Mendoza']);
    }
}
