<?php

namespace App\Http\Controllers\Api;

use App\Models\Agencies;
use App\Models\Usuaris;
use App\Clases\Utilitat;
use App\Models\Expedients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\ExpedientsResources;

class AdminsController extends Controller{

// public function usuarios(){
//     $usuaris = usuaris::all()
//     ->select('usuaris.nom', DB::raw('count(*) as numeros'))
//     ->groupBy('usuaris.nom')
//     ->get();

//     return $usuaris;
// }
public function usuarios(){
    $num_usuaris = usuaris::count();
    return view('admins', ['num_usuaris' => $num_usuaris]);
}
public function agencias(){
    $num_agencies = agencies::count();
    return view('admins2', ['num_agencies' => $num_agencies]);
}

public function expedientes(){
    $num_expedients = expedients::count();
    return view('admins3', ['num_expedients' => $num_expedients]);
}
}
?>
