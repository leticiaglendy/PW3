<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    public function index() {
        $usuario = Usuario::all();
        return view('usuario', compact('usuario'));
    }
    
}

