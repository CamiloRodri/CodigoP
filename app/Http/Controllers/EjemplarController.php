<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ejemplar;
use App\Libro;

class EjemplarController extends Controller
{
    //
    public function index()
    {
    	$libros = Libro::all();
    	$ejemplares = Ejemplar::all();
    	return view('ejemplar.listado_ejemplar', compact('ejemplares', 'libros'));
    }

    public function show(Ejemplar $ejemplar)
    {
    	return view('ejemplar.perfil_ejemplar', compact('ejemplar'));
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
                'estado' => ''
        ], [
            'libro_id.required' => 'El campo es requerido',
            'codigo.required' => 'El campo es requerido'
        ]);

    
        $ejemplar = new Ejemplar();
        $ejemplar->libro_id = $data['libro_id'];
        $ejemplar->codigo = $data['codigo']; 
        $ejemplar->estado  = true;
        $ejemplar->save();

        
        return redirect()->route('ejemplar.list');
    }

    public function destroy(Ejemplar $ejemplar)
    {
        $ejemplar->delete();
        return redirect()->route('ejemplar.list');
    }
}
