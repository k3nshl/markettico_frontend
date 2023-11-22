<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\PaginaInformacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerPaginasInformacion extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_paginas = PaginaInformacion::all();

        return view('paginasInformacion.index', compact('data_paginas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $item = new PaginaInformacion();
        $item->titulo = $request->titulo;
        $item->descripcion = $request->descripcion;

        $imagen = $request->icono;

        if ($imagen) {
            $filename = $imagen->getClientOriginalName();

            $imagen->move(public_path('img/fotografias'), $filename);
            $item->icono = $filename;
        }

        $item->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data_articulos = Articulo::where('id_pagina_informacion', $id)->get();
        $id_pagina =$id;
        return view('paginasInformacion.show', compact('data_articulos','id_pagina'));
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
        $item = PaginaInformacion::find($id);
        $item->titulo = $request->titulo;
        $item->descripcion = $request->descripcion;

        $imagen = $request->icono;

        if ($imagen) {
            $filename = $imagen->getClientOriginalName();

            $imagen->move(public_path('img/fotografias'), $filename);
            $item->icono = $filename;
        }
        $item->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PaginaInformacion::find($id);
        $item->delete();

        return redirect()->back();
    }
}
