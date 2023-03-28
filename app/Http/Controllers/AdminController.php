<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showuser(){

    $usuarios = Usuario::all();
    return view('paginas.adminUsers', compact('usuarios'));

    }
    public function editUsers(){
        //
    }
    public function deleteUsers(){
        //
    }
}
