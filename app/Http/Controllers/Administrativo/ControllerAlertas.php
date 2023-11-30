<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerAlertas extends Controller
{
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
        return "Store de alertas";
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
        $alerta = Alerta::find($id);
        $alerta->id_usuario_remitente = $request->id_usuario_remitente;
        $alerta->titulo = $request->id_usuario_remitente;
        $alerta->descripcion = $request->id_usuario_remitente;
        $alerta->tipo_destinatario = $request->id_usuario_remitente;
        $alerta->fecha_inicio = $request->id_usuario_remitente;
        $alerta->fecha_final = $request->fecha_final;
        $alerta->id_estado = $request->id_estado;
        $alerta->save();    
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Destroy de alertas";
    }
}
