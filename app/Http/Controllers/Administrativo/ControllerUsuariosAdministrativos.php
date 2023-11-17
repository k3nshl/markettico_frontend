<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ControllerUsuariosAdministrativos extends Controller
{
//variables de prueba 
   public $id_rol = 1;
   public $id_estado = 1;
   public $nombre_completo = "Hans Farulla";
   public $password = "no me la se";
   public $correo_empresarial = "hans.farulla@ucr.ac.cr";
   public $numero_telefonico="80808080";
    
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        return view('usuarios_administrativos.index');
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
        $item = new UsuarioAdministrativo();

          $item->id_rol = 1;
        $item->id_estado = 1;
        $item->nombre_completo = "Hans Farulla";
        $item->password = "no me la se";
        $item->correo_empresarial = "hans.farulla@ucr.ac.cr";
        $item->numero_telefonico="80808080";
        $item->fecha_hora=Now();

        $item->save();

        return $item;
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
