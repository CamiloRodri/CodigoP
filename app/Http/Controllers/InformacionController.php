<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacion;

class InformacionController extends Controller
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

    public function update_mision(Informacion $info)
    {
        $info->update(request()->all());
        return view('informacion.mision', compact('info'));
    }

    public function update_vision(Informacion $info)
    {
        $info->update(request()->all());
        return view('informacion.vision', compact('info'));
    }

}
