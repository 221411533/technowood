<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $table = "users";

	protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'puesto', 'email', 'password'];

	/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //
}




