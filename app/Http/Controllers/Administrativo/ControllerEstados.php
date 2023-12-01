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
        $item->save();

        $historial = new HistorialGestionEstados();
        $historial->id_estado =  $item->id_estado;
        $historial->id_usuario =  Auth::auth()->user()->id_usuario;
        $historial->fecha_hora =  date(Date::now());
        $historial->accion =  'Inserccion de un nuveo estado';
        $historial->save();
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $itemEstado= Estado::find($id);
        return view('estadosRoles.index',compact('itemEstado'));
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
        $estado = Estado::find($id);
        $estado->nombre = $request->nombre;
        $estado->save();
        //$id=4;
        $itemEstado= Estado::find($id);
        $itemEstado->nombre = $request->nombre;
        $itemEstado->update();

        $historial = new HistorialGestionEstados();
        $historial->id_estado =  $itemEstado->id_estado;
        $historial->id_usuario =  Auth::auth()->user()->id_usuario;
        $historial->fecha_hora =  date(Date::now());
        $historial->accion =  'Actualizacion de un estado';
        $historial->save();
        return redirect()->back();
              
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

            // Encuentra el modelo por su ID
            $id=20;
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

            return redirect()->back()->with('error','Este estado no puede ser eliminado ya que esta vinculado con otros registros');
        }
            
    }
}
