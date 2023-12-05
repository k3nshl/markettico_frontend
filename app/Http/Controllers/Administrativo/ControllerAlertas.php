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
        return view('notificaciones.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

<
        $validator = Validator::make($request->all(), [
            'titulo' => 'required||unique:alertas',
            'id_estado' => 'required',
            'descripcion' => 'required',
            'tipo_destinatario' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back();
        }
        $alerta = new Alerta();

        $alerta->id_usuario_remitente = Auth::auth()->user()->id_usuario;
        $alerta->titulo = $request->titulo;
        $alerta->descripcion = $request->descripcion;
        $alerta->tipo_destinatario = $request->tipo_destinatario;
        $alerta->fecha_inicio = $request->fecha_inicio;
        $alerta->fecha_final = $request->fecha_final;
        $alerta->id_estado = 1;
        $alerta->save();


        $tipo_destinatario = "";

        if ($request->tipo_destinatario == 1) {

            $tipo_destinatario = "compradores";
        } 

        if ($request->tipo_destinatario == 2) {

            $tipo_destinatario = "vendedores";
        } 

        if ($request->tipo_destinatario == 3) {

            $tipo_destinatario = "todos";
        } 
        

        $item = new Alerta();

        $item->id_usuario_remitente = 8 ;

        $item->titulo = $request->titulo;
        $item->descripcion = $request->descripcion;

        $item->tipo_destinatario = $tipo_destinatario;

        $item->fecha_inicio = $request->fecha_inicio;
        $item->fecha_final = $request->fecha_final;

        $item->id_estado = 2;

        $item->save();

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
    public function update(Request $request, string $id)
    {

        $alerta = Alerta::find($id);
        $alerta->id_usuario_remitente = $request->id_usuario_remitente;
        $alerta->titulo = $request->id_usuario_remitente;
        $alerta->descripcion = $request->id_usuario_remitente;
        $alerta->tipo_destinatario = $request->id_usuario_remitente;
        $alerta->fecha_inicio = $request->id_usuario_remitente;
        $alerta->fecha_final = $request->fecha_final;
        $alerta->id_estado = $request->id_estado;
        $alerta->save();    
        return redirect()->back();

        $id = 4;

        $tipo_destinatario = "";

        if ($request->tipo_destinatario == 1) {

            $tipo_destinatario = "compradores";
        } 

        if ($request->tipo_destinatario == 2) {

            $tipo_destinatario = "vendedores";
        } 

        if ($request->tipo_destinatario == 3) {

            $tipo_destinatario = "todos";
        } 
        

         $item = Alerta::find($id);

        $item->id_usuario_remitente = 8 ;

        $item->titulo = $request->titulo;
        $item->descripcion = $request->descripcion;

        $item->tipo_destinatario = $tipo_destinatario;

        $item->fecha_inicio = $request->fecha_inicio;
        $item->fecha_final = $request->fecha_final;

        $item->id_estado = 2;

        $item->update();
        return redirect()->back();

       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // $alerta =  Alerta::find($id);
        // $alerta->delete();
        // return redirect()->back();

        
        $item = Alerta::find($id);
        $item->delete($id);
        return redirect()->back();


    }
}
