<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'categoria';

    public function subcategoria()
	{
	   return $this->hasMany(SubCategoria::class);
	}

}
