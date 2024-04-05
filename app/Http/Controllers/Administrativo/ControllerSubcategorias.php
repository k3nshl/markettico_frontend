<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ControllerSubcategorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategorias = Subcategoria::all();
        //return view("", compact(""));
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
        try {
            $request->validate([
                'nombre' => 'required|string|max:100|unique:subcategorias',
                'descripcion' => 'required|string|max:255',
            ]);
            $subcategoria = new Subcategoria();
            $subcategoria->id_categoria = $request->id_categoria;
            $subcategoria->nombre = $request->nombre;
            $subcategoria->descripcion = $request->descripcion;
            $subcategoria->id_estado = $request->id_estado;
            $subcategoria->save();
            return redirect()->back()->with('success', 'Subcategoria creada exitosamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->with('mistake', $errors);
        }
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
        try {
            $request->validate([
                'nombre' => 'required|string|max:100|unique:subcategorias,nombre,' . $id . ',id_subcategoria',
                'descripcion' => 'required|string|max:255',
            ]);
            $subcategoria = Subcategoria::find($id);
            $subcategoria->id_categoria = $request->id_categoria;
            $subcategoria->nombre = $request->nombre;
            $subcategoria->descripcion = $request->descripcion;
            $subcategoria->id_estado = $request->id_estado;
            $subcategoria->save();
            return redirect()->back()->with('success', 'Subcategoria actualizada exitosamente.');
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
        $subcategoria = Subcategoria::find($id);
        $subcategoria->delete();
        return redirect()->back()->with('success', 'Subcategoria eliminada exitosamente.');
    }
}
