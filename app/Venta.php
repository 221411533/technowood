<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
	protected $table = "ventas";

	protected $fillable = ['fecha_venta', 'cliente_id', 'producto_id'];
	
    public function cliente()
    {
    	return $this->belongsTo('App\Cliente');
    }

    public function productos()
    {
    	return $this->hasMany('App\Producto');
    }

    public function detalle_venta()
    {
    	return $this->hasOne('App\Detalle_venta');
    }
}
