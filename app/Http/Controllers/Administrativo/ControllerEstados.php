<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use Illuminate\Http\Request;

class ControllerEstados extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Enviar el listado de roles a la vista
        // Enviar el listado de estados a la vista

        return view('estadosRoles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('estadosRoles.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Estado();
        $item->nombre = $request->nombre;
        $item->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $itemEstado= Estado::find($id);
        return view('estadosRoles.index',compact('itemEstado'));
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
        //$id=4;
        $dataEstado= Estado::find($id);
        $dataEstado->nombre = $request->nombre;
        $dataEstado->update();
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Destroy de estados";
    }
}
