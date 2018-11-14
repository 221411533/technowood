<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = "clientes";
	protected $fillable = ['razon_social', 'fiscal', 'rfc', 'calle', 'colonia', 'municipio', 'estado', 'cp', 'telefono', 'password'];
    
    public function ventas()
    {
    	return $this->hasMany('App\Venta');
    }
}
