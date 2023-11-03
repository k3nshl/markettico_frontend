<?php

use App\Http\Controllers\Administrativo\ControllerDashboard;
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

Route::view('/', 'usuarios_administrativos.index')->name('dashboard.index');

Route::resource('dashboard', ControllerDashboard::class);
Route::resource('usuarios_administrativos', ControllerUsuariosAdministrativos::class);
Route::resource('estados_roles', ControllerRoles::class);
Route::resource('estados_roles', ControllerEstados::class);
