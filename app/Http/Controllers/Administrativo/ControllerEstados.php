<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\Request;

class ControllerEstados extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Enviar el listado de roles a la vista
        // Enviar el listado de estados a la vista

        $roles = Rol::all();
        return view('estadosRoles.index', compact('roles'));
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
        return "Store de estados";
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
        return "Update de estados";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Destroy de estados";
    }
}
