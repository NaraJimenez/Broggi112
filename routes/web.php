

    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UsuarioController;
    use App\Http\Controllers\AdminController;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\TelefonController;
    use App\Http\Controllers\ExpedientsController;
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


//Ruta Index (Telefono)
// Route::view(uri: '/home', view:'layout.home')->name(name:'home');
Route::get('/home', 'App\Http\Controllers\TelefonController@index');



//Ruta Carta llamada - Localización
Route::get('/mapbox', function () {
    return view('Mapbox.mapbox');
});

//Ruta Carta llamada - Agencias


//Ruta Graficos


//Ruta Video


//Ruta Menu Admin


//Ruta Admin. expedientes
Route::get('/expedientes', [ExpedientsController::class, 'index']);
Route::post('/expedientes/update', [ExpedientsController::class, 'update']) ->name('expedientes.update');


//Ruta Admin. Agencias


//Prueba de expediente
Route::get('/cartaExpediente', function () {
    return view('paginas/cartaExpediente');
})->name('cartaExpediente');

//Fusion componentes
Route::get('/carta', function () {
    return view('paginas/carta');
})->name('carta');
