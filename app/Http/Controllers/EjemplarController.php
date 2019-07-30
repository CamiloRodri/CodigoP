<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ejemplar;
use App\Libro;
use App\EstadoEjemplar;

class EjemplarController extends Controller
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
    	$libros = Libro::all();
    	$ejemplares = Ejemplar::all();
        $estados = EstadoEjemplar::all();
    	return view('ejemplar.listado_ejemplar', compact('ejemplares', 'libros', 'estados'));
    }

    public function show(Ejemplar $ejemplar)
    {
    	$libros = Libro::all();
    	return view('ejemplar.editar_ejemplar', compact('ejemplar', 'libros'));
    }

    public function create()
    {
        $libros = Libro::all();
        return view('ejemplar.agregar_ejemplar', compact('libros'));
    }

    public function store()
    {
        // $data = request()->all();
        $data = request()->validate([
                'libro_id' => 'required',
                'codigo' => 'required',
                'estado_id' => ''
        ], [
            'libro_id.required' => 'El campo es requerido',
            'codigo.required' => 'El campo es requerido'
        ]);

    
        $ejemplar = new Ejemplar();
        $ejemplar->libro_id = $data['libro_id'];
        $ejemplar->codigo = $data['codigo']; 
        $ejemplar->estado_id  = 1;
        $ejemplar->save();

        
        return redirect()->route('ejemplar.list');
    }

    public function destroy(Ejemplar $ejemplar)
    {
        $ejemplar->delete();
        return redirect()->route('ejemplar.list');
    }

    public function update(Ejemplar $ejemplar)
    {
        $ejemplar->update(request()->all());
        return redirect()->route('ejemplar.list');
    }
}
