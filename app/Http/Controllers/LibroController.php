<?php

namespace App\Http\Controllers;
use App\Libro;
use App\Models\Autor;
use App\Ejemplar;
use Image;

use Illuminate\Http\Request;

class LibroController extends Controller
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
    	$libros = Libro::all();
        return view('biblioteca.listado_book', compact('libros'));
    }

    public function show(Libro $libro)
    {
        //dd($libro->id);
        $countejemplar = Ejemplar::all()->where('libro_id', $libro->id)->where('estado_id', '1')->count();
        $ejemplar = Ejemplar::all()->where('libro_id', $libro->id)->where('estado_id', '1')->first();
        //dd($ejemplar);
    	return view('biblioteca.perfil_book', compact('libro','countejemplar', 'ejemplar'));
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
                'titulo' => 'required',
                'paginas' => 'required',
                'descripcion' => 'required',
                'autor_id' => '',
                'foto' => 'required',
                'fecha_publicacion' => 'required'
        ], [
            'titulo.required' => 'El campo es requerido',
            'paginas.required' => 'El campo es requerido',
            'descripcion.required' => 'El campo es requerido',        
            'foto.required' => 'El campo es requerido',
            'fecha_publicacion.required' => 'El campo es requerido'
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
            'fecha_publicacion' => $data['fecha_publicacion'],
        ]);
        return redirect()->route('libro.list');
    }

    public function showupdate(Libro $libro)
    {
        //
        $autors = Autor::all();
        return view('biblioteca.editar_book', compact('libro', 'autors'));
    }

    public function update(Libro $libro)
    {
        $libro->update(request()->all());
        return view('biblioteca.perfil_book', compact('libro'));
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.list');
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
