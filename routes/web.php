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


//SOLO ESTARÁ AQUI LA RUTA DEL LOGIN/INDEX


//ESTAS SON MIS RUTAS PARA PORBAR
//Ruta Carta llamada - Incidencia
//Route::resource('/carta1', '');
Route::get('/carta1', function () {
    return view('paginas/carta1');
})->name('carta1');

//Ruta Carta llamada - Localización
Route::get('/carta2', function () {
    return view('paginas/carta2');
})->name('carta2');



