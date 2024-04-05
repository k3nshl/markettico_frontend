<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Articulo;
use App\Models\PaginaInformacion;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ControllerPaginasInformacion extends Controller
{
    protected $controllerHitoriales;

    public function __construct(ControllerHistoriales $controllerHistoriales)
    {
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
        try {

            $request->validate([
                'titulo' => 'required|string|max:100|unique:paginas_informacion',
                'descripcion' => 'required|string|max:100',
                'icono' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $item = new PaginaInformacion();

            $item->titulo = $request->titulo;
            $item->descripcion = $request->descripcion;
            $item->id_estado = 1;

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
            $this->controllerHitoriales->store_paginasInfo($request, 'Creación');


            return redirect()->back()->with('success', 'Página de información creada correctamente.');
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
        $pagina = PaginaInformacion::find($id);
        $data_articulos = Articulo::where('id_pagina_informacion', $id)->get();
        return view('paginasInformacion.show', compact('data_articulos', 'pagina'));
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
                'titulo' => 'required|string|max:100|unique:paginas_informacion,titulo,' . $id . ',id_pagina_informacion',
                'descripcion' => 'required|string|max:100',
            ]);

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

            $request->merge([
                'id_pagina_informacion' => $item->id_pagina_informacion,
            ]);
            $this->controllerHitoriales->store_paginasInfo($request, 'Actualización');

            return redirect()->back()->with('success', 'Página de información actualizada correctamente.');
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
        $item = PaginaInformacion::find($id);
        $item->delete();

        $request = new Request();
        $request->merge([
            'id_pagina_informacion' => $item->id_pagina_informacion,
            'titulo' => $item->titulo,
        ]);
        $this->controllerHitoriales->store_paginasInfo($request, 'Eliminación');
        return redirect()->back()->with('success', 'Página de información eliminada correctamente.');
    }
}
