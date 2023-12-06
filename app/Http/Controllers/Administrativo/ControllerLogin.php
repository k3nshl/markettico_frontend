<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\CodigoVerificacion;
use App\Models\UsuarioAdministrativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;


use function Ramsey\Uuid\v1;

class ControllerLogin extends Controller
{
    protected $controllerCorreos;

    public function __construct(ControllerPlantillasCorreos $controllerCorreos)
    {
        $this->controllerCorreos = $controllerCorreos;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("login.inicioSesion");
    }

    public function validarLogin(Request $request)
    {
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
        $user = UsuarioAdministrativo::where('correo_empresarial', $request->correo_empresarial)->first();

        $password_login = sha1($request->password);

        if ($user->id_estado == 1 && $user->correo_empresarial == $request->correo_empresarial && $user->password == $password_login) {
            // $codigo = $this->getcodigoAleatorio();
            // $this->controllerCorreos->email_seller($request, $codigo);
            // return view('login.codigoVerificacion', compact('user', 'codigo'));
            auth::login($user);
            //return $user;
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Contraseña o usuario incorrectas');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('error', 'Haz cerrado sesión');;
    }

    public function getcodigoAleatorio()
    {
        $codigo = rand(000000, 999999);
        $codigos_registrados = CodigoVerificacion::all();

        foreach ($codigos_registrados as $item) {
            if ($codigo == $item->codigo) {
                return $this->getcodigoAleatorio();
            }
        }
        $nuevoCodigo = new CodigoVerificacion();
        $nuevoCodigo->codigo = $codigo;
        $nuevoCodigo->id_usuario = 2; // Aquí puedes establecer el valor correcto
        $nuevoCodigo->tipo_usuario = "admin"; // Aquí puedes establecer el valor correcto
        $nuevoCodigo->id_estado = 1;
        $nuevoCodigo->save();

        return $codigo;
    }




    public function verificarCodigo(Request $request)
    {
        $codigo = CodigoVerificacion::where('codigo', $request->codigo)->first();
        if ($codigo) {
            $codigo->id_estado = 2;
            $codigo->update();
            $user = UsuarioAdministrativo::find($request->id_usuario);
            auth::login($user);

            return redirect()->route('estados.index');
        } else {
            return redirect()->route('login')->with('error', 'Codigo incorrecto');
        }
    }
}
