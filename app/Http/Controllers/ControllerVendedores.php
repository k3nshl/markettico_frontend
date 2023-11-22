<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class ControllerVendedores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $vendedores = Vendedor::all();

        return view('solicitudes.indexVendedores', compact('vendedores'));
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

      
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Vendedor::find($id);
        return view('solicitudes.indexVendedores', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $item = Vendedor::find($id);
        $item->update();
        return view('solicitudes-vendedores.index');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
       
       


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    
        $vendedor =  Vendedor::find($id);
        $vendedor->delete();
        return redirect()->back();

    }
}
