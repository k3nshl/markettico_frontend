<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\HistorialAcciones;
use App\Models\HistorialGestionCuentas;
use App\Models\HistorialGestionEstados;
use App\Models\HistorialGestionPaginas;
use App\Models\HistorialGestionRoles;
use App\Models\HistorialSuspenciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class ControllerHistoriales extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historial_estados = HistorialGestionEstados::all();
        $historial_roles = HistorialGestionRoles::all(); 
        $historial_cuentas = HistorialGestionCuentas::all();
        $historial_suspenciones = HistorialSuspenciones::all(); 
        $historial_paginas = HistorialGestionPaginas::all(); 

        return view('/historiales/index', compact('historial_estados','historial_roles','historial_cuentas','historial_suspenciones','historial_paginas'));
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

    }

    public function store_usuario(Request $request, string $accion)
    {
        $historial = new HistorialGestionCuentas();
        $historial->fecha_hora =  date(Date::now());
        $historial->accion =  $accion.$request->nombre_completo;
        $historial->id_usuario = Auth::user()->id_usuario_administrativo;
        $historial->email_usuario =  $request->correo_empresarial;
        $historial->save();
    }

    public function store_rol(Request $request, string $accion)
    {
        $historial = new HistorialGestionRoles();
        $historial->id_rol =  $request->id_rol;
        $historial->nombre_rol =  $request->nombre;
        $historial->id_usuario = Auth::user()->id_usuario_administrativo;
        $historial->fecha_hora =  date(Date::now());
        $historial->accion =  $accion.$request->nombre;
        $historial->save();
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
