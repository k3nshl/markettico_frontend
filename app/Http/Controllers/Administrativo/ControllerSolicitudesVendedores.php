<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Vendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ControllerSolicitudesVendedores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('solicitudes.indexVendedores');
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
        
        $item = new Vendedor();

        $item->id_vendedor_propietario = 2;
        $item->nombre_empresa = "Ucr siquirres";
        $item->telefono_empresarial = "881888243";
        $item->correo_empresarial = "ucr@gmail.com";
        $item->cedula_juridica = "34343434";
        $item->password = "123";
        $item->ubicacion = "siquirres";
        $item->foto_perfil ="foto_perfil";
        $item->foto_portada ="UCRPortada";
        $item->nombre_completo ="juaquin lorenza";
        $item->correo_electronico ="juanL@gmail.com";
        $item->telefono ="7676584";
        $item->id_estado =2;
        $item->tipo_identificacion ="pasaporte";
        $item->numero_identificacion = "9090909";
        $item->tipo_vendedor = 1;
        
        $item->updated_at = Date::now();
        $item->created_at = Date::now();
        $item->save();

        return redirect()->back();

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
