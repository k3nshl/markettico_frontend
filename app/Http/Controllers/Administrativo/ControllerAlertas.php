<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


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

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $errors = [
            'titulo' => 'required||unique:alertas',
            'descripcion' => 'required',
            'tipo_destinatario' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
        ];
        $messages = [
            'titulo.unique' => 'El titulo ya está en uso.',
            'descripcion.required' => 'La descripcion esta vacia.',
            'tipo_destinatario.required' => 'El destinatario esta vacio.',
            'fecha_inicio.required' => 'La fecha de inicio no se a seleecionado.',
            'fecha_final.required' => 'La fecha de finalización no se a seleecionado.',
        ]; 
        $validator = Validator::make($request->all(),$errors, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        // Creando alerta
        $alerta = new Alerta();
        $alerta->id_usuario_remitente = Auth::user()->id_usuario_administrativo;
        $alerta->titulo = $request->titulo;
        $alerta->descripcion = $request->descripcion;
        $alerta->tipo_destinatario = $request->tipo_destinatario;
        $alerta->fecha_inicio = $request->fecha_inicio;
        $alerta->fecha_final = $request->fecha_final;
        $alerta->id_estado = 1;  //Aqui esta quemado hay que cambiarlo
        $alerta->save();

        return redirect()->back();
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
    public function update(Request $request, $id)
    {

        $errors = [
            'titulo' => 'required||unique:alertas',
            'descripcion' => 'required',
            'tipo_destinatario' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
        ];
        $messages = [
            'titulo.unique' => 'El titulo ya está en uso.',
            'descripcion.required' => 'La descripcion esta vacia.',
            'tipo_destinatario.required' => 'El destinatario esta vacio.',
            'fecha_inicio.required' => 'La fecha de inicio no se a seleecionado.',
            'fecha_final.required' => 'La fecha de finalización no se a seleecionado.',
        ]; 
        $validator = Validator::make($request->all(),$errors, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        
        $alerta = Alerta::find($id);
        $alerta->id_usuario_remitente = Auth::user()->id_usuario_administrativo;
        $alerta->titulo = $request->titulo;
        $alerta->descripcion = $request->descripcion;
        $alerta->tipo_destinatario = $request->tipo_destinatario;
        $alerta->fecha_inicio = $request->fecha_inicio;
        $alerta->fecha_final = $request->fecha_final;
        $alerta->id_estado = $request->id_estado;
        $alerta->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alerta =  Alerta::find($id);
        $alerta->delete();

        return redirect()->back();
    }
}
