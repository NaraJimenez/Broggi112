<?php

namespace App\Http\Controllers;

use App\Models\Usuaris;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showuser()
    {
        $usuarios = Usuaris::all();

        return view('paginas.adminUsers', compact('usuarios'));
    }
}
