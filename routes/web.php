<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/Agregar_usuario', function () {
    return view('app.docente.agregarUsuario');
});

Route::get('/Email', function () {
    return view('app.alumno.email');
});
Route::post('/Antes_de_empezar', 'AccesoController@ingresar')->name('acceso.ingresar');
