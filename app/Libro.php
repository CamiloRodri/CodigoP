<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $table = 'libro';

    protected $fillable = [
        'titulo', 'paginas', 'foto', 'descripcion', 'calificacion', 'autor_id', 'fecha_publicacion'
    ];

    public function ejemplar()
    {
    	return $this->hasMany(Ejemplar::class);
    }
}
