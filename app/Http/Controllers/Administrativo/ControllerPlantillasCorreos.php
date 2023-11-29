<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Mail\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Email;

class ControllerPlantillasCorreos extends Controller
{

    //Metodos para las rutas de las plantillas
    public function correoAutenticacion()
    {
        return view("plantillasCorreos.correoAutenticacion");
    }

    public function correoCambiosPoliticas()
    {
        return view("plantillasCorreos.correoCambiosPoliticas");
    }

    public function correoExpiracionSuspension()
    {
        return view("plantillasCorreos.correoExpiracionSuspension");
    }

    public function correoRegistro()
    {
        return view("plantillasCorreos.correoRegistro");
    }

    public function correoSolicitud()
    {
        return view("plantillasCorreos.correoSolicitud");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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


    public function email_user()
    {
        $new_user = Auth::user();
        $email = new Email("", $new_user, 1);
        Mail::to($new_user->email)->send($email);
    }


    public function email_seller(Request $request)
    {
        // if ($request->type == 4) {
            // $item = Usuario::where('cedula', $request->nombre_usuario)->first();

            // if ($item) {
                // $request->password =  Crypt::decryptString($item->password);
                $solicitante = Auth::user();
                $email = new Email($request, $request->emisor, $request->type);
                Mail::to($request->destinatario)->send($email);
                return redirect()->back()->with('success', 'Sus datos de ingreso se han enviado correctamente al correo: ' . $request->destinatario . ", desde ahí podra iniciar sesion");;
            // } else {
                // return redirect()->back()->withErrors(
                    // ['error' => 'No se ha encontrado ningun usuarion con el nombre de usuario: ' . $request->nombre_usuario]
                // );
            // }
        // }

        // if ($request->type != 4) {
            $solicitante = Auth::user();
            $email = new Email($request, $request->emisor, $request->type);
            Mail::to($request->destinatario)->send($email);
            return redirect()->back();
        // }
    }
}
