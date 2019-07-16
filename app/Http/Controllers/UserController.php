<?php

namespace App\Http\Controllers;
use App\User;
use App\Rol;
use Illuminate\Support\Facades\DB;
use Debugbar\Debugbar;
// use vendor\barryvdh\laravel-debugbar\config\debugbar;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
// use Barryvdh\Debugbar;

class UserController extends Controller
{
    public function index()
    {
    	// $users = [
    	// 	'Admin',
    	// 	'Ellie',	
    	// ];

    	// $users = DB::table('users')->get();
        // app('debugbar')->error('Watch out..'); 
        // app('debugbar')->isEnabled();
        // app('debugbar')->dissable();
        app('debugbar')->addMessage('Hola bb!!');
        // app('debugbar')->info($users);collectors
        app('debugbar')->info(app('debugbar'));
        app('debugbar')->info(app('debugbar')->boot());
        // app('debugbar')->collectConsole(); collect
        $notification = array(
            'message' => 'Lista de Usuarios!', 
            'alert-type' => 'success'
        );
        // dd(array_get($notification, 'message'));
        // $notification = [
        //     'message' => 'Lista de Usuarios!', 
        //     'alert-type' => 'success'
        // ];

        $users = User::all();
    	return view('usuario.listado_usua', compact('users', 'notification'));
    }

    public function show(User $user)
    {   
        $rol = Rol::find($user->rol_id);
        return view('usuario.edit_usua', compact('user', 'rol'));
    }

    public function show_account()
    {
        $user = User::find(Auth::user()->id);      
        $rol = Rol::find($user->rol_id);
        return view('usuario.perfil_usua', compact('user', 'rol'));
    }
    
    public function create()
    {
        $rol = Rol::all();
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
                'direccion' => '',
                'rol_id' => '',
                'email' => ''
        ], [
            'lastname.required' => 'El campo es requerido'
        ]);

        $notification = array(
            'message' => 'I am a successful message!', 
            'alert-type' => 'success'
        );

        User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'password' => $data['password'],
            'telefono' => $data['number'],
            'direccion' => $data['direccion'],
            'rol_id' => $data['rol_id'],
            'email' => $data['email'],
        ]);
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

        $rol = Rol::find($user->rol_id);
        return view('usuario.edit_usua', compact('user', 'rol'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('usuario.list');
    }
}
