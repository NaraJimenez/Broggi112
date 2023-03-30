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


//Ruta Carta llamada - Localización
Route::get('/carta2', function () {
    return view('paginas/carta2');
})->name('carta2');

//Ruta Carta llamada - Incidencia
Route::get('/carta1Vue', function () {
    return view('paginas/carta1Vue');
})->name('carta1Vue');

Route::get('/carta2Vue', function () {
    return view('paginas/carta2Vue');
})->name('carta2Vue');

//Prueva de expediente
Route::get('/cartaExpediente', function () {
    return view('paginas/cartaExpediente');
})->name('cartaExpediente');
