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
        return "Update de anuncios";
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
