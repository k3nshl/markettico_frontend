<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Estado;
use App\Models\PaginaInformacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;

class ControllerArticulos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $articulos = PaginaInformacion::all();

        // return view('paginasInformacion.articulos', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id_pagina_informacion = $request->id;
        return view('paginasInformacion.createArticulo', compact('id_pagina_informacion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articulo = new Articulo();
        $articulo->id_usuario = Auth::user()->id_usuario_administrativo;
        $articulo->id_estado = $request->id_estado;
        $articulo->id_pagina_informacion = $request->id_pagina;

        $articulo->titulo = $request->titulo;
        $articulo->contenido = $request->contenido;
        $articulo->fecha = date('Y-m-d');

        $articulo->save();
        return redirect()->back();
    }

    


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);
        return view('articulos.show', compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $articulo = articulo::find($id);
        $estados = Estado::all();
        return view('paginasInformacion.editArticulo', compact('articulo','estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $articulo = Articulo::find($id);
        $articulo->id_estado = $request->id_estado;

        $articulo->titulo = $request->titulo;
        $articulo->contenido = $request->contenido;
        $articulo->fecha = date('Y-m-d');

        $articulo->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect()->back();
    }
}