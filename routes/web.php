    <?php
    use App\Http\Controllers\Api\AdminsController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UsuarioController;
    use App\Http\Controllers\AdminController;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\Api\AgenciesController;
    use App\Http\Controllers\AdminAController;
    use App\Http\Controllers\TelefonController;
    use App\Http\Controllers\ExpedientsController;
    use App\Models\Usuaris;
    use App\Http\Controllers\GraficoController;
    use App\Http\Controllers\CartesTrucadesHasAgenciesController;

    // Ruta para mostrar la página de inicio cuando se inicia sesión correctamente
    Route::get('/correcto', function () {
        return view('prova');
    });


    // Rutas para autenticación de usuarios
    Route::get('/login', [UsuarioController::class, 'MostrarLogin'])->name('login');
    Route::post('/login', [UsuarioController::class, 'login']);
    Route::get('/logout', [UsuarioController::class, 'logout']);

    //Rutas para administracion de usuarios
    Route::get('/adminuser', [UsuarioController::class, 'mostrarAdminUsers'])->name('adminUser');
    Route::delete('/usuarios/eliminar/{id}', [UsuarioController::class, 'eliminarUsuario'])->name('usuarios.eliminar');
    Route::put('/usuarios/actualizar/{id}', [UsuarioController::class, 'actualizarUsuario'])->name('usuarios.actualizar');
    Route::get('/usuarios/agregar', [UsuarioController::class, 'mostrarafegirUsuario'])->name('usuarios.agregar.mostrar');
    Route::post('/usuarios/agregar', [UsuarioController::class, 'agregarUsuario'])->name('usuarios.agregar');
    Route::get('/usuarios/editar/{id}', [UsuarioController::class, 'mostraractualizarUsuario'])->name('usuarios.editar');
    Route::get('/usuario/editar/{id}', [UsuarioController::class, 'mostrarcontrasenarUsuario'])->name('usuario.editar');
    //Agencias
    Route::delete('/adminagencias/eliminar/{id}', [AdminAController::class, 'eliminar'])->name('agencias.eliminar');
    Route::get('/adminagencias', [AdminAController::class, 'index'])->name('adminagencias');
    Route::get('/adminagencias/crear', [AdminAController::class, 'crear'])->name('agencias.crear');
    Route::get('/adminagencias/afegir', [AdminAController::class, 'afegir'])->name('agencias.afegir');
    Route::resource('agencias', AdminAController::class);

    // Rutas que requieren autenticación de usuario
    // Route::middleware(['auth'])->group(function () {
    //     Route::get('/home', function () {
    //         $user = Auth::user();
    //         return view('NavBar.home', compact('user'));
    //     });
    // });



Route::get('/', function () {
    return view('index');
})->name('index');


//Ruta Index (Telefono)
// Route::view(uri: '/home', view:'layout.home')->name(name:'home');
Route::get('/home', [TelefonController::class, 'index']);




//Ruta Carta llamada - Localización
Route::get('/mapbox-json',  [App\Http\Controllers\Api\AgenciesController::class, 'mapbox']);

Route::get('/mapbox', function () {
    return view('Mapbox.mapbox');
})->name('index');



//Ruta Carta llamada - Agencias


//Ruta Graficos


//Ruta Video


//Ruta Menu Admin
Route::get('/admin', [AdminsController::class, 'usuarios']);
Route::get('/admin', [AdminsController::class, 'agencias']);
Route::get('/admin', [AdminsController::class, 'expedientes']);

//Ruta Admin. expedientes
Route::get('/expedientes', [ExpedientsController::class, 'index']);
Route::post('/expedientes/update', [ExpedientsController::class, 'update'])->name('expedientes.update');


// Rutas para la vista de detalle de una carta trucada específica
Route::get('/cartes_trucades/{id}', [CartesTrucadesHasAgenciesController::class, 'show'])->name('cartes_trucades.show');

// Rutas para la vista de edición de una carta trucada específica
Route::get('/cartes_trucades/{id}/edit', [CartesTrucadesHasAgenciesController::class, 'edit'])->name('cartes_trucades.edit');
Route::put('/cartes_trucades/{id}', [CartesTrucadesHasAgenciesController::class, 'update'])->name('cartes_trucades.update');

// Rutas para eliminar una carta trucada específica
Route::delete('/cartes_trucades/{id}', [CartesTrucadesHasAgenciesController::class, 'destroy'])->name('cartes_trucades.destroy');
//Ruta Admin. Agencias


//Prueba de expediente
Route::get('/cartaExpediente', function () {
    return view('paginas/cartaExpediente');
})->name('cartaExpediente');
Route::get('/carta2Vue', function () {
    return view('paginas/carta2Vue');
})->name('carta2Vue');

//Fusion componentes
/*Route::get('/carta', function () {
    return view('paginas/carta');
})->name('carta');*/

//carta cogiendoel telefono
/*Route::get('/carta/{randomPhone}', function ($phone) {
    return view('paginas/carta')->with('phone', $phone);
})->name('carta');*/

Route::get('/carta/{randomPhone}', [TelefonController::class, 'carta'])->name('carta');

//Prueba de graficos
// Route::get('/graficos', function () {
//     return view('paginas/graficos');
// })->name('graficos');

Route::get('graficos', [GraficoController::class, 'incidentes']);
