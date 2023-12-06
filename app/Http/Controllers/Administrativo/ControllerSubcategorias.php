<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

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

        $errors = [
            'id_categoria' => 'required|numeric',
            'nombre' => 'required|string|max:100|min:2|unique:nombre',
            'descripcion' => 'required|string|max:255|min:5',
            'id_estado' => 'required|numeric',
        ];
    
        // Mensajes de error personalizados
        $messages = [
            'id_categoria.required' => 'Se requeire id categoria',
            'nombre.unique' => 'Este nombre ya existe.',
            'nombre.min' => 'El nombre debe contener al menos 2 caracteres',
            'nombre.max' => 'El nombre no puede exeder los 100 caracteres',
            'descripcion.min' => 'La descripcion debe contener al menos 5 caracteres',
            'descripcion.max' => 'La descripcion no puede exeder los 255 caracteres',
            'id_estado.required' => 'Se requeire id estado',
        ];
    
        // Validar los datos
        $validator = Validator::make($request->all(), $errors, $messages);
    
        // Si la validación falla, redirigir con mensajes de error
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Crear y guardar subcategoria
        $subcategoria = new Subcategoria();
        $subcategoria->id_categoria = $request->id_categoria;
        $subcategoria->nombre = $request->nombre;
        $subcategoria->descripcion = $request->descripcion;
        $subcategoria->id_estado = $request->id_estado;
        $subcategoria->save();
    
        //return redirect()->back();   
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
        $subcategoria = Subcategoria::find($id);
        $subcategoria->id_categoria = $request->id_categoria;
        $subcategoria->nombre = $request->nombre;
        $subcategoria->descripcion = $request->descripcion;
        $subcategoria->id_estado = $request->id_estado;
        $subcategoria->save();
        //return redirect()->route("");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategoria = Subcategoria::find($id);
        $subcategoria->delete();
        return redirect()->back();
    }
}
