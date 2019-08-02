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

   	public function ejemplar()
	{
	   return $this->belongsTo(Ejemplar::class);
	}   

	public function user()
	{
	   return $this->belongsTo(User::class);
	}
}
