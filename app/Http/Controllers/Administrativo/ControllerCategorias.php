<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Estado;
use App\Models\Subcategoria;
use Illuminate\Validation\ValidationException;

class ControllerCategorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estado::all();
        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias', 'estados'));
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
        try {
            $request->validate([
                'nombre' => 'required|string|max:100|unique:categorias',
                'descripcion' => 'required|string|max:255',
            ]);
            $item = new Categoria();
            $item->nombre = $request->nombre;
            $item->descripcion = $request->descripcion;
            $item->id_estado = $request->id_estado;
            $item->save();
            return redirect()->back()->with('success', 'Categoria creada exitosamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->with('mistake', $errors);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estados = Estado::all();
        $itemCategoria = Categoria::find($id);
        $subcategorias = Subcategoria::where('id_categoria', $id)->get();
        return view('categorias.show', compact('itemCategoria', 'estados', 'subcategorias'));
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
        try {
            $request->validate([
                'nombre' => 'required|string|max:100|unique:categorias,nombre,' . $id . ',id_categoria',
                'descripcion' => 'required|string|max:255',
                'id_estado' => 'required|integer',
            ]);
            $itemCategoria = Categoria::find($id);
            $itemCategoria->nombre = $request->nombre;
            $itemCategoria->descripcion = $request->descripcion;
            $itemCategoria->id_estado = $request->id_estado;
            $itemCategoria->update();
            return redirect()->back()->with('success', 'Categoria actualizada exitosamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->with('mistake', $errors);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Categoria::find($id);
        $item->delete();
        return redirect()->back()->with('success', 'Categoria eliminada exitosamente.');
    }
}
