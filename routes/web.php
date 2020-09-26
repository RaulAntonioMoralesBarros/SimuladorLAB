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

Route::get('/Agregar_docente', function () {
    return view('app.docente.agregarDocente');
});

Route::get('/Email', function () {
    return view('app.alumno.email');
});
Route::post('/Antes_de_empezar', 'AccesoController@ingresar')->name('acceso.ingresar');

Route::get('/Agregar_alumno', function () {
    return view('app.agregar_alumno.agregarAlumno');
});

Route::get('/Participacion_docente', function() {
    return view('app.participacion_docente.participacionDocente');
});

Route::get('/Chat', function () {
    return view('app.chat_alumnos.chatAlumnos');
});