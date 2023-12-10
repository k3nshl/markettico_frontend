<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ControllerArticulos extends Controller
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
        try {
            $request->validate([
                'titulo' => 'required|string|max:150|unique:articulos',
                'contenido' => 'required|string',
            ]);

            $articulo = new Articulo();
            $articulo->id_usuario = Auth::user()->id_usuario_administrativo;
            $articulo->id_estado = $request->id_estado;
            $articulo->id_pagina_informacion = $request->id_pagina;

            $articulo->titulo = $request->titulo;
            $articulo->contenido = $request->contenido;
            $articulo->fecha = date('Y-m-d');

            $articulo->save();
            return redirect()->back()->with('success', 'Artículo creado correctamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->with('mistake', $errors);
        }
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
        return view('paginasInformacion.editArticulo', compact('articulo', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'titulo' => 'required|string|max:150|unique:articulos,titulo,' . $id . ',id_articulo',
                'contenido' => 'required|string',
                'id_estado' => 'required',
            ]);
            $articulo = Articulo::find($id);
            $articulo->id_estado = $request->id_estado;
            $articulo->titulo = $request->titulo;
            $articulo->contenido = $request->contenido;
            $articulo->fecha = date('Y-m-d');

            $articulo->save();

            return redirect()->back()->with('success', 'Artículo actualizado correctamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->with('mistake', $errors);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect()->back()->with('success', 'Artículo eliminado correctamente.');
    }
}
