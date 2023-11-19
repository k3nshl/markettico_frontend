<?php

use App\Http\Controllers\Administrativo\ControllerAlertas;
use App\Http\Controllers\Administrativo\ControllerAnuncios;
use App\Http\Controllers\Administrativo\ControllerArticulos;
use App\Http\Controllers\Administrativo\ControllerEstados;
use App\Http\Controllers\Administrativo\ControllerRoles;
use App\Http\Controllers\Administrativo\ControllerUsuariosAdministrativos;
use App\Http\Controllers\Administrativo\ControllerCategorias;
use App\Http\Controllers\Administrativo\ControllerHistoriales;
use App\Http\Controllers\Administrativo\ControllerModerarContenido;
use App\Http\Controllers\Administrativo\ControllerPlantillasCorreos;
use App\Http\Controllers\Administrativo\ControllerLogin;
use App\Http\Controllers\Administrativo\ControllerEstadisticas;
use App\Http\Controllers\Administrativo\ControllerPaginasInformacion;
use App\Http\Controllers\Administrativo\ControllerPerfilUsuario;
use App\Http\Controllers\Administrativo\ControllerPlanes;
use App\Http\Controllers\Administrativo\ControllerSolicitudesProductos;
use App\Http\Controllers\Administrativo\ControllerSolicitudesVendedores;
use App\Http\Controllers\Administrativo\ControllerSubcategorias;
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

// Ruta para la pagina de inicio
// Route::view('/', 'usuariosAdministrativos.index');

Route::get('/',[ControllerUsuariosAdministrativos::class, 'index']);
// Rutas para usuarios administrativos
Route::resource('/usuariosAdministrativos', ControllerUsuariosAdministrativos::class);

//Rutas estados y roles
Route::get('estadosRoles', [ControllerEstados::class, 'index'])->name('estadosRoles');
Route::resource('estados', ControllerEstados::class);
Route::resource('roles', ControllerRoles::class);

// Rutas para paginas de informacion y articulos
Route::resource('paginasInformacion', ControllerPaginasInformacion::class);
Route::resource('articulos', ControllerArticulos::class);

// Rutas para categorias y subcategorias
Route::resource('categorias', ControllerCategorias::class);
Route::resource('subcategorias', ControllerSubcategorias::class);

// Rutas para solicitudes
Route::resource('solicitudes-vendedores', ControllerSolicitudesVendedores::class);
Route::resource('solicitudes-productos', ControllerSolicitudesProductos::class);

// Rutas para planes
Route::resource('planes', ControllerPlanes::class);

// Rutas para historiales
Route::resource('historiales', ControllerHistoriales::class);

// Rutas para estadisticas
Route::resource('estadisticas', ControllerEstadisticas::class);

//Rutas para login y verificacion
Route::get('/login', [ControllerLogin::class, 'index'])->name('login');
Route::post('/validarLogin', [ControllerLogin::class, 'validarLogin'])->name('validarLogin');

// Rutas para moderar contenido
Route::resource('moderarContenido', ControllerModerarContenido::class);

//Rutas para plantillas de los correos
Route::get('/plantillaCorreoAutenticacion', [ControllerPlantillasCorreos::class, 'correoAutenticacion'])->name('correoAutenticacion');
Route::get('/plantillaCorreoCambiosPoliticas', [ControllerPlantillasCorreos::class, 'correoCambiosPoliticas'])->name('correoCambiosPoliticas');
Route::get('/plantillaCorreoExpiracionSuspension', [ControllerPlantillasCorreos::class, 'CorreoExpiracionSuspension'])->name('correoExpiracionSuspension');
Route::get('/plantillaCorreoRegistro', [ControllerPlantillasCorreos::class, 'CorreoRegistro'])->name('correoRegistro');
Route::get('/plantillaCorreoSolicitud', [ControllerPlantillasCorreos::class, 'CorreoSolicitud'])->name('correoSolicitud');

// Rutas para el perfil del usuario
Route::resource('/perfil', ControllerPerfilUsuario::class);
Route::get('/perfil/{id}', [ControllerPerfilUsuario::class, 'show'])->name('perfil.show');

// Rutas para las notificaciones (anuncios y alertas)
Route::get('notificaciones', [ControllerAnuncios::class, 'index'])->name('notificaciones');
Route::resource('anuncios', ControllerAnuncios::class);
Route::resource('alertas', ControllerAlertas::class);
Route::get('/pruebastore', [ControllerUsuariosAdministrativos::class, 'store']);
