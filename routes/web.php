<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelefonController;
use App\Http\Controllers\ExpedientsController;


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
    return view('welcome');
});

//Ruta login (Inicio)


//Ruta Index (Telefono)
// Route::view(uri: '/home', view:'layout.home')->name(name:'home');
Route::get('/home', 'App\Http\Controllers\TelefonController@index');





//Ruta Carta llamada - Incidencia


//Ruta Carta llamada - Localización
Route::get('/mapbox', function () {
    return view('Mapbox.mapbox');
});

//Ruta Carta llamada - Agencias


//Ruta Graficos


//Ruta Video


//Ruta Menu Admin


//Ruta Admin. usuarios (Tabla)


//Ruta Admin. expedientes
Route::get('/expedientes', [ExpedientsController::class, 'index']);
Route::post('/expedientes/update', 'ExpedientsController@update')->name('expedientes.update');


//Ruta Admin. Agencias



