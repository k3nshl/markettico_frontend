<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Spatie\Ignition\Contracts\Solution;

class ControllerSolicitudesVendedores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('solicitudes.indexVendedores');
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
    public function store()
    {
        $item = new Solicitud();


        $item->idEstado = 3;
        $item->idProductoServicio = 1; //no existe producto
        $item->idVendedor = 1; // no existen vendedores 
        $item->descripcion = "hola descripcion";
        $item->tipo = "Tipo 1";
        $item->fechaSolicitud = "11/22/2014"; //cambiar formato si no funciona
        $item->fechaRevision = "12/22/2014"; //cambiar formato si no funciona
        $item->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $itemitemsolicitud = Solicitud::find($id);
        return view('solicitudes.indexVendedores', compact('itemvendedores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $itemSolicitud = Solicitud::find($id);
        $itemSolicitud->update();
        return view('solicitudes.indexVendedores');
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
