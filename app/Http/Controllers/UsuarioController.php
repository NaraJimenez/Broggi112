<?php

namespace App\Http\Controllers;

use App\Models\Usuaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Tipus_usuaris;
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
            $response = redirect('/correcto');
        } else {
            $request->session()->flash('error', 'El Usuario o Contraseña no son correctos');

            // ALERT ERROR DE USUARIO
            if(session()->has('error')): ?>
            <script>
                alert('<?php echo session()->get("error"); ?>');
            </script>
            <?php endif;

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

    public function mostrarAdminUsers()
    {
        $usuarios = Usuaris::all();

        return view('paginas.adminUsers', compact('usuarios'));
    }

    public function editarUsuario($id, Request $request)
    {
        $usuario = Usuaris::find($id);
        $roles = Tipus_usuaris::all(); // Cambiar Rol a Tipus_usuaris

        if (!$usuario) {
            return redirect()->back()->with('error', 'No se pudo encontrar el usuario.');
        }

        if ($request->isMethod('get')) {
            // Si la petición es GET, mostramos el formulario de edición
            return view('paginas.editarUsers', compact('usuario', 'roles')); // pasar la variable $roles a la vista
        } elseif ($request->isMethod('put')) {
            // Si la petición es PUT, procesamos el envío del formulario

            $request->validate([
                'username' => 'required',
                'nom' => 'required',
                'cognoms' => 'required',
                'tipus_usuaris_id' => 'required|numeric',
            ]);

            $usuario->username = $request->input('username');
            if ($request->input('contrasenya') != null) {
                $usuario->contrasenya = \bcrypt($request->input('contrasenya'));
            }
            $usuario->nom = $request->input('nom');
            $usuario->cognoms = $request->input('cognoms');
            $usuario->tipus_usuaris_id = $request->input('tipus_usuaris_id');
            $usuario->save();

            return redirect()->back()->with('success', 'El usuario se actualizó correctamente.');
        }
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
