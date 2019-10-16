<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\TipoUsuario;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller
{
    public function index()
    {
        $tipoUsuarios = TipoUsuario::all(); 
        return view('administrador.tipo_usuario', compact('tipoUsuarios'));
    }
}
