<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\HistorialGestionPaginas;
use App\Models\PaginaInformacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ControllerPaginasInformacion extends Controller
{
    protected $controllerHitoriales;

    public function __construct(ControllerHistoriales $controllerHistoriales) {
      $this->controllerHitoriales = $controllerHistoriales;
   }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_paginas = PaginaInformacion::all();

        return view('paginasInformacion.index', compact('data_paginas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $errors = [
            'titulo' => 'required|string|max:100|min:2',
            'descripcion' => 'required|string|max:100|min:5',
            'icono' => 'required',
        ];
    
        // Mensajes de error personalizados
        $messages = [
            'titulo.required' => 'Se requiere un titulo',
            'titulo.min' => 'El titulo debe contener al menos 2 caracteres',
            'titulo.max' => 'El titulo no puede exeder los 100 caracteres',
            'descripcion.min' => 'La descripcion debe contener al menos 5 caracteres',
            'descripcion.max' => 'La descripcion no puede exeder los 100 caracteres',
            'icono.required' => 'Se requiere un icono',
        ];
    
        // Validar los datos
        $validator = Validator::make($request->all(), $errors, $messages);
    
        // Si la validación falla, redirigir con mensajes de error
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Crear y guardar Pagina de Informacion
        
        $item = new PaginaInformacion();
        $item->titulo = $request->titulo;
        $item->descripcion = $request->descripcion;
        $imagen = $request->icono;
        if ($imagen) {
            $filename = $imagen->getClientOriginalName();

            $imagen->move(public_path('img/fotografias'), $filename);
            $item->icono = $filename;
        }
        $item->save();

        $request->merge([
            'id_pagina_informacion' => $item->id_pagina_informacion,
        ]);
         $this->controllerHitoriales->store_paginasInfo($request);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data_articulos = Articulo::where('id_pagina_informacion', $id)->get();
        $id_pagina =$id;
        return view('paginasInformacion.show', compact('data_articulos','id_pagina'));
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
        $item = PaginaInformacion::find($id);
        $item->titulo = $request->titulo;
        $item->descripcion = $request->descripcion;


        $imagen = $request->icono;

        if ($imagen) {
            $filename = $imagen->getClientOriginalName();

            $imagen->move(public_path('img/fotografias'), $filename);
            $item->icono = $filename;
        }
        $item->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PaginaInformacion::find($id);
        $item->delete();

        return redirect()->back();
    }
}
