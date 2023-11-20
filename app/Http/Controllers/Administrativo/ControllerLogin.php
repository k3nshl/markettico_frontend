<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\UsuarioAdministrativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControllerLogin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("login.inicioSesion");
    }

    public function validarLogin(Request $request){
        return view("login.codigoVerificacion");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
    function login(Request $request)
    {
        //comparar password encriptado
        $user = UsuarioAdministrativo::where('cedula_empresarial', $request->correo_empresarial)->first();
        $password_login = Hash::make($request->password);
        if ($user && $user->estado == 1 && $user->conrreo_empresarial == $request->correo_empresarial && $password_login = $user->password ) {
            Auth::login($user);
            return redirect()->route('estados.index');
        } else {
            return redirect()->route('usuarios.iniciar_sesion')->with('error', 'Contraseña o usuario incorrectas');
        }
    }


    function logout()
    {
        Auth::logout();
        return redirect()->route('estados.index');
    }
    


    
}
