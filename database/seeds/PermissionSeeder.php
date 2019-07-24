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
        $admin = Role::where('name', '=', 'Administrador')->first();
        $user = Role::where('name', '=', 'Usuario')->first();

        $permission  =  Permission::create([
                        'name' => 'ver-mision',
                        'display_name' => 'ver-mision',
                        'description' => 'Ver Mision'
                    ]);
        $admin->attachPermission($permission);
        $user->attachPermission($permission);

        $permission  =  Permission::create([
                            'name' => 'modificar-mision',
                            'display_name' => 'modificar-mision',
                            'description' => 'Modificar Mision'
                        ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'ver-vision',
                        'display_name' => 'ver-vision',
                        'description' => 'Ver Vision'
                    ]);
        $admin->attachPermission($permission);
        $user->attachPermission($permission);

        $permission  =  Permission::create([
                            'name' => 'modificar-vision',
                            'display_name' => 'modificar-vision',
                            'description' => 'Modificar Vision'
                        ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'ver-libros',
                        'display_name' => 'ver-libros',
                        'description' => 'Ver Libros'
                    ]);
        $admin->attachPermission($permission);
        $user->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'agregar-libros',
                        'display_name' => 'agregar-libros',
                        'description' => 'Agregar Libros'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'editar-libros',
                        'display_name' => 'editar-libros',
                        'description' => 'Editar Libros'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'eliminar-libros',
                        'display_name' => 'eliminar-libros',
                        'description' => 'Eliminar Libros'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'ver-autores',
                        'display_name' => 'ver-autores',
                        'description' => 'Ver Autores'
                    ]);
        $admin->attachPermission($permission);
        $user->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'agregar-autores',
                        'display_name' => 'agregar-autores',
                        'description' => 'Agregar Autores'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'editar-autores',
                        'display_name' => 'editar-autores',
                        'description' => 'Editar Autores'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'eliminar-autores',
                        'display_name' => 'eliminar-autores',
                        'description' => 'Eliminar Autores'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'ver-ventas',
                        'display_name' => 'ver-ventas',
                        'description' => 'Ver Ventas'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'pedido',
                        'display_name' => 'pedido',
                        'description' => 'Sidebar Pedido'
                    ]);
        $admin->attachPermission($permission);
        $user->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'ver-usuarios',
                        'display_name' => 'ver_usuarios',
                        'description' => 'Ver Usuarios'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'agregar-usuarios',
                        'display_name' => 'agregar_usuarios',
                        'description' => 'Agregar Usuarios'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'editar-usuarios',
                        'display_name' => 'editar_usuarios',
                        'description' => 'Editar Usuarios'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'eliminar-usuarios',
                        'display_name' => 'eliminar_usuarios',
                        'description' => 'Eliminar Usuarios'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'ver-ejemplar',
                        'display_name' => 'ver-ejemplar',
                        'description' => 'Ver Ejemplar'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'agregar-ejemplar',
                        'display_name' => 'agregar-ejemplar',
                        'description' => 'Agregar Ejemplar'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'editar-ejemplar',
                        'display_name' => 'editar-ejemplar',
                        'description' => 'Editar Ejemplar'
                    ]);
        $admin->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'eliminar-ejemplar',
                        'display_name' => 'eliminar-ejemplar',
                        'description' => 'Eliminar Ejemplar'
                    ]);
        $admin->attachPermission($permission);




        // $role = Role::where('name', '=', 'Administrador')->first();
        // $permission = Permission::where('name', 'modificar-mision')->first();
        // $role->attachPermission($permission);
        // $permission = Permission::where('name', 'modificar-vision')->first();
        // $role->attachPermission($permission);
    }
}
