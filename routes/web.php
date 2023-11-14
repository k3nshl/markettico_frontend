<?php

use App\Http\Controllers\Administrativo\ControllerDashboard;
use App\Http\Controllers\Administrativo\ControllerEstados;
use App\Http\Controllers\Administrativo\ControllerGestionarPlanes;
use App\Http\Controllers\Administrativo\ControllerRoles;
use App\Http\Controllers\Administrativo\ControllerSolicitudVendedor;
use App\Http\Controllers\Administrativo\ControllerUsuariosAdministrativos;
use App\Http\Controllers\Administrativo\ControllerGestionarPaginas;
use App\Http\Controllers\Administrativo\ControllerCategorias;
use App\Http\Controllers\Administrativo\ControllerHistoriales;
use App\Http\Controllers\Administrativo\ControllerGestionarProductos;
use App\Http\Controllers\Administrativo\ControllerModerarContenido;
use App\Http\Controllers\Administrativo\ControllerPlantillasCorreos;
use App\Http\Controllers\Administrativo\ControllerLogin;
use App\Http\Controllers\Administrativo\ControllerEstadisticas;
use App\Http\Controllers\Administrativo\ControllerNotificaciones;
use App\Http\Controllers\Administrativo\ControllerPerfilUsuario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'usuarios_administrativos.index');


//Ruta de inicio de Sesión para más adelante
//Route::view('/', 'login.inicioSesion');

//ruta para plantilla del correo de autenticacion
//Route::view('/', 'plantillas_correos.correo_autenticacion');

//ruta para plantilla del correo de registro
//Route::view('/', 'plantillas_correos.correo_registro');

Route::resource('dashboard', ControllerDashboard::class);
Route::resource('usuarios_administrativos', ControllerUsuariosAdministrativos::class);
Route::resource('estados_roles', ControllerRoles::class);
Route::resource('estados_roles', ControllerEstados::class);
Route::resource('moderador', ControllerGestionarPaginas::class);
Route::resource('categorias', ControllerCategorias::class);
Route::resource('planes', ControllerGestionarPlanes::class);
Route::resource('solicitud', ControllerSolicitudVendedor::class);
Route::resource('historial', ControllerHistoriales::class);
Route::resource('estadisticas', ControllerEstadisticas::class);
Route::resource('login', ControllerLogin::class);
//Ruta para verificación dos pasos
Route::resource('login', ControllerLogin::class);
Route:: get('/verificacion', [ControllerLogin::class,'verificar'])->name('verif');
Route::resource('productos', ControllerGestionarProductos::class);
Route::resource('contenido', ControllerModerarContenido::class);
Route:: get('/verificacion', [ControllerLogin::class,'verificar'])->name('verif');

//Rutas para acceder a las plantillas de los correos
Route:: get('/plantillaCorreoAutenticacion', [ControllerPlantillasCorreos::class,'correoAutenticacion'])->name('correoAutenticacion');
Route:: get('/plantillaCorreoCambios_politicas', [ControllerPlantillasCorreos::class,'CorreoCambios_politicas'])->name('CorreoCambiosPoliticas');
Route:: get('/plantillaCorreoExpiracionSuspension', [ControllerPlantillasCorreos::class,'CorreoExpiracionSuspension'])->name('CorreoExpiracionSuspension');
Route:: get('/plantillaCorreoRegistro', [ControllerPlantillasCorreos::class,'CorreoRegistro'])->name('CorreoRegistro');
Route:: get('/plantillaCorreoSolicitud', [ControllerPlantillasCorreos::class,'CorreoSolicitud'])->name('CorreoSolicitud');


Route::get('/perfil/{id}', [ControllerPerfilUsuario::class, 'show'])->name('perfil.show');

// Rutas para las notificaciones
Route::get('/notificaciones', [ControllerNotificaciones::class, 'index'])->name('notificaciones');