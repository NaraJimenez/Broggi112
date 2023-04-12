
    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UsuarioController;
    use App\Http\Controllers\AdminController;
    use Illuminate\Support\Facades\Auth;
    // Ruta para mostrar la página de inicio cuando se inicia sesión correctamente
    Route::get('/correcto', function () {
        return view('prova');
    });

    // Rutas para autenticación de usuarios
    Route::get('/login', [UsuarioController::class, 'MostrarLogin'])->name('login');
    Route::post('/login', [UsuarioController::class, 'login']);
    Route::get('/logout', [UsuarioController::class, 'logout']);

    Route::get('/adminuser', [UsuarioController::class, 'mostrarAdminUsers'])->name('adminUser');
    Route::delete('/usuarios/eliminar/{id}', [UsuarioController::class, 'eliminarUsuario'])->name('usuarios.eliminar');
    Route::put('/usuarios/actualizar/{id}', [UsuarioController::class, 'actualizarUsuario'])->name('usuarios.actualizar');
    Route::post('/usuarios/agregar', [UsuarioController::class, 'agregarUsuario'])->name('usuarios.agregar');


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

//Prueba de expediente
Route::get('/cartaExpediente', function () {
    return view('paginas/cartaExpediente');
})->name('cartaExpediente');
