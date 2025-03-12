<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    function conectar(){
        return View('Principal');
    }
    function desconectar(){
        return View('testado do usuario');
    }
}
