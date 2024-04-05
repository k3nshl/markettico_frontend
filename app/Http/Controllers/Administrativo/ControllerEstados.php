<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ControllerEstados extends Controller
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
        $estados = Estado::all();
        $roles = Rol::all();

        return view('estadosRoles.index', compact('estados', 'roles'));
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
                'nombre' => 'required|string|max:50|unique:estados'
            ]);

            $item = new Estado();
            $item->nombre = $request->nombre;
            $item->save();

            $request->merge([
                'id_estado' => $item->id_estado,
            ]);

            $this->controllerHitoriales->store_estados($request, 'Creación');

            return redirect()->back()->with('successEstados', 'Estado creado correctamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->with('mistakeEstados', $errors);
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
    public function edit($id)
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
                'nombre' => 'required|string|max:50|unique:estados,nombre,' . $id . ',id_estado'
            ]);

            $item =  Estado::find($id);
            $item->nombre = $request->nombre;
            $item->update();

            $request->merge([
                'id_estado' => $item->id_estado,
            ]);

            $this->controllerHitoriales->store_estados($request, 'Actualización');

            return redirect()->back()->with('successEstados', 'Estado actualizado correctamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->with('mistakeEstados', $errors);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $item = Estado::find($id);
        try {
            $item = Estado::find($id);
            $item->delete();

            $request = new Request();
            $request->merge([
                'id_estado' => $item->id_estado,
                'nombre' => $item->nombre,
            ]);
            $this->controllerHitoriales->store_estados($request, 'Eliminación del estado ');

            return redirect()->back()->with('successEstados', 'Estado eliminado correctamente.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('mistakeEstados', 'Este estado no puede ser eliminado ya que esta vinculado con otros registros');
        }
    }
}
