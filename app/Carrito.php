<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    //
    protected $table = 'carrito';

   	protected $fillable = [
		'ejemplar_id', 'user_id'
   	];    
}
