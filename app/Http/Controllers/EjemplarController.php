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
}
