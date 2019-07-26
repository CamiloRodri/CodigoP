<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
<<<<<<< HEAD
     * Run the database seeds.
=======
     * Seed the application's database.
>>>>>>> master
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
=======
    	$this->truncateTables([
    		'rol','users'
    	]);

        // $this->call(UsersTableSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(EjemplarSeeder::class);
    }


    protected function truncateTables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	foreach ($tables as $table)
    	{
    		DB::table($table)->truncate();
    	}

    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
>>>>>>> master
    }
}
