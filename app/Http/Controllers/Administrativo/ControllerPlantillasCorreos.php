<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerPlantillasCorreos extends Controller
{

    //Metodos para las rutas de las plantillas
    public function correoAutenticacion(){
        return view("plantillasCorreos.correoAutenticacion");
    }

    public function CorreoCambiosPoliticas(){
        return view("plantillasCorreos.CorreoCambiosPoliticas");
    }

    public function correoExpiracionSuspension(){
        return view("plantillasCorreos.correoExpiracionSuspension");
    }

    public function correoRegistro(){
        return view("plantillasCorreos.correoRegistro");
    }

    public function correoSolicitud(){
        return view("plantillasCorreos.correoSolicitud");
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
