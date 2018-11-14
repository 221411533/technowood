<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
	protected $table = "compras";

	protected $fillable = ['fecha_compra', 'proveedor_id', 'producto_id'];
	
    public function proveedor()
    {
    	return $this->belongsTo('App\Proveedor');
    }

    public function productos ()
    {
    	return $this->hasMany('App\Producto');
    }

    public function detalle_compra()
    {
    	return $this->hasOne('App\Detalle_compra');
    }

}

