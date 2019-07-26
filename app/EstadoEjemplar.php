<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEjemplar extends Model
{
    //
    protected $table = 'estado_ejemplar';

    protected $fillable = [
    	'estado'
    ];
}
