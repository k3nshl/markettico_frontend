<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\HistorialGestionPaginas;
use App\Models\PaginaInformacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerPaginasInformacion extends Controller
{

    public function guardarHistorial($item)
    {   
        //no deja hacer pull request
        $paginaHistorial = new HistorialGestionPaginas();
        $fecha_actual = date('Y-m-d H:i:s');
        $paginaHistorial->id_pagina_informacion  = $item->id_pagina_informacion;
        $paginaHistorial->fecha_hora = $fecha_actual;
        $paginaHistorial->save();
    }
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
        $this->guardarHistorial($item);
        //return $this->index();
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
        $this->guardarHistorial($item);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PaginaInformacion::find($id);
        $item->delete();
        $this->guardarHistorial($item);
        return redirect()->back();
    }
}
