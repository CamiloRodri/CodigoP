<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informacion;

class InformacionController extends Controller
{
    //
    public function show_mision()
    {
    	$info = Informacion::all()->first();
    	return view('informacion.mision', compact('info'));
    }

    public function show_vision()
    {
    	$info = Informacion::all()->first();
    	return view('informacion.vision', compact('info'));
    }

    public function showupdate_mision()
    {
    	$info = Informacion::all()->first();
    	return view('informacion.modificar_mision', compact('info'));
    }

    public function showupdate_vision()
    {
    	$info = Informacion::all()->first();
    	return view('informacion.modificar_vision', compact('info'));
    }

}
