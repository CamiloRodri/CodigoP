<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Autor;
use App\Libro;
use Image;


class AutorController extends Controller
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

    public function create()
    {
        return view('autor.agregar_autor');
    }

    public function store()
    {
        // $data = request()->all();
        $data = request()->validate([
                'name_autor' => 'required',
                'foto' => 'required',
                'biografia' => 'required'
        ], [
            'name_autor.required' => 'El campo es requerido',
            'foto.required' => 'El campo es requerido',
            'biografia.required' => 'El campo es requerido'
        ]);

        $ruta = public_path().'/images/Autores/';
        $imagenOriginal = $data['foto'];
        $imagen = Image::make($imagenOriginal);
        $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
        $imagen->resize(300,300);
        // guardar imagen
        // save( [ruta], [calidad])
        $imagen->save($ruta . $temp_name, 100);

        // Autor::create([
        //     'name_autor' => $data['name_autor'],
        //     'foto' => $temp_name,
        //     'biografia' => $data['biografia']
        // ]);

        $autor = new Autor();
        $autor->name_autor = $data['name_autor'];
        $autor->biografia = $data['biografia']; // optional
        $autor->foto  = $temp_name; // optional
        $autor->save();

        
        return redirect()->route('autor.list');
    }

    public function showupdate(Autor $autor)
    {
        //
        return view('autor.editar_autor', compact('autor'));
    }

    public function update(Autor $autor)
    {
        $autor->update(request()->all());
        //return redirect()->route('autor.edit')->with($autor);
        //return view('autor.perfil_autor', compact('autor'));
        return redirect()->route('autor.list');
    }

    public function destroy(Autor $autor)
    {
        $libros = Libro::all()->where('autor_id', $autor->id);
        foreach ($libros as $libro) {
            $lib = Libro::where('id', '=', $libro->id)->first();
            $lib->delete();
        }
        $autor->delete();

        return redirect()->route('autor.list');
    }

    protected function random_string()
    {
        $key = '';
        $keys = array_merge( range('a','z'), range(0,9) );

        for($i=0; $i<10; $i++)
        {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

}
