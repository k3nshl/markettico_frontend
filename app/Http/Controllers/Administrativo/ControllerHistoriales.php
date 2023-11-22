<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\HistorialAcciones;
use App\Models\HistorialGestionCuentas;
use App\Models\HistorialGestionPaginas;
use App\Models\HistorialGestionRoles;
use App\Models\HistorialSuspenciones;
use Illuminate\Http\Request;

class ControllerHistoriales extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$Historial_roles = "zzzzzzzzzz";
        $historial_roles = HistorialGestionRoles::all(); 
        $historial_cuentas = HistorialGestionCuentas::all();  
        $historial_acciones = HistorialAcciones::all(); 
        $historial_suspenciones = HistorialSuspenciones::all(); 
        $historial_paginas = HistorialGestionPaginas::all(); 

        return view('/historiales/index', compact('historial_roles','historial_cuentas','historial_acciones','historial_suspenciones','historial_paginas'));
        //return view('/historiales/index');
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
}
