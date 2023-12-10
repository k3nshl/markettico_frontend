<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ControllerPlanes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planes = Plan::all();
        return view('planes.index', compact('planes'));
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
                'nombre' => 'required|string|max:30|unique:planes',
                'tipo' => 'required|string|max:50',
                'costo' => 'required|numeric',
                'cantidad_productos' => 'required|numeric',
                'multitienda' => 'required|string|max:2',
                'duracion' => 'required|numeric',
                'descripcion' => 'required|string|max:255',
            ]);

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
            $item->descripcion = $request->descripcion;
            $item->id_estado = 1;
            $item->save();
            return redirect()->back()->with('successStore', 'Plan creado correctamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->with('mistakeStore', $errors);
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
                'nombre' => 'required|string|max:30|unique:planes,nombre,' . $id . ',id_plan',
                'tipo' => 'required|string|max:50',
                'costo' => 'required|numeric',
                'cantidad_productos' => 'required|numeric',
                'multitienda' => 'required|string|max:2',
                'duracion' => 'required|numeric',
                'descripcion' => 'required|string|max:255',
                'id_estado' => 'required|numeric',
            ]);

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
            $item->id_estado = $request->id_estado;
            $item->update();
            return redirect()->back()->with('success', 'Plan actualizado correctamente.');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->with('mistake', $errors);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plan = Plan::find($id);
        $plan->delete();
        return redirect()->back()->with('success', 'Plan eliminado correctamente.');
    }
}
