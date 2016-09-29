<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PruebaController extends Controller
{
    public function nombreFuncion($parametro = 'sin valor'){
        return "Hola desde el Controlador!!! <br/><br/>".
            "El parámetro es: ".$parametro;
    }
}
