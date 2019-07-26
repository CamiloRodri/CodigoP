<?php

namespace App\Http\Controllers;
use App\Libro;

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
    	//
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
