<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\Request;

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
        // return "Store de roles";

        // $request->merge([
        //     'nombre' => 'admin',
        //     'id_estado' => '2',
        // ]);

        $rol = new Rol();
        $rol->nombre= $request->nombre;
        // $rol->id_estado= $request->id_estado;
        $rol->id_estado= 2;
        $rol->save();

        // $roles = Rol::all();
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
        return "Update de roles";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Destroy de roles";
        $rol =  Rol::find($id);
        $rol->delete();
        return $rol;
    }
}
