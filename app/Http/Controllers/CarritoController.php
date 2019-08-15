<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\Ejemplar;
use App\EstadoPrestamo;
use App\Prestamo;
use App\Libro;
use App\Codigo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    public function generate()
    {
        // $cod = 'afasfaga0';
        // return redirect()->route('codigo.show', ['codigo' => $cod]);
        $carritos = Carrito::with(['ejemplar', 'user', 'ejemplar.libro'])->where('user_id', Auth::user()->id )->get();
        //$now = new \DateTime();
        $todayDate = Carbon::now();
        $todayDate = $todayDate->format('d-m-Y');

        $date = Carbon::now();
        $endDate = $date->addDays(7);  
        $endDate = $date->format('d-m-Y');
        $random = Str::random();

        $codigo = new Codigo;
        $codigo->codigo = $random;
        $codigo->save();

        $cod = $codigo->codigo;

        foreach ($carritos as $carrito) {
            $ejemplarup = Ejemplar::where('id', $carrito->ejemplar_id)->first();
            $ejemplarup->estado_id = '3';
            $ejemplarup->save();

            $carritode = Carrito::all()->where('id', $carrito->id);
            $carrito->delete();

            $estadoporreclamar = EstadoPrestamo::where('estado', 'Por Reclamar')->value('id');
            $prestamo = new Prestamo;  
            $prestamo->user_id = $carrito->user_id;
            $prestamo->ejemplar_id = $carrito->ejemplar_id;
            $prestamo->fecha_inicio = $todayDate;
            $prestamo->fecha_fin = $endDate;
            $prestamo->estado = $estadoporreclamar;
            $prestamo->codigo = $codigo->id;
            $prestamo->save();
            }
            
        return redirect()->route('codigo.show', ['codigo' => $cod]);
        }

        public function show(String $codigo)
        {
            return view('carrito.listado_codigo', compact('codigo'));
        }
    

}
