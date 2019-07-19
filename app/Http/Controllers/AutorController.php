<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;
use App\Libro;


class AutorController extends Controller
{
    //
    public function index()
    {
    	//
    	$autores = Autor::all();
        return view('autor.listado_autor', compact('autores'));
    }

    public function show(Autor $autor)
    {
    	$libros = Libro::all()->where('autor_id', $autor->id);
    	return view('autor.perfil_autor', compact('autor', 'libros'));
    }
}
