<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use App\Models\HistorialGestionCuentas;
use App\Models\Rol;
use App\Models\UsuarioAdministrativo;
use App\Models\UsuarioBloqueado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class ControllerUsuariosAdministrativos extends Controller
{

    /**
     * Display a listing of the resource.
     */

    protected $controllerHistorial;

    public function __construct(ControllerHistoriales $historiales)
    {
        $this->controllerHistorial = $historiales;
    }

    public function index()
    {
        $data = UsuarioAdministrativo::where('id_estado', 1)->get();
        $data_bloqueados = UsuarioBloqueado::where('tipo_usuario', 'Administrativo')->get();
        $roles = Rol::all();
        return view('usuariosAdministrativos.index', compact('data', 'data_bloqueados', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuariosAdministrativos.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'titulo' => 'required|unique:alertas',
            'descripcion' => 'required',
            'tipo_destinatario' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
        ];

        $messages = [
            'titulo.required' => 'El campo título es obligatorio.',
            'titulo.unique' => 'El título ya está en uso.',
            'descripcion.required' => 'La descripción está vacía.',
            'tipo_destinatario.required' => 'El destinatario está vacío.',
            'fecha_inicio.required' => 'La fecha de inicio no se ha seleccionado.',
            'fecha_final.required' => 'La fecha de finalización no se ha seleccionado.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $item = new UsuarioAdministrativo();

        $item->id_rol = $request->id_rol;
        $item->id_estado = $request->id_estado;
        $item->nombre_completo = $request->nombre_completo;
        $item->password = sha1($request->password);
        $item->correo_empresarial = $request->correo_empresarial;
        $item->numero_telefonico = $request->numero_telefonico;
        $item->fecha_hora = date(Date::now());
        $item->save();

        $this->controllerHistorial->store_usuario($request, 'Creacion del usuario ');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $item = UsuarioAdministrativo::find($id);
        return view('usuariosAdministrativos.index', compact('index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = UsuarioAdministrativo::find($id);
        return view('usuariosAdministrativos.index', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = UsuarioAdministrativo::find($id);
        if (!$item) {
            return redirect()->back()->with('error', 'El usuario no fue encontrado.');
        }

        // Definir reglas de validación
        $rules = [
            'id_rol' => 'required',
            'id_estado' => 'required',
            'nombre_completo' => 'required',
            'correo_empresarial' => 'required|email',
            'numero_telefonico' => 'required',
        ];

        // Definir mensajes de error
        $messages = [
            'correo_empresarial.email' => 'El correo empresarial debe ser una dirección de correo válida.',
        ];

        // Crear el validador
        $validator = Validator::make($request->all(), $rules, $messages);

        // Verificar si la validación falla
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $item->id_rol = $request->id_rol;
        $item->id_estado = $request->id_estado;
        $item->nombre_completo = $request->nombre_completo;
        $item->correo_empresarial = $request->correo_empresarial;
        $item->numero_telefonico = $request->numero_telefonico;
        $item->update();

        $this->controllerHistorial->store_usuario($request, 'Actulaización del usuario ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = UsuarioAdministrativo::find($id);
        $item->delete();

        $request = new Request();

        $request->merge([
            'nombre_completo' => $item->nombre_completo,
            'correo_empresarial' => $item->correo_empresarial,
        ]);

        $this->controllerHistorial->store_usuario($request, 'Eliminación del usuario ');
        return redirect()->back();
    }


    public function validarPassword(Request $request)
    {
        $pass = Auth::user()->password;

        $password = sha1($request->password);

        if ($pass == $password) {
            return redirect()->back()->with('success', 'true');
        } else {
            return redirect()->back()->with('success', 'false');
        }
    }

    public function actualizarPassword(Request $request)
    {
        $item = UsuarioAdministrativo::find(Auth::user()->id_usuario_administrativo);
        $item->password = sha1($request->password);
        $item->update();
        return redirect()->back();
    }

    public function bloquear_usuario(Request $request)
    {
        $item = UsuarioAdministrativo::find($request->id_usuario_administrativo);
        $item->id_estado = 3;
        $item->update();

        $itemBloqueado = new UsuarioBloqueado();
        $itemBloqueado->id_usuario_administrativo = $request->id_usuario_administrativo;
        $itemBloqueado->descripcion = $request->descripcion;
        $itemBloqueado->tipo_usuario = 'Administrativo';
        $itemBloqueado->save();

        return redirect()->back();
    }

    public function desbloquearUsuario(Request $request)
    {
        $item = UsuarioAdministrativo::find($request->id_usuario_administrativo);
        $item->id_estado = 1;
        $item->update();

        $itemBloqueado = UsuarioBloqueado::where('id_usuario_bloqueado', $request->id_usuario_bloqueado)->first();
        $itemBloqueado->delete();

        return redirect()->back();
    }
}
