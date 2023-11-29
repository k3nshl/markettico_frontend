<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\CodigoVerificacion;
use App\Http\Controllers\Administrativo\ControllerPlantillasCorreos;
use App\Models\UsuarioAdministrativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

use function Ramsey\Uuid\v1;

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
            auth::login($user);
          //  email_seller($request);
            return view('login.codigoVerificacion');
            // return redirect()->route('perfil.show', Auth::user()->id_usuario_administrativo);
        } else {
            return redirect()->route('login')->with('error', 'Contraseña o usuario incorrectas');
        }
    }


    function logout()
    {
        Auth::logout();
        return redirect()->route('estados.index');
    }


    public function codigoAleatorio() 
    {
        $codigo = rand(000000, 999999);
        $codigDb = CodigoVerificacion::find($codigo);
        while ($codigDb) {
            $codigo = rand(000000, 999999);
            $codigDb = CodigoVerificacion::find($codigo);
        }
        $redis = Redis::connection();
        $redis->set('codigo', $codigo);
        $redis->expire('codigo', 60);

                $item = new CodigoVerificacion();
                $item->codigo = $codigo;
                $item->id_usuario = Auth::user()->id_usuario_administrativo;
                $item->tipo_usuario = Auth::user()->rol;
                $item->estado = 23;
                $item->save();
    }

    public function validarCodigo(Request $request)
    {
        $redis = Redis::connection();

        $codigo = $redis->get('codigo');

        if ($codigo == $request->codigo) {

            //si codigo existe guardar en db id_usuario id tipo de usuario y codigo activo

            
        } else {
            return redirect()->back()->with('success', 'false');

        }
    }

}
