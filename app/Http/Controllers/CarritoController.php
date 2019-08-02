<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\Ejemplar;
use App\SubCategoria;
use App\Categoria;
use App\Libro;
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
    
    public function index()
    {
        //$carritos = Carrito::all()->where('user_id', Auth::user()->id );
                                                    //$carritos = Categoria::with('subcategoria')->get();
        $carritos = Carrito::with(['ejemplar', 'user', 'ejemplar.libro'])->where('user_id', Auth::user()->id )->get();
        return view('carrito.listado_carrito', compact('carritos'));
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

    public function show()
    {
        $carritos = Carrito::with(['ejemplar', 'user', 'ejemplar.libro'])->where('user_id', Auth::user()->id )->get();
        return redirect()->route('codigo.show');
    }
    

}
