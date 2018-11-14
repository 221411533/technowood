<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
	protected $table = "proveedores";

	protected $fillable ['nombre', 'telefono', 'contraseña', 'calle', 'colonia', 'estado', 'no_interior', 'no_exterior', 'cp', 'municipio', 'correo' 'producto_id'];
    
    public function compras()
    {
    	return $this->hasMany('App\Compra');
    }

    public function productos()
    {
    	return $this->hasMany('App\Producto');
    }
}
