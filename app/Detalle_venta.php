<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
	protected $table = "detalle_ventas";

	protected $fillable = ['cantidad', 'factura', 'total', 'venta_id'];
    
    public function venta()
    {
    	return $this->belongsTo('App\Venta');
    }
}
