<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Estado;
use App\Models\Subcategoria;

class ControllerCategorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estado::all();
        $categorias = Categoria::all();
        
        return view('categorias.index', compact('categorias','estados'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('categorias.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $item = new Categoria();
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;
        $item->id_estado = $request->id_estado;
        $item->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $estados = Estado::all();
        $itemCategoria = Categoria::find($id);
        $subcategorias = Subcategoria::all();
        return view('categorias.show',compact('itemCategoria','estados','subcategorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $itemCategoria = Categoria::find($id); 
        $itemCategoria->update();
        return view('categorias.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $itemCategoria= Categoria::find($id);
        $itemCategoria->nombre = $request->nombre;
        $itemCategoria->descripcion = $request->descripcion;
        $itemCategoria->id_estado = $request->id_estado;
        $itemCategoria ->update();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
            // Encuentra el modelo por su ID
            $item = Categoria::find($id);
    
            // Elimina el modelo
            $item->delete();

    
            // Redirige a la página de índice con un mensaje de éxito
            return redirect()->back();
    }
}