<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = "Categorias";
	
	protected $fillable = ['nombre', 'detalle_categoria_id'];
    
    public function productos()
    {
    	return $this->hasMany('App\Producto');
    }

    public function detalle_categorias()
    {
    	return $this->hasMany('App\Detalle_categoria');
    }
}
