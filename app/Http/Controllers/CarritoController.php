<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\Ejemplar;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
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
    
    public function store()
    {
        //dd(request()->ejemplar_id);
        $data = request()->all();
        Carrito::create([
            'ejemplar_id' => $data['ejemplar_id'],
            'user_id' => Auth::user()->id
        ]);

        $ejemplar = Ejemplar::where('id', $data['ejemplar_id'])->first();
        $ejemplar->estado_id = '2';
        $ejemplar->save();

        return redirect()->route('libro.list');
    }
}
