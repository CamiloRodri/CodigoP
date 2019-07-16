<?php
use App\User;
use App\Rol;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $rol = DB::table('rol')
    	// ->where('nombre_rol' , 'Administrador')
    	// ->value('id');

    	$rol = Rol::where('nombre_rol' , 'Administrador')
    	->value('id');

    	//dd($rol);

    	$user = User::create([
            		'name' => 'Admin',
            		'lastname' => 'Cundinamarca',
            		'password' => bcrypt('123'),
            		'telefono' => '123',
            		'direccion' => 'Transversal 11',
                    'foto' => 'images/Usuarios/team1.jpg',
            		'rol_id' => $rol,
            		'email' => 'camilorodri28@outlook.com'
            	]);
        $role = Role::where('name', '=', 'Administrador')->first();
        $user->attachRole($role);

        User::create([
            'name' => 'Camilo',
            'lastname' => 'Rodriguez',
            'password' => bcrypt('123'),
            'telefono' => '123',
            'direccion' => 'Transversal 11',
            'foto' => 'images/Usuarios/team10.jpg',
            'rol_id' => Rol::where('nombre_rol' , 'Administrador')->value('id'),
            'email' => 'criscamiro2@outlook.com'
        ]);
        $role = Role::where('name', '=', 'Usuario')->first();
        $user->attachRole($role);

    }
}
