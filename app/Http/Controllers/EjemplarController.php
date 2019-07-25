<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ejemplar;

class EjemplarController extends Controller
{
    //
    public function index()
    {
    	$ejemplares = Ejemplar::all();
    	return view('ejemplar.listado_ejemplar', compact('ejemplares'));
    }
}
