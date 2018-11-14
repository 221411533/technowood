<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;


class TestControler extends Controller
{
    public function view($id)
    {

        $categoria = Categoria::find($id);
        

        $categoria->productos;
        
        
        return view('test.index' ['categoria' -> $categoria]);
       
    }
}
