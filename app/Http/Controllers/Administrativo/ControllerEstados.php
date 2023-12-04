<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\HistorialGestionEstados;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class ControllerEstados extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Este si sirve yeaaah
        //return  Auth::auth()->user()->id_usuario;
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
        return view('estadosRoles.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Estado();
        $item->nombre = $request->nombre;

        $request->validate([
            'nombre' => 'required|string|max:50'
        ]);
        // Validacion de que no se repita el nombre del estado


        $validacion = Estado::where('nombre', $request->nombre)->first();

        if ($validacion) {
            return back()->with('error', 'Ya existe un registro con este nombre');
        } else {
            $item->save();
            $historial = new HistorialGestionEstados();
            $historial->id_estado =  $item->id_estado;
            $historial->nombre_estado =  $item->nombred;


            $historial->id_usuario = 13; //Auth::auth()->user()->id_usuario;

            $historial->fecha_hora =  date(Date::now());
            $historial->accion =  'Inserccion de un nuveo estado';
            $historial->save();

            return back()->with('success', 'El estado se ha creado correctamente');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $itemEstado = Estado::find($id);
        return view('estadosRoles.index', compact('itemEstado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Estado::find($id);
        $item->update();
        return view('estadosRoles.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item =  Estado::find($id);
        $item->nombre = $request->nombre;

        $request->validate([
            'nombre' => 'required|string|max:50'
        ]);
        // Validacion de que no se repita el nombre del estado


        $validacion = Estado::where('nombre', $request->nombre)->first();

        if ($validacion) {
            return back()->with('error', 'Ya existe un registro con este nombre');
        } else {
            $item->update();
            $historial = new HistorialGestionEstados();
            $historial->id_estado =  $item->id_estado;
            $historial->nombre_estado =  $item->nombred;


            $historial->id_usuario = 13; //Auth::auth()->user()->id_usuario;

            $historial->fecha_hora =  date(Date::now());
            $historial->accion =  'Edición de un nuveo estado';
            $historial->save();

            return back()->with('success', 'El estado se ha editado correctamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // Encuentra el modelo por su ID
        $id = 20;
        $item = Estado::find($id);
        try {
            // Encuentra el modelo por su ID
            $item = Estado::find($id);

            // Elimina el modelo
            $item->delete();

            $historial = new HistorialGestionEstados();
            $historial->id_estado =  $item->id_estado;
            $historial->id_usuario =  Auth::auth()->user()->id_usuario;
            $historial->fecha_hora =  date(Date::now());
            $historial->accion =  'Eliminacion de un estado';
            $historial->save();

            // Redirige a la página de índice con un mensaje de éxito
            return redirect()->back();
        } catch (\Throwable $th) {

            return redirect()->back()->with('error', 'Este estado no puede ser eliminado ya que esta vinculado con otros registros');
        }
    }
}
