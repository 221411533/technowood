<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_categoria extends Model
{
	protected $table = "detalle_categorias";

    protected $fillable = ['nombre'];

    public function productos()
    {
    	return $this->hasMany('App\Producto');
    }

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }
}
