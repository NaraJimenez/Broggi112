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
    return view('index');
})->name('index');


//Ruta login (Inicio)


//Ruta Telefono
Route::resource('/telf', '');

//Ruta Carta llamada - Incidencia
Route::resource('/carta1', '');

//Ruta Carta llamada - Localización


//Ruta Carta llamada - Agencias


//Ruta Graficos
Route::resource('/graficos', '');

//Ruta Video


//Ruta Menu Admin
Route::resource('/adminMenu', '');

//Ruta Admin. usuarios (Tabla)


//Ruta Admin. expedientes


//Ruta Admin. Agencias
Route::resource('/adminAgencias', '');


