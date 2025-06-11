<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnúncioController extends Controller
{
    function formulario(){
			return view('anuncio-formulario');
    }
    
}