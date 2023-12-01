<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\ProductoServicio;
use Illuminate\Http\Request;

class ControllerSolicitudesProductos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = ProductoServicio::all();
        return view('solicitudes.indexProductos',compact('productos'));

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = ProductoServicio::find($id);
        return view('solicitudes.indexVendedores', compact('item'));
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

        $item = ProductoServicio::find($id);
        $estado = 0;
        

        if($request->revision == "1"){

            $estado = 8;
        }

        if($request->revision == "2"){

            $estado = 10;
        }


  
        $item->id_estado = $estado;
        
        $item->update();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function solicitudesProductos()
    {
        return view('solicitudes.indexProductos');
    }

    public function solicitudesServicios()
    {
        return view('solicitudes.indexServicios');
    }
}
