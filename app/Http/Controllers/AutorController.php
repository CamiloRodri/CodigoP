<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;


class AutorController extends Controller
{
    //
    public function index()
    {
    	//
    	$autores = Autor::all();
        return view('autor.listado_autor', compact('autores'));
    }
}
