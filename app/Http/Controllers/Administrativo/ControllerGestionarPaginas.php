<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerGestionarPaginas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = 1; 
        return view('paginas_informacion.gestionarPaginas', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paginas_informacion.create');
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
    public function show($id)
    {

        return view('paginas_informacion.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('paginas_informacion.edit', ['id' => $id]);
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
