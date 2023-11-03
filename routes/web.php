<?php

use App\Http\Controllers\Administrativo\ControllerAdmin;
use App\Http\Controllers\Administrativo\ControllerEstados;
use App\Http\Controllers\Administrativo\ControllerRoles;
use App\Http\Controllers\Administrativo\ControllerUsuariosAdministrativos;
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

Route::view('/', 'administradores.dashboard.index')->name('dashboard.index');

Route::resource('administradores.admin', ControllerAdmin::class)->names('administradores.admin');
Route::resource('administradores.usuarios_administrativos', ControllerUsuariosAdministrativos::class)->names('administradores.usuarios_administrativos');
Route::resource('administradores.estados_roles', ControllerRoles::class)->names('administradores.roles');
Route::resource('administradores.estados_roles', ControllerEstados::class)->names('administradores.estados');

//Route::get('administradores.usuarios_administrativos.index', [ControllerUsuariosAdministrativos::class, 'index']);