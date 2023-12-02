<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use Illuminate\Http\Request;

class ControllerAlertas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alerta = Alerta::all();

        return view('notificaciones.index', compact('alerta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notificaciones.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $tipo_destinatario = "";

        if ($request->tipo_destinatario == 1) {

            $tipo_destinatario = "compradores";
        }

        if ($request->tipo_destinatario == 2) {

            $tipo_destinatario = "vendedores";
        }

        if ($request->tipo_destinatario == 3) {

            $tipo_destinatario = "todos";
        }


        $item = new Alerta();

        $request->validate([
            'titulo' => 'required|string|max:50'
        ]);
        // Validacion de que no se repita el nombre del estado

        $validacion = Alerta::where('titulo', $request->titulo)->first();

        if ($validacion) {
            return back()->with('error', 'Ya existe un registro con este nombre');
        } else {



            $item->id_usuario_remitente = 8;

            $item->titulo = $request->titulo;
            $item->descripcion = $request->descripcion;

            $item->tipo_destinatario = $tipo_destinatario;

            $item->fecha_inicio = $request->fecha_inicio;
            $item->fecha_final = $request->fecha_final;

            $item->id_estado = 2;

            $item->save();
            return back()->with('success', 'La alerta se ha registrado correctamente');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Alerta::find($id);
        return view('notificaciones.index', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Alerta::find($id);
        return view('notificaciones.index', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = 1;

        $tipo_destinatario = "";

        if ($request->tipo_destinatario == 1) {

            $tipo_destinatario = "compradores";
        }

        if ($request->tipo_destinatario == 2) {

            $tipo_destinatario = "vendedores";
        }

        if ($request->tipo_destinatario == 3) {

            $tipo_destinatario = "todos";
        }


        $item = Alerta::find($id);

        $request->validate([
            'titulo' => 'required|string|max:50'
        ]);
        // Validacion de que no se repita el nombre del estado

        $validacion = Alerta::where('titulo', $request->titulo)->first();

        if ($validacion) {
            return back()->with('error', 'Ya existe un registro con este nombre');
        } else {




            //$item->id_usuario_remitente = 8;

            $item->titulo = $request->titulo;
            $item->descripcion = $request->descripcion;

            $item->tipo_destinatario = $tipo_destinatario;

            $item->fecha_inicio = $request->fecha_inicio;
            $item->fecha_final = $request->fecha_final;

            $item->id_estado = 2;

            $item->update();
            return back()->with('success', 'La alerta se ha actualizado correctamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $item = Alerta::find($id);
        $item->delete($id);
        return redirect()->back();
    }
}
