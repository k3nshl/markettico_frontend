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

        if ($request->type == 1) {
            $user = UsuarioAdministrativo::where('correo_empresarial', $request->correo_empresarial)->first();

            $password_login = sha1($request->password);

            if ($user->id_estado == 1) {
                if ($user->correo_empresarial == $request->correo_empresarial && $user->password == $password_login) {
                    $codigo = $this->getcodigoAleatorio($user);
                    $this->controllerCorreos->email_seller($request, $codigo);
                    return view('login.codigoVerificacion', compact('user', 'codigo'));
                    auth::login($user);
                    if ($user->id_rol == 1) {
                        return redirect()->route('homeSuperadmin');
                    } else if ($user->id_rol == 2) {
                        return redirect()->route('homeAdministrador');
                    } else if ($user->id_rol == 3) {
                        return redirect()->route('homeModerador');
                    }
                } else {
                    return redirect()->route('login')->with('error', 'Contraseña o usuario incorrectas');
                }
            }else{
                return redirect()->route('login')->with('error', 'Usuario inactivo o bloqueado');
            }
        } elseif ($request->type == 2) {

            $user = UsuarioAdministrativo::where('correo_empresarial', $request->correo_empresarial)->first();
            if ($user) {
                $codigo = $this->getcodigoAleatorio($user);
                $this->controllerCorreos->email_seller($request, $codigo);
                return view('recuperarPassword.ingresarCodigo', compact('user', 'codigo'));
            } else {
                return redirect()->back()->with('error', 'Correo no registrado');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('warning', 'Haz cerrado sesión');
    }

    public function getcodigoAleatorio($user)
    {
        $codigo = rand(000000, 999999);
        $codigos_registrados = CodigoVerificacion::all();

        foreach ($codigos_registrados as $item) {
            if ($codigo == $item->codigo) {
                return $this->getcodigoAleatorio($user);
            }
        }
        $nuevoCodigo = new CodigoVerificacion();
        $nuevoCodigo->codigo = $codigo;
        $nuevoCodigo->id_usuario_administrativo = $user->id_usuario_administrativo; // Aquí puedes establecer el valor correcto
        $nuevoCodigo->tipo_usuario =  $user->roles->nombre; // Aquí puedes establecer el valor correcto
        $nuevoCodigo->id_estado = $user->id_estado;
        $nuevoCodigo->fecha_hora = date('Y-m-d H:i:s');
        $nuevoCodigo->save();
        return $codigo;
    }

    public function verificarCodigo(Request $request)
    {
        $codigo = CodigoVerificacion::where('codigo', $request->codigo)->first();
        $horaactual = date('Y-m-d H:i:s');
        if ($codigo) {
            $horacoddb = $codigo->fecha_hora;
            $user = UsuarioAdministrativo::find($request->id_usuario);
            if (time() - strtotime($horacoddb) <= 60 && $user->id_estado == 1) {
                //      return "mi primera chamba";

                $codigo->id_estado = 2; //??????

                $codigo->update();

                auth::login($user);


                if ($user->id_rol == 1) {
                    return redirect()->route('homeSuperadmin');
                } else if ($user->id_rol == 2) {
                    return redirect()->route('homeAdministrador');
                } else if ($user->id_rol == 3) {
                    return redirect()->route('homeModerador');
                }
            } else {
                //que se quiere hacer cuando el codigo expira  ???
                return redirect()->route('login')->with('error', 'Codigo expiro');
            }
        } else {
            //  return "mi segunda chamba";
            return  redirect()->route('login')->with('error', 'Codigo incorrecto');
        }
    }
}
