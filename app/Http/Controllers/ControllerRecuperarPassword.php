<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerRecuperarPassword extends Controller
{

    public function index(){
        return view('recuperarPassword.ingresarCorreo');
    }

    public function validarCorreo(Request $request)
    {
        $correoIngresado = $request->correo;
        return view('recuperarPassword.ingresarCodigo', compact('correoIngresado'));
    }

    public function validarCodigo(Request $request)
    {
        return view('recuperarPassword.reestablecerPassword');
    }

    public function guardarCredenciales(Request $request)
    {
        return redirect()->route('login');
    }
}
