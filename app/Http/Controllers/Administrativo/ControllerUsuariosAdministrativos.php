<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\UsuarioAdministrativo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class ControllerUsuariosAdministrativos extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = UsuarioAdministrativo::all();
        $roles = Rol::all();
        return view('usuariosAdministrativos.index', compact('data','roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuariosAdministrativos.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new UsuarioAdministrativo();
        $item->id_rol = $request->id_rol;
        $item->id_estado = $request->id_estado;
        $item->nombre_completo = $request->nombre_completo;
        $item->password = sha1($request->password);
        $item->correo_empresarial = $request->correo_empresarial;
        $item->numero_telefonico = $request->numero_telefonico;
        $item->fecha_hora = date(Date::now());
        $item->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = UsuarioAdministrativo::find($id);
        return view('usuariosAdministrativos.index', compact('index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = UsuarioAdministrativo::find($id);
        return view('usuariosAdministrativos.index', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = UsuarioAdministrativo::find($id);
        $item->id_rol = $request->id_rol;
        $item->id_estado = $request->id_estado;
        $item->nombre_completo = $request->nombre_completo;
        $item->correo_empresarial = $request->correo_empresarial;
        $item->numero_telefonico = $request->numero_telefonico;
        $item->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = UsuarioAdministrativo::find($id);
        $item->delete();
        return redirect()->back();
    }
    public function validarPassword(Request $request)
    {
        $pass = Auth::user()->password;

        $password = sha1($request->password);

        if ($pass == $password) {
            return redirect()->back()->with('success', 'true');
        } else {
            return redirect()->back()->with('success', 'false');
        }
    }

    public function actualizarPassword(Request $request)
    {
        $item = UsuarioAdministrativo::find(Auth::user()->id_usuario_administrativo);
        $item->password = sha1($request->password);
        $item->update();
        return redirect()->back();
    }
}
