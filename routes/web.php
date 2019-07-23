<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('login');
});

Route::get('/deb', function () {
    return view('deb');
});

Route::get('/index', function () {
    return view('login');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
if ($options['register'] ?? true) {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
}

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios/nuevo', function () {
    return view('usuario.agregar_usua');
});

Route::get('usuario/prueba', function () {
    return view('usuario.prueba');
});

Route::get('libro/prueba', function () {
    return view('biblioteca.prueba');
});

Route::get('/inicio', 'InicioController@index')->name('index');

Route::get('/usuario/perfil', 'UserController@show_account')->name('usuario.perfil');

Route::get('/usuario/{user}', 'UserController@show')->name('usuario.show');

Route::put('/usuario/{user}', 'UserController@update')->name('usuario.update');

Route::delete('/usuario/{user}', 'UserController@destroy')->name('usuario.destroy');

Route::get('/lista', 'UserController@index')->name('usuario.list');

Route::get('/nuevo', 'UserController@create')->name('usuario.create');

Route::post('/crear', 'UserController@store');
// Route::get('lista', function () {
//     return view('usuario.listado_usua');
// });
Route::get('/mision', function () {
    return view('informacion.mision');
});

Route::get('/vision', function () {
    return view('informacion.vision');
});
//Libro
Route::get('/libros', 'LibroController@index')->name('libro.list');

Route::get('/libros/{libro}', 'LibroController@show')->name('libro.show');

Route::get('/libro/nuevo/', 'LibroController@create')->name('libro.create');

Route::post('/crearlibro', 'LibroController@store');

Route::get('/leditar/{libro}', 'LibroController@showupdate')->name('libro.edit');

Route::put('/libros/{libro}', 'LibroController@update')->name('libro.update');

Route::delete('/libros/{libro}', 'LibroController@destroy')->name('libro.destroy');

//Autor
Route::get('/autor', 'AutorController@index')->name('autor.list');

Route::get('/autor/{autor}', 'AutorController@show')->name('autor.show');

Route::get('/auto/nuevo/', 'AutorController@create')->name('autor.create');

Route::post('/crearautor', 'AutorController@store');

Route::get('/aeditar/{autor}', 'AutorController@showupdate')->name('autor.edit');

Route::put('/autor/{autor}', 'AutorController@update')->name('autor.update');

Route::delete('/autor/{autor}', 'AutorController@destroy')->name('autor.destroy');

