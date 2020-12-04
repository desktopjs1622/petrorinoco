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

// Route::get('/registro-de-personal', function () {
//     return view('registro');
// });

// Route::get('form', function () {
//     return view('form');
// });

// Route::get('base', function () {
//     return view('layouts/base');
// });



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/listado-de-personal', function () {
//     return view('listado-de-personal');
// });

//ruta provisional
Route::get('/registroLaboral/actualizar', function(){
    return view('actualizar');
});

Auth::routes();

//Formulario de Registro y actualizacion de datos del Personal laboral universitario
Route::get('/registro-de-personal', 'HomeController@registroLaboral')->name('registro');
Route::get('municipios/{id}', 'HomeController@getMunicipios')->name('municipio');
Route::get('parroquias/{id}', 'HomeController@getParroquias')->name('parroquias');

//Historia Laboral
Route::post('/registro-de-personal/nuevo-registro', 'HomeController@registroDePersonal')->name('nuevo');
Route::get('/home', 'HomeController@listarRegistro')->name('listado');
Route::post('/registro-de-personal/actualizar-registro', 'HomeController@actualizarRegistro')->name('actualizar');//en desarrollo
Route::get('/home/consultar/{id}','HomeController@consultarRegistro')->name('consultar');// ruta del modal

