<?php

namespace App\Http\Controllers;
use App\Libro;
use App\Autor;
use Image;

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
        // $num = ['Primero'=>1,'Segundo'=>2, 'Tercero'=>3, 'Cuarto'=>4 ];
        // $co = collect($num);
        // dd($co->get('Primero'));
        // dd(
        //     $co->first(function ($value, $key) {
        //         return $value > 2;
        //     })
        // );
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
        $ruta = public_path().'/images/Libros/';
        // recogida del form
        //$imagenOriginal = $request->file('avatar');
        $imagenOriginal = $data['foto'];
        //$collection = collect($im);
        //$imagenOriginal = $collection->get("\x00Symfony\Component\HttpFoundation\File\UploadedFile\x00originalName");
        // crear instancia de imagen
        $imagen = Image::make($imagenOriginal);
        //dd($imagen);
        // generar un nombre aleatorio para la imagen
        $temp_name = $this->random_string() . '.' . $imagenOriginal->getClientOriginalExtension();
        $imagen->resize(300,300);
        // guardar imagen
        // save( [ruta], [calidad])
        $imagen->save($ruta . $temp_name, 100);
        Libro::create([
            'titulo' => $data['titulo'],
            'paginas' => $data['paginas'],
            'descripcion' => $data['descripcion'],
            'calificacion' => '5',
            'autor_id' => $data['autor_id'],
            'foto' => $temp_name,
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
