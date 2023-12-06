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
use Illuminate\Support\Facades\Auth;
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
// Rutas para la autenticacion
Route::get('/login', [ControllerLogin::class, 'index'])->name('login');
Route::post('/validarLogin', [ControllerLogin::class, 'login'])->name('validarLogin');

// Middleware (Rutas compartidas de superadmin, administrador y moderador)
Route::middleware(['auth'])->group(function () {
    Route::resource('/perfil', ControllerPerfilUsuario::class);
    Route::get('/perfil/{id}', [ControllerPerfilUsuario::class, 'show'])->name('perfil.show');
    Route::post('/contrasena_actual', [ControllerUsuariosAdministrativos::class, 'validar_password'])->name('contrasena.actual');
    Route::post('/actualizar_password', [ControllerUsuariosAdministrativos::class, 'actualizar_password'])->name('actualizar.password');
    Route::post('/verificar_codigo', [ControllerLogin::class, 'verificarCodigo'])->name('verificar_codigo');
    Route::get('/cerrar-sesion',  [ControllerLogin::class, 'logout'])->name('usuarios.logout');
});

// Middleware (Rutas exclusivas de superadmin)
Route::middleware(['auth', 'checkSuperadmin'])->group(function () {
    Route::get('/superadmin', [ControllerUsuariosAdministrativos::class, 'index'])->name('homeSuperadmin');
    Route::resource('estados', ControllerEstados::class);
    Route::resource('roles', ControllerRoles::class);
    Route::resource('historiales', ControllerHistoriales::class);

    Route::middleware(['auth', 'checkSuperadminAdministrador'])->group(function () {
        Route::resource('/usuariosAdministrativos', ControllerUsuariosAdministrativos::class);
        Route::post('/bloquear_usuario', [ControllerUsuariosAdministrativos::class, 'bloquear_usuario'])->name('bloquear_usuario');
        Route::post('/desbloquear_usuario', [ControllerUsuariosAdministrativos::class, 'desbloquearUsuario'])->name('desbloquearUsuario');
        Route::get('/solicitudesVendedoresIndividuales', [ControllerSolicitudesVendedores::class, 'vendedoresIndividuales'])->name('vendedoresIndividuales');
        Route::get('/solicitudesVendedoresEmpresariales', [ControllerSolicitudesVendedores::class, 'vendedoresEmpresariales'])->name('vendedoresEmpresariales');
        Route::resource('estadisticas', ControllerEstadisticas::class);
        Route::get('notificaciones', [ControllerAnuncios::class, 'index'])->name('notificaciones');
        Route::resource('anuncios', ControllerAnuncios::class);
        Route::resource('alertas', ControllerAlertas::class);
    });

    Route::middleware(['auth', 'checkSuperadminModerador'])->group(function () {
        Route::resource('paginasInformacion', ControllerPaginasInformacion::class);
        Route::resource('articulos', ControllerArticulos::class);
        Route::resource('categorias', ControllerCategorias::class);
        Route::resource('subcategorias', ControllerSubcategorias::class);
        Route::resource('planes', ControllerPlanes::class);
        Route::get('/solicitudesProductos', [ControllerSolicitudesProductos::class, 'solicitudesProductos'])->name('solicitudesProductos');
        Route::get('/solicitudesServicios', [ControllerSolicitudesProductos::class, 'solicitudesServicios'])->name('solicitudesServicios');
        Route::resource('moderarContenido', ControllerModerarContenido::class);
    });
});

// Middleware (Rutas exclusivas de administrador)
Route::middleware(['auth', 'checkAdministrador'])->group(function () {
    Route::get('/administrador', [ControllerUsuariosAdministrativos::class, 'index'])->name('homeAdministrador');
});

// Middleware (Rutas exclusivas de moderador)
Route::middleware(['auth', 'checkModerador'])->group(function () {
    Route::get('/moderador', [ControllerPaginasInformacion::class, 'index'])->name('homeModerador');
});

// Middleware (Rutas exclusivas de superadmin y administrador)
Route::middleware(['auth', 'checkSuperadminAdministrador'])->group(function () {
    Route::get('/administrador', [ControllerUsuariosAdministrativos::class, 'index'])->name('homeAdministrador');
    Route::resource('/usuariosAdministrativos', ControllerUsuariosAdministrativos::class);
    Route::post('/bloquear_usuario', [ControllerUsuariosAdministrativos::class, 'bloquear_usuario'])->name('bloquear_usuario');
    Route::post('/desbloquear_usuario', [ControllerUsuariosAdministrativos::class, 'desbloquearUsuario'])->name('desbloquearUsuario');
    Route::get('/solicitudesVendedoresIndividuales', [ControllerSolicitudesVendedores::class, 'vendedoresIndividuales'])->name('vendedoresIndividuales');
    Route::get('/solicitudesVendedoresEmpresariales', [ControllerSolicitudesVendedores::class, 'vendedoresEmpresariales'])->name('vendedoresEmpresariales');
    Route::resource('estadisticas', ControllerEstadisticas::class);
    Route::get('notificaciones', [ControllerAnuncios::class, 'index'])->name('notificaciones');
    Route::resource('anuncios', ControllerAnuncios::class);
    Route::resource('alertas', ControllerAlertas::class);
});

// Middleware (Rutas exclusivas de superadmin y moderador)
Route::middleware(['auth', 'checkSuperadminModerador'])->group(function () {
    Route::get('/moderador', [ControllerPaginasInformacion::class, 'index'])->name('homeModerador');
    Route::resource('paginasInformacion', ControllerPaginasInformacion::class);
    Route::resource('articulos', ControllerArticulos::class);
    Route::resource('categorias', ControllerCategorias::class);
    Route::resource('subcategorias', ControllerSubcategorias::class);
    Route::resource('planes', ControllerPlanes::class);
    Route::get('/solicitudesProductos', [ControllerSolicitudesProductos::class, 'solicitudesProductos'])->name('solicitudesProductos');
    Route::get('/solicitudesServicios', [ControllerSolicitudesProductos::class, 'solicitudesServicios'])->name('solicitudesServicios');
    Route::resource('moderarContenido', ControllerModerarContenido::class);
});

//Rutas de envio de correos
Route::post('/emails-send-user', [ControllerPlantillasCorreos::class, 'email_user'])->name('send.email.user');
Route::post('/emails-send-seller', [ControllerPlantillasCorreos::class, 'email_seller'])->name('send.email.seller');

//Rutas para plantillas de los correos
Route::get('/plantillaCorreoAutenticacion', [ControllerPlantillasCorreos::class, 'correoAutenticacion'])->name('correoAutenticacion');
Route::get('/plantillaCorreoCambiosPoliticas', [ControllerPlantillasCorreos::class, 'correoCambiosPoliticas'])->name('correoCambiosPoliticas');
Route::get('/plantillaCorreoExpiracionSuspension', [ControllerPlantillasCorreos::class, 'CorreoExpiracionSuspension'])->name('correoExpiracionSuspension');
Route::get('/plantillaCorreoRegistro', [ControllerPlantillasCorreos::class, 'CorreoRegistro'])->name('correoRegistro');
Route::get('/plantillaCorreoSolicitud', [ControllerPlantillasCorreos::class, 'CorreoSolicitud'])->name('correoSolicitud');

// Rutas para recuperar contraseña
Route::view('/recuperarContrasena', 'login.recuperacionContrasena');
Route::view('/correoContrasena', 'login.correoContrasena');
