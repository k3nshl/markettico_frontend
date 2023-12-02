<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use App\Models\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ControllerAnuncios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alertas = Alerta::all();
        $anuncios = Anuncio::all();

        return view('notificaciones.index', compact('alertas', 'anuncios'));
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
            'titulo' => 'required||unique:anuncios',
            'id_estado' => 'required',
            'contenido' => 'required',
            'img_portada' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
            'etiqueta' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back();
        }
        $anuncio = new Anuncio();

        $anuncio->id_usuario_remitente = Auth::auth()->user()->id_usuario;
        $anuncio->id_usuario_remitente = 18;
        $anuncio->id_estado = 1;
        $anuncio->titulo = $request->titulo;
        $anuncio->contenido = $request->contenido;
        $anuncio->img_portada = $request->img_portada;
        $anuncio->fecha_inicio = $request->fecha_inicio;
        $anuncio->fecha_final = $request->fecha_final;
        $anuncio->etiqueta = $request->etiqueta;
        $anuncio->save();

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
        // $anuncio =  Anuncio::find($id);
        // $anuncio->delete();
        // return redirect()->back();
    }
}
