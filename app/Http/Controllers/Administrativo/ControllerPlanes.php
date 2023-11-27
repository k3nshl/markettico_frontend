<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class ControllerPlanes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planes = Plan::all();
        return view('planes.index', compact('planes'));
        //return view('planes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('planes.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $multitienda = 0;
        if ($request->multitienda == "si") {
            $multitienda = 1;
        } else {
            $multitienda = 0;
        };


        $item = new Plan();

        $item->nombre = $request->nombre;
        $item->tipo = $request->tipo;
        $item->costo = $request->costo;

        $item->cantidad_Productos = $request->cantidad_productos;

        $item->multitienda = $multitienda;
        $item->duracion = $request->duracion;
        $item->descripcion = $request->textareaEditarAnuncio;
        //estado no existe en front se hace prueba con id directo
        $item->id_estado = 1;
        $item->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $itemPlan = Plan::find($id);
        return view('planes.index', compact('itemPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $itemPlan = Plan::find($id);
        $itemPlan->update();
        return view('planes.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //$idEs = 3;
        $multitienda = 0;
        if ($request->multitienda == "si") {
            $multitienda = 1;
        } else {
            $multitienda = 0;
        };


        $item = Plan::find($id);

        $item->nombre = $request->nombre;
        $item->tipo = $request->tipo;
        $item->costo = $request->costo;

        $item->cantidad_Productos = $request->cantidad_productos;

        $item->multitienda = $multitienda;
        $item->duracion = $request->duracion;

        $item->descripcion = $item->descripcion;
        //$item->descripcion = $request->textareaEditarAnuncio;
        //estado no existe en front se hace prueba con id directo
        $item->id_estado = 10;
        $item->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $plan = Plan::find($id);
        $plan->delete();
        return redirect()->back();
    }
}
