<?php

namespace App\Http\Controllers;

use App\Models\Usuaris;
use App\Models\Tipus_usuaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    public function MostrarLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $contrasenya = $request->input('password');

        $user = Usuaris::where('username', $username)->first();

        if ($user != null && Hash::check($contrasenya, $user->contrasenya)) {
            Auth::login($user);
            $response = redirect('/home');
        } else {
            $request->session()->flash('error', 'El Usuario o Contraseña no son correctos');
            $response = redirect('/login')->withInput();
        }
        return $response;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function mostrarAdminUsers()
    {
        $usuarios = Usuaris::all();
        $roles = Tipus_usuaris::all(); // Cambiar Rol a Tipus_usuaris

        return view('paginas.adminUsuarios.adminUsers', compact('usuarios', 'roles'));
    }
    public function mostraractualizarUsuario(Request $request)
    {
        $roles = Tipus_usuaris::all(); // Cambiar Rol a Tipus_usuaris
        $usuario = Usuaris::find($request->id);
        $editar = 1;
        return view('paginas.adminUsuarios.gestionarUsers', compact('usuario', 'editar', 'roles'));
    }
    public function mostrarafegirUsuario(Request $request)
    {
        $roles = Tipus_usuaris::all(); // Cambiar Rol a Tipus_usuaris
        $usuario = Usuaris::all();
        $editar = 0;
        return view('paginas.adminUsuarios.gestionarUsers', compact('usuario', 'editar', 'roles'));
    }
    public function actualizarUsuario(Request $request, $id)
    {
        $usuario = Usuaris::find($id);

        if ($usuario) {
            $usuario->nom = $request->input('nom');
            $usuario->cognoms = $request->input('cognoms');
            $usuario->username = $request->input('username');
            $usuario->tipus_usuaris_id = $request->input('tipus_usuaris_id');
            $usuario->save();
            return redirect()->route('adminUser')->with('success', 'El usuario ha sido actualizado.');
        } else {
            return redirect()->back()->with('error', 'El usuario no se pudo encontrar.');
        }
    }
    public function agregarUsuario(Request $request)
    {
        $usuario = new Usuaris;

        $usuario->nom = $request->input('nom');
        $usuario->cognoms = $request->input('cognoms');
        $usuario->username = $request->input('username');
        $usuario->tipus_usuaris_id = $request->input('tipus_usuaris_id');
        $usuario->contrasenya = Hash::make($request->input('password'));

        $usuario->save();

        return redirect()->route('adminUser')->with('success', 'El usuario ha sido añadido.');
    }

    public function eliminarUsuario($id)
    {
        $usuario = Usuaris::find($id);

        if ($usuario) {
            $usuario->delete();
            return redirect()->back()->with('success', 'El usuario ha sido eliminado.');
        } else {
            return redirect()->back()->with('error', 'El usuario no se pudo encontrar.');
        }
    }
}
