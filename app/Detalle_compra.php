<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_compra extends Model
{
	protected $table = "detalle_compras";

	protected $fillable = ['cantidad', 'factura', 'total', 'compra_id'];
    
    public function compra()
    {
    	return $this->belongsTo('App\Compra');
    }
}
