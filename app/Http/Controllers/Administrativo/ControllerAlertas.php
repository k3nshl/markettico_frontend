<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                'titulo' => 'required|unique:alertas',
                'descripcion' => 'required',
                'tipo_destinatario' => 'required',
                'fecha_inicio' => 'required',
                'fecha_final' => 'required',
            ]);

            $alerta = new Alerta();
            $alerta->id_usuario_remitente = Auth::user()->id_usuario_administrativo;
            $alerta->titulo = $request->titulo;
            $alerta->descripcion = $request->descripcion;
            $alerta->tipo_destinatario = $request->tipo_destinatario;
            $alerta->fecha_inicio = $request->fecha_inicio;
            $alerta->fecha_final = $request->fecha_final;
            $alerta->id_estado = 1;
            $alerta->save();

            return redirect()->back()->with('success', 'Alerta creada correctamente.')->with('origen', 'alertas');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            $errors->add('origen', 'alertas');
            return redirect()->back()->withErrors($errors);
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
                'titulo' => 'required|unique:alertas,titulo,' . $id . ',id_alerta',
                'id_estado' => 'required',
                'descripcion' => 'required',
                'tipo_destinatario' => 'required',
                'fecha_inicio' => 'required',
                'fecha_final' => 'required',
            ]);

            $item = Alerta::find($id);
            $item->id_usuario_remitente = Auth::user()->id_usuario_administrativo;
            $item->titulo = $request->titulo;
            $item->descripcion = $request->descripcion;
            $item->tipo_destinatario = $request->tipo_destinatario;
            $item->fecha_inicio = $request->fecha_inicio;
            $item->fecha_final = $request->fecha_final;
            $item->id_estado = $request->id_estado;

            $item->update();
            return redirect()->back()->with('success', 'Alerta actualizada correctamente.')->with('origen', 'alertas');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            $errors->add('origen', 'alertas');
            return redirect()->back()->withErrors($errors);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Alerta::find($id);
        $item->delete($id);
        return redirect()->back()->with('success', 'Alerta eliminada correctamente.')->with('origen', 'alertas');
    }
}
