    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UsuarioController;
    use App\Http\Controllers\AdminController;

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
