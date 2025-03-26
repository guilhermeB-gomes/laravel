<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registro extends Controller
{
    function registro(){
        return view('registro');
    }

    function criarConta(Request $resquest){
        dd($resquest);
    }
}
