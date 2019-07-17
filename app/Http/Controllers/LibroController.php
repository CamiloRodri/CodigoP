<?php

namespace App\Http\Controllers;
use App\Libro;
use App\Autor;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
    	//
    	$libros = Libro::all();
        return view('biblioteca.listado_book', compact('libros'));
    }

    public function show(Libro $libro)
    {
    	return view('biblioteca.perfil_book', compact('libro'));
    }

    public function create()
    {
    	$autors = Autor::all();
        return view('biblioteca.agregar_book', compact('autors'));
    }

    public function store()
    {
        // $data = request()->all();
        $data = request()->validate([
                'titulo' => '',
                'paginas' => 'required',
                'descripcion' => '',
                'autor_id' => '',
                'foto' => '',
        ], [
            'paginas.required' => 'El campo es requerido'
        ]);
        Libro::create([
            'titulo' => $data['titulo'],
            'paginas' => $data['paginas'],
            'descripcion' => $data['descripcion'],
            'calificacion' => '5',
            'autor_id' => $data['autor_id'],
            'foto' => $data['foto'],
        ]);
        return redirect()->route('libro.list');
    }

    public function update()
    {
    	//
    }

    public function delete()
    {
    	//
    }
}
