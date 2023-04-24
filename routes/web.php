    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UsuarioController;
    use App\Http\Controllers\AgenciesController;


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

    //Agencias
    Route::delete('/adminagencias/eliminar/{id}', [AgenciesController::class, 'eliminar'])->name('agencias.eliminar');
    Route::get('/adminagencias', [AgenciesController::class, 'index'])->name('adminagencias');
    Route::get('/adminagencias/crear', [AgenciesController::class, 'crear'])->name('agencias.crear');
    Route::get('/adminagencias/afegir', [AgenciesController::class, 'afegir'])->name('agencias.afegir');



    Route::resource('agencias', AgenciasController::class);


    // Rutas que requieren autenticación de usuario
    Route::middleware(['auth'])->group(function () {
        Route::get('/home', function () {
            $user = Auth::user();
            return view('partials.home', compact('user'));
        });
    });

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
