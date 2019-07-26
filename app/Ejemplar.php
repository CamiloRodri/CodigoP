<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    //
    protected $table = 'ejemplar';

    protected $fillable = [
    	'libro_id', 'codigo', 'estado'
    ];
}
