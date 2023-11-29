<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\HistorialGestionRoles;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;


class ControllerRoles extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
        $validator = Validator::make($request->all(), [
            'nombre' => 'required||unique:roles',
            'id_estado' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back();
        }
        
        $rol = new Rol();
        $rol->nombre= $request->nombre;
        $rol->id_estado= $request->id_estado;
        $rol->save();

        //Este metodo se tiene que completar hasta que se termine el logueo con auth 
        $historial = new HistorialGestionRoles();
        $historial->id_rol =  $rol->id_rol;
        $historial->id_usuario =  Auth::auth()->user()->id_usuario;
        $historial->fecha_hora =  date(Date::now());
        $historial->accion =  'Inserccion de un nuveo rol';
        $historial->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
        $validator = Validator::make($request->all(), [
            'nombre' => 'required||unique:roles',
            'id_estado' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back();
        }

        $rol = Rol::find($id);
        $rol->nombre = $request->nombre;
        $rol->save(); 
        $historial = new HistorialGestionRoles();
        $historial->id_rol =  $rol->id_rol;
        $historial->id_usuario =  Auth::auth()->user()->id_usuario;
        $historial->fecha_hora =  date(Date::now());
        $historial->accion =  'Actualizacion de un rol';
        $historial->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rol =  Rol::find($id);
        $rol->delete();

        $historial = new HistorialGestionRoles();
        $historial->id_rol =  $id;
        $historial->id_usuario =  Auth::auth()->user()->id_usuario;
        $historial->fecha_hora =  date(Date::now());
        $historial->accion =  'Eliminacion de un rol';
        $historial->save();
        return redirect()->back();
    }
}
