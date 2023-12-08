<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\HistorialGestionRoles;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ControllerRoles extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $controllerHistorial;

    public function __construct(ControllerHistoriales $historial)
    {
        $this->controllerHistorial = $historial;
    }

    
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
        $request->validate([
            'nombre' => 'required|unique:roles',
            'id_estado' => 'required',
        ]);
        
        $rol = new Rol();
        $rol->nombre= $request->nombre;
        $rol->id_estado= $request->id_estado;
        $rol->save();

        $request->merge([
            'id_rol' => $rol->id_rol,
        ]);

        $this->controllerHistorial->store_rol($request,'Creacion del rol ');
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
        $request->validate([
            'nombre' => 'required|unique:roles',
            'id_estado' => 'required',
        ]);

        $rol = Rol::find($id);
        $rol->nombre = $request->nombre;
        $rol->id_estado= $request->id_estado;
        $rol->save();

        $request->merge([
            'id_rol' => $rol->id_rol,
        ]);

        $this->controllerHistorial->store_rol($request,'Actualización del rol ');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rol =  Rol::find($id);
        $rol->delete();

        $request = new Request();

        $request->merge([
            'id_rol' => $rol->id_rol,
            'nombre' => $rol->nombre,
        ]);
        
        $this->controllerHistorial->store_rol($request,'Eliminación del rol ');
        return redirect()->back();
    }
}
