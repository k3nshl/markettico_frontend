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
use App\Http\Controllers\Administrativo\ControllerLogin;
use App\Http\Controllers\Administrativo\ControllerEstadisticas;
<<<<<<< HEAD
use App\Http\Controllers\Administrativo\ControllerGestionarProductos;
use App\Http\Controllers\Administrativo\ControllerModerarContenido;
=======
use App\Http\Controllers\Administrativo\ControllerPlantillasCorreos;
>>>>>>> dev
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
Route::resource('productos', ControllerGestionarProductos::class);
Route::resource('contenido', ControllerModerarContenido::class);
Route:: get('/verificacion', [ControllerLogin::class,'verificar'])->name('verif');

//Rutas para acceder a las plantillas de los correos
Route:: get('/plantilla_correo_autenticacion', [ControllerPlantillasCorreos::class,'correo_autenticacion'])->name('correo_autenticacion');
Route:: get('/plantilla_correo_cambios_politicas', [ControllerPlantillasCorreos::class,'correo_cambios_politicas'])->name('correo_cambios_politicas');
Route:: get('/plantilla_correo_expiracion_suspension', [ControllerPlantillasCorreos::class,'correo_expiracion_suspension'])->name('correo_expiracion_suspension');
Route:: get('/plantilla_correo_registro', [ControllerPlantillasCorreos::class,'correo_registro'])->name('correo_registro');
Route:: get('/plantilla_correo_solicitud', [ControllerPlantillasCorreos::class,'correo_solicitud'])->name('correo_solicitud');

