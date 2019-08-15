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
    		'users', 'autor', 'carrito', 'ejemplar', 'estado_ejemplar', 'informacion', 'libro',
            'permissions', 'permission_role', 'prestamo', 'roles', 'role_user', 'categoria', 
            'subcategoria' , 'codigos', 'estado_prestamo'

      	]);

        // $this->call(UsersTableSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(SubCategoriaSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(EstadoEjemplarSeeder::class);
        $this->call(EstadoPrestamoSeeder::class);
        $this->call(EjemplarSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(InformacionSeeder::class);
        $this->call(CarritoSeeder::class);
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
