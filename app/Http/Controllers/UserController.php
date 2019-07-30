<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
//use Debugbar\Debugbar;
// use vendor\barryvdh\laravel-debugbar\config\debugbar;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar;

//use DebugBar\DataCollector\MemoryCollector;
use DebugBar\StandardDebugBar;
use App\Role_User;
use App\Role;
use Image;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	// $users = [
    	// 	'Admin',
    	// 	'Ellie',	
    	// ];

    	// $users = DB::table('users')->get();
        // app('debugbar')->error('Watch out..'); 
        //app('debugbar')->isEnabled();
        //app('debugbar')->dissable();
        //app('debugbar')->addMessage('Hola bb!!');
        // app('debugbar')->info($users);collectors
                         //app('debugbar')->info(app('debugbar'));
        //app('debugbar')->info(app('debugbar')->boot());
                         //app('debugbar')->getName();
        // app('debugbar')->collectConsole(); collect
            //Edward
                // $debugbar = new StandardDebugBar();
                // $debugbarRenderer = $debugbar->getJavascriptRenderer();
                // dd($debugbar['memory']->collect());
                //dd($debugbar['time']->collect());
                //dd($debugbar['memory']->getPeakUsage());
                
            //
        $notification = array(
            'message' => 'Lista de Usuarios!', 
            'alert-type' => 'success'
        );
        // dd(MemoryCollector::getRealUsage());
        
        //dd(MemoryCollector::getName());
        // dd(array_get($notification, 'message'));
        // $notification = [
        //     'message' => 'Lista de Usuarios!', 
        //     'alert-type' => 'success'
        // ];
        $roles = Role::all();
        $rolesuser = Role_User::all();
        $users = User::all();
    	return view('usuario.listado_usua', compact('users', 'notification', 'roles', 'rolesuser'));

        //$rol = Role::where('id', '=', $role_id)->get();
        
    }

    public function show(User $user)
    {   
        //Rol con Tabla
        //$rol = Rol::find($user->rol_id);

        //Rol con Entrust
        $rol_user = Role_User::where('user_id', Auth::user()->id)->value('role_id');
        $rol = Role::find($rol_user);
        return view('usuario.edit_usua', compact('user', 'rol'));
    }

    public function show_account()
    {
        $user = User::find(Auth::user()->id); 
        //Rol con Tabla     
        //$rol = Rol::find($user->rol_id);

        //Rol con Entrust
        $rol_user = Role_User::where('user_id', $user->id)->value('role_id');
        $rol = Role::find($rol_user);
        // $rol_user = Role_User::where('user_id', Auth::user()->id)->value('role_id');
        // $rol = Role::where('id', $rol_user)->value('name');

        return view('usuario.perfil_usua', compact('user', 'rol'));
    }
    
    public function create()
    {
        //rol con Tabla
        //$rol = Rol::all();

        //Rol con entrust
        $rol = Role::all();
        return view('usuario.agregar_usua', compact('rol'));
    }

    public function store()
    {
        // $data = request()->all();
        $data = request()->validate([
                'name' => '',
                'lastname' => 'required',
                'password' => '',
                'number' => '',
                'foto' => 'required',
                'direccion' => '',
                'role_id' => '',
                'email' => ''
        ], [
            'foto.required' => 'El campo es requerido',
            'lastname.required' => 'El campo es requerido'
        ]);

        $notification = array(
            'message' => 'I am a successful message!', 
            'alert-type' => 'success'
        );

        $ruta = public_path().'/images/Usuarios/';
        $imagenOriginal = $data['foto'];
        $imagen = Image::make($imagenOriginal);
        $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
        $imagen->resize(300,300);
        // guardar imagen
        // save( [ruta], [calidad])
        $imagen->save($ruta . $temp_name, 100);
        // User::create([
        //     'name' => $data['name'],
        //     'lastname' => $data['lastname'],
        //     'password' => $data['password'],
        //     'telefono' => $data['number'],
        //     'direccion' => $data['direccion'],
        //     'rol_id' => $data['rol_id'],
        //     'email' => $data['email'],
        // ]);
        
        $user = User::create([
                    'name' => $data['name'],
                    'lastname' => $data['lastname'],
                    'password' => bcrypt($data['password']),
                    'telefono' => $data['number'],
                    'direccion' => $data['direccion'],
                    'foto' => $temp_name,
                    'email' => $data['email']
                ]);
        $role = Role::where('id', '=', $data['role_id'])->first();
        $user->attachRole($role);

        return redirect()->route('usuario.list')->with($notification);
    }

    public function update(User $user)
    {
        // $data = request()->validate([
        //         'name' => 'required',
        //         'name' => 'required',
        //         'name' => 'required',

        // ]);
        $user->update(request()->all());
        //Rol con tabla aparte
        //$rol = Rol::find($user->rol_id);

        //Rol con Entrust
        $rol_user = Role_User::where('user_id', $user->id)->value('role_id');
        $rol = Role::find($rol_user);
        return view('usuario.edit_usua', compact('user', 'rol'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('usuario.list');
    }

    protected function random_string()
    {
        $key = '';
        $keys = array_merge( range('a','z'), range(0,9) );

        for($i=0; $i<10; $i++)
        {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }
}
