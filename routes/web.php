<?php

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

use App\User;

/*Route::get('/', function () {
    return view('layouts.layouts');
});*/

Route::get('/', function () {
    return view('front');
});
Route::get('/verificar', function () {
    if (auth()->user()->rol == "1") {
            return redirect('/Alumnos/' . auth()->user()->id);
        }else
    {
            return redirect('/Administradores');
    }
});

// Route::get('/Alumnos', function () {
//     return view('Usuarios.alumno.inicio');
// });

Route::get('/Alumnos/Modulos', function () {
    return view('Usuarios.alumno.modulos');
});

Route::get('/Alumnos/Modulos/Hablado', function () {
    return view('Usuarios.alumno.Modulos.hablado');
});

Route::get('/Alumnos/Modulos/Hablado/{id}', function ($id) {
    return view('Usuarios.alumno.Modulos.ActHablado');
});

Route::get('/Alumnos/Modulos/Escucha', function () {
    return view('Usuarios.alumno.Modulos.escucha');
});

Route::get('/Alumnos/Modulos/Escucha/{id}', function ($id) {
    return view('Usuarios.alumno.Modulos.ActEscucha');
});

/*Route::get('/Alumnos/Modulos/Gramatica', function () {
    return view('Usuarios.alumno.Modulos.gramatica');
});*/

/*Route::get('/Alumnos/Modulos/Gramatica/{id}', function ($id) {
    return view('Usuarios.alumno.Modulos.ActGramatica');
});*/

Route::get('/Alumnos/Modulos/Lectura', function () {
    return view('Usuarios.alumno.Modulos.lectura');
});

Route::get('/Alumnos/Modulos/Lectura/{id}', function ($id) {
    return view('Usuarios.alumno.Modulos.ActLectura');
});

Route::get('/Alumnos/Avance', function () {
    return view('Usuarios.alumno.avance');
});

Route::get('/Alumnos/{id}', function ($id){
    $user = User::find($id);
    return view('Usuarios.alumno.perfil', compact('user'));
});

Route::get('/Prueba', function () {
    return view('Usuarios.alumno.prueba');
});
//////////////////////////////////////////
Route::get('/home', 'HomeController@index');

Route::get('/Administradores', function () {
    return view('Usuarios.administrador.inicio');
});

/*Route::get('/Administrador/Temas', function () {
    return view('Usuarios.administrador.temas');
});*/

Route::post('/Administrador/Ejercicios/Agregar', 'administrador@AgregarEjercicio');

Route::get('/Alumnos/Modulos/Gramatica/{id}', 'administrador@ActGramatica');
Route::get('/Alumnos/Modulos/Gramatica', 'administrador@ModuloTemaGramatica');
Route::get('/Alumnos/Modulos/Hablado', 'administrador@ModuloTemaHablado');
Route::get('/Alumnos/Modulos/Lectura', 'administrador@ModuloTemaLectura');
Route::get('/Alumnos/Modulos/Escucha', 'administrador@ModuloTemaEscucha');
Route::get('/Administrador/Temas', 'administrador@temas');
Route::post('/Administrador/Temas', 'administrador@temas');
Route::post('/Administrador/Temas/Borrar/{id}', 'administrador@borrar');
Route::post('/Administrador/Ejercicio/Borrar/{id}', 'administrador@borrarEjercicio');

Route::get('/Alumnos/Modulos/GramaticaEjercicio/{id}', 'administrador@EjercicioInt');


Route::get('/Administrador/Ejercicios', 'administrador@Ejercicios');

Route::get('/Administrador/Usuarios', function () {
    return view('Usuarios.administrador.usuarios');
});

///////////////////////////////////////

Auth::routes();

Route::post('/Administrador/Temas/Guardar', 'HomeController@GuardarTema');

Route::get('/home', 'HomeController@index')->name('home');
