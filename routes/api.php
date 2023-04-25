<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\AgenciesResource;
use App\Http\Controllers\Api\AgenciesController;

use App\Http\Controllers\Api\ComarquesController;
use App\Http\Controllers\Api\IncidentsController;
use App\Http\Controllers\Api\MunicipisController;
use App\Http\Controllers\Api\ProvinciesController;
use App\Http\Controllers\Api\TipusIncidentsController;
use App\Http\Controllers\Api\CartesTrucadesController;
use App\Http\Controllers\Api\ExpedientsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('agencies', AgenciesController::class);
Route::apiResource('cartestrucades', CartesTrucadesController::class);

Route::apiResource('tipusincidents', TipusIncidentsController::class);
Route::apiResource('incidents', IncidentsController::class);

Route::apiResource('provincies', ProvinciesController::class);
Route::apiResource('comarques', ComarquesController::class);
Route::apiResource('municipis', MunicipisController::class);

Route::apiResource('expedients', ExpedientsController::class);

//Buscador
//Route::get('/cartestrucades/search/{telefonoLlamada}', [CartesTrucadesController::class, 'search']);
Route::get('/search/{telefon}/{incident?}', [CartesTrucadesController::class, 'search']);