<?php
use App\User;
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


    	//dd($rol);

    	$user = User::create([
            		'name' => 'Admin',
            		'lastname' => 'Cundinamarca',
            		'password' => bcrypt('123'),
            		'telefono' => '123',
            		'direccion' => 'Transversal 11',
                    'foto' => 'team1.jpg',
            		'email' => 'camilorodri28@outlook.com'
            	]);
        $role = Role::where('name', '=', 'Administrador')->first();
        $user->attachRole($role);

        $user = User::create([
            'name' => 'Camilo',
            'lastname' => 'Rodriguez',
            'password' => bcrypt('123'),
            'telefono' => '123',
            'direccion' => 'Transversal 11',
            'foto' => 'team10.jpg',
            'email' => 'criscamiro2@outlook.com'
        ]);
        $role = Role::where('name', '=', 'Usuario')->first();
        $user->attachRole($role);

    }
}
