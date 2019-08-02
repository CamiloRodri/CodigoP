<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    //
    protected $table = 'subcategoria';

    public function categoria()
	{
	   return $this->belongsTo(Categoria::class);
	}


}
