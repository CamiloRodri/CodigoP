<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Permission::create([
            'name' => 'modificar-mision',
            'display_name' => 'modificar-mision',
            'description' => 'Modificar Mision'
        ]);

        Permission::create([
            'name' => 'modificar-vision',
            'display_name' => 'modificar-vision',
            'description' => 'Modificar Vision'
        ]);

        Permission::create([
            'name' => 'agregar-libros',
            'display_name' => 'agregar-libros',
            'description' => 'Agregar Libros'
        ]);

        Permission::create([
            'name' => 'agregar-autores',
            'display_name' => 'agregar-autores',
            'description' => 'Agregar Libros'
        ]);

        Permission::create([
            'name' => 'ver-ventas',
            'display_name' => 'ver-ventas',
            'description' => 'Ver Ventas'
        ]);

        Permission::create([
            'name' => 'pedido',
            'display_name' => 'pedido',
            'description' => 'Sidebar Pedido'
        ]);

        Permission::create([
            'name' => 'ver_usuarios',
            'display_name' => 'ver_usuarios',
            'description' => 'Ver Usuarios'
        ]);

        $role = Role::where('name', '=', 'Administrador')->first();
        $permission = Permission::where('name', 'modificar-mision')->first();
        $role->attachPermission($permission);
        $permission = Permission::where('name', 'modificar-vision')->first();
        $role->attachPermission($permission);
    }
}
