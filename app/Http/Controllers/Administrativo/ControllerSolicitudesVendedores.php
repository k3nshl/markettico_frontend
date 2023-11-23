<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\Vendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Redirect;

class ControllerSolicitudesVendedores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('solicitudes.indexVendedores',compact('vendedores'));
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

       // $item->id_vendedor_propietario = 2;
        $item->nombre_empresa = "artesanias belen";
        $item->telefono_empresarial = "66634342";
        $item->correo_empresarial = "maxipali@gmail.com";
        $item->cedula_juridica = "34343434";
        $item->password = "1234";
        $item->ubicacion = "Guacimo";
        $item->foto_perfil ="fotoperfil";
        $item->foto_portada ="belenPortada";
        $item->nombre_completo ="maria belen xd";
        $item->correo_electronico ="mb@gmail.com";
        $item->telefono ="12354";
        $item->id_estado =1;
        $item->tipo_identificacion ="cedula";
        $item->numero_identificacion = "208250640";
        $item->tipo_vendedor = 1;
        
        $item->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Vendedor::find($id);
        return view('solicitudes.indexVendedores', compact('item'));
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
        $item = Vendedor::find($id);
        $item->nombre_empresa = "EDITADOOOO";
        $item->update();
        return Redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $item = Vendedor::find($id);
        $item->delete();
        return redirect()->back();
    }
}
