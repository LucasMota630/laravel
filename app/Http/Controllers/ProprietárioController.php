<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietárioController extends Controller
{
    function formulario(){
			return view('proprietario-formulario');
    }
    
}