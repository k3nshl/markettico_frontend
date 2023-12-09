<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Alerta;
use App\Models\Anuncio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

class ControllerAnuncios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alertas = Alerta::all();
        $anuncios = Anuncio::all();

        return view('notificaciones.index', compact('alertas', 'anuncios'));
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
                'titulo' => 'required|unique:anuncios',
                'contenido' => 'required',
                'img_portada' => 'required',
                'fecha_inicio' => 'required',
                'fecha_final' => 'required',
                'etiqueta' => 'required',
            ]);

            // Crear anuncio
            $anuncio = new Anuncio();

            if ($request->hasFile('img_portada')) {
                $file = $request->file('img_portada');
                $fileName = Carbon::now()->format('YmdHisv') . '_' . $file->getClientOriginalName();
                $file->move(public_path('img\anuncios'), $fileName);
                $anuncio->img_portada = $fileName;
            }

            $anuncio->id_usuario_remitente = Auth::user()->id_usuario_administrativo;
            $anuncio->id_estado = 1;
            $anuncio->titulo = $request->titulo;
            $anuncio->contenido = $request->contenido;

            $anuncio->fecha_inicio = $request->fecha_inicio;
            $anuncio->fecha_final = $request->fecha_final;
            $anuncio->etiqueta = $request->etiqueta;
            $anuncio->save();

            return redirect()->back()->with('success', 'Anuncio creado correctamente.')->with('origen', 'anuncios');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            $errors->add('origen', 'anuncios');
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
                'titulo' => 'required|unique:anuncios,titulo,' . $id . ',id_anuncio',
                'contenido' => 'required',
                'fecha_inicio' => 'required',
                'fecha_final' => 'required',
                'etiqueta' => 'required',
            ]);

            $anuncio = Anuncio::find($id);

            // Cargar imagen
            if ($request->hasFile('img_portada')) {
                $file = $request->file('img_portada');
                $fileName = Carbon::now()->format('YmdHisv') . '_' . $file->getClientOriginalName();
                $file->move(public_path('img\anuncios'), $fileName);
                $anuncio->img_portada = $fileName;
            }

            $anuncio->id_usuario_remitente = Auth::user()->id_usuario_administrativo;
            $anuncio->id_estado = $request->id_estado;
            $anuncio->titulo = $request->titulo;
            $anuncio->contenido = $request->contenido;
            $anuncio->fecha_inicio = $request->fecha_inicio;
            $anuncio->fecha_final = $request->fecha_final;
            $anuncio->etiqueta = $request->etiqueta;

            $anuncio->save();
            return redirect()->back()->with('success', 'Anuncio actualizado correctamente.')->with('origen', 'anuncios');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            $errors->add('origen', 'anuncios');
            return redirect()->back()->withErrors($errors);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anuncio = Anuncio::find($id);
        $anuncio->delete();
        return redirect()->back()->with('success', 'Anuncio eliminado correctamente.')->with('origen', 'anuncios');
    }
}
