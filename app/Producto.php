<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $table = "productos";

	protected $fillable = ['nombre', 'modelo', 'caracteristicas', 'precio', 'categoria_id', 'detalle_categoria_id'];
    
    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }
    public function detalle_categoria()
    {
    	return $this->belongsTo('App\Detalle_categoria');
    }

    public function compra()
    {
    	return $this->belongsTo('App\Compra');
    }

    public function venta()
    {
    	return $this->belongsTo('App\Venta');
    }

    public function proveedor()
    {
    	return $this->belongsTo('App\Proveedor');
    }


}
