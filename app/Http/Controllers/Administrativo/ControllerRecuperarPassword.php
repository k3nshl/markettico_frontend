<?php

namespace App\Http\Controllers\Administrativo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CodigoVerificacion;
use App\Models\UsuarioAdministrativo;

class ControllerRecuperarPassword extends Controller
{


    public function index()
    {
        return view('recuperarPassword.ingresarCorreo');
    }

    public function validarCorreo(Request $request)
    {
        $correoIngresado = $request->correo;
        return view('recuperarPassword.ingresarCodigo', compact('correoIngresado'));
    }

    public function validarCodigo(Request $request)
    {


        if ($request->codigo == $request->codigo_original) {
            $item = CodigoVerificacion::where('codigo', $request->codigo);
            $item->id_estado = 2;
            $user = $request->user;
            return view('recuperarPassword.reestablecerPassword', compact('user'));
        } else {
            return view('recuperarPassword.ingresarCorreo');
        }
    }

    public function guardarCredenciales(Request $request)
    {
       
        if ($request->nuevaPassword == $request->confirmarPassword) {
            
            $item = UsuarioAdministrativo::find($request->user);
            $item->password = sha1($request->confirmarPassword);
            $item->update();
            return redirect()->route('login');
        }else {
            $user = $request->user;
            return view('recuperarPassword.reestablecerPassword', compact('user'));
        }
    }
}
