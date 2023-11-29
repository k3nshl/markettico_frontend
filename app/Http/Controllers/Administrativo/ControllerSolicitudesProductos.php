<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\ProductoServicio;
use Illuminate\Http\Request;

class ControllerSolicitudesProductos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = ProductoServicio::all();
        return view('solicitudes.indexProductos',compact('productos'));

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
        $item = new ProductoServicio();

         $item->nombre = "leche xd";
         $item->descripcion = "lechita de vaka";
         $item->precio = "700";
         $item->imagenes = "ImagenPrueba";
         $item->id_estado = "22";
         $item->id_vendedor = 2;
         $item->id_categoria = 1;
         $item->id_subcategoria = 1;
         $item->experiencia ="EXPERIENCIA";
         $item->titulo_profesional ="ingenieria xd";
         $item->telefono ="229843";
         $item->direccion ="5 metros xd";
         $item->email = "lechero@gmail.com";
         
         $item->save();
 
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = ProductoServicio::find($id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
    public function revision(String $id, int $revision)
    {

        $estado = 0;

        if($revision == 1){
            $estado = 8;
        }
        if($revision == 2){
            $estado = 10;
        }

        $item = ProductoServicio::find($id);

        $item->id_estado = $estado;

        $item->update();
        return Redirect()->back();

    }
}
