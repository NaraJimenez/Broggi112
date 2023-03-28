<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function MostrarLogin()
    {
// Generamos 10 usuarios de prueba
// for ($i = 2; $i <= 10; $i++) {
//     $usuario = new Usuario();
//     $usuario->username = 'prueba'.$i;
//     $usuario->contrasenya = \bcrypt('prueba'.$i);
//     $usuario->nom = 'Nombre'.$i;
//     $usuario->cognoms = 'Apellido'.$i;
//     $usuario->tipus_usuaris_id = 1;
//     $usuario->save();
// }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $contrasenya = $request->input('password');

        $user = Usuario::where('username', $username)->first();

        if ($user != null && Hash::check($contrasenya, $user->contrasenya)) {
            Auth::login($user);
            $response = redirect('/correcto');
        } else {
            $request->session()->flash('error', 'El Usuario o Contraseña no son correctos');
            $response = redirect('/login')->withInput();
            dump($request->session()->get('error'));

        }
        return $response;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

