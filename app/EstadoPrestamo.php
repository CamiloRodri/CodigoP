<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoPrestamo extends Model
{
    //
    protected $table = 'estado_prestamo';

    protected $fillable = [
    	'estado'
    ];

}
