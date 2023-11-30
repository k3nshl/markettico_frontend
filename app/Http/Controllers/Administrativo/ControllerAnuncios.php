<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerAnuncios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Enviar listado de anuncios a la vista
        // Enviar listado de alertas a la vista

        return view('notificaciones.index');
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
        return "Store de anuncios";
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
        $anuncio = Anuncio::find($id);
        $anuncio->id_usuario_remitente = $request->id_usuario_remitente;
        $anuncio->id_estado = $request->id_estado;
        $anuncio->titulo = $request->id_usuario_remitente;
        $anuncio->contenido = $request->contenido;
        $anuncio->img_portada = $request->img_portada;
        $anuncio->fecha_inicio = $request->id_usuario_remitente;
        $anuncio->fecha_final = $request->fecha_final;
        $anuncio->etiqueta = $request->etiqueta;
        $anuncio->save();    
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Destroy de anuncios";
    }
}
