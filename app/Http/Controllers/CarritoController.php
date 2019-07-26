<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    //
    public function store()
    {
        $data = request()->all();
        dd($data);
        Carrito::create([
            'ejemplar_id' => $data['ejemplar_id'],
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('libro.list');
    }
}
