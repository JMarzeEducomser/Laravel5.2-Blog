<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

use Blog\Http\Requests;

class PruebaController extends Controller
{
    public function nombreFuncion($parametro = 'sin valor'){
        return view('prueba')->with('parametro', $parametro);
    }
}
