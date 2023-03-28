<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;

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

Route::get('/correcto', function () {
    return view('prova');
});
Route::get('/login', [UsuarioController::class, 'MostrarLogin'])->name('login');
Route::post('/login', [UsuarioController::class, 'login']);
Route::get('/logout', [UsuarioController::class, 'logout']);

Route::middleware(['auth'])->group(function () { #IMPORTANTE, para mantener inicio de sesion o pedir iniciar en cualquier pg
    Route::get('/home', function () {
        $user = Auth::user();

        return view('partials.home', compact('user'));
    });
});

Route::get('/adminuser', [AdminController::class, 'showuser']);


