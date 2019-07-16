<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables([
    		'rol','users'
    	]);

        // $this->call(UsersTableSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(EjemplarSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
    }


    protected function truncateTables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	foreach ($tables as $table)
    	{
    		DB::table($table)->truncate();
    	}

    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
