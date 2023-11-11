<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerPlantillasCorreos extends Controller
{

    //Metodos para las rutas de las plantillas
    public function correo_autenticacion(){
        return view("plantillas_correos.correo_autenticacion");
    }

    public function correo_cambios_politicas(){
        return view("plantillas_correos.correo_cambios_politicas");
    }

    public function correo_expiracion_suspension(){
        return view("plantillas_correos.correo_expiracion_suspension");
    }

    public function correo_registro(){
        return view("plantillas_correos.correo_registro");
    }

    public function correo_solicitud(){
        return view("plantillas_correos.correo_solicitud");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
