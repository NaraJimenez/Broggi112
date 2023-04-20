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
        // Usuario que usaremos de prueba para probar si funciona
        // $usuario = new Usuario();

        // $usuario->username = 'prueba';
        // $usuario->contrasenya = \bcrypt('prueba');
        // $usuario->nom = 'Oriol';
        // $usuario->cognoms = 'García';
        // $usuario->tipus_usuaris_id = 1;

        // $usuario->save();

        # code...
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

