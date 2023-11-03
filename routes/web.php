<?php

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

Route::get('administradores.usuarios_administrativos.index', [ControllerUsuariosAdministrativos::class, 'index']);