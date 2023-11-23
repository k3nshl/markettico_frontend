<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ControllerVendedores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $vendedores = Vendedor::all();

        return view('solicitudes.indexVendedores', compact('vendedores'));
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
    public function store()
    {

        $item = new Vendedor();

        $item->id_vendedor_propietario = 2;
        $item->nombre_empresa = "artesanias belen";
        $item->telefono_empresarial = "66634342";
        $item->correo_empresarial = "maxipali@gmail.com";
        $item->cedula_juridica = "34343434";
        $item->password = "1234";
        $item->ubicacion = "siquirres";
        $item->foto_perfil ="fotoperfil";
        $item->foto_portada ="maxiPortada";
        $item->nombre_completo ="maria belen xd";
        $item->correo_electronico ="mb@gmail.com";
        $item->telefono ="654545";
        $item->id_estado =6;
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
        $item->update();
        return view('solicitudes-vendedores.index', 2);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    
        $vendedor =  Vendedor::find($id);
        $vendedor->delete();
        return redirect()->back();

    }
}
