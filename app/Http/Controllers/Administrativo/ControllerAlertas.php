<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ControllerAlertas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('inicio');
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
            'titulo' => 'required||unique:alertas',
            'id_estado' => 'required',
            'descripcion' => 'required',
            'tipo_destinatario' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back();
        }
        $alerta = new Alerta();

        $alerta->id_usuario_remitente = Auth::auth()->user()->id_usuario;
        $alerta->titulo = $request->titulo;
        $alerta->descripcion = $request->descripcion;
        $alerta->tipo_destinatario = $request->tipo_destinatario;
        $alerta->fecha_inicio = $request->fecha_inicio;
        $alerta->fecha_final = $request->fecha_final;
        $alerta->id_estado = 1;
        $alerta->save();

        return redirect()->back();
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
        return "Update de alertas";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Destroy de alertas";
    }
}
