<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    //
    protected $table = 'ejemplar';

    protected $fillable = [
    	'libro_id', 'codigo', 'estado_id'
    ];

    public function carrito()
    {
       return $this->hasMany(Carrito::class);
    }

    public function libro()
    {
       return $this->belongsTo(Libro::class);
    }
}
