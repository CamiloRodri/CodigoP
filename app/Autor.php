<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    //
    protected $table = 'autor'; 

    protected $fillable = [
        'name_autor', 'foto', 'biografia'
    ];
}
