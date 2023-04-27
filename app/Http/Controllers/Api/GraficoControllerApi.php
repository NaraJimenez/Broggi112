<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\Expedients;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\ExpedientsResources;

class GraficoController extends Controller{

public function datos(){
    $incidentes = cartes_trucades::join('incidents', 'incidents_id', '=', 'cartes_trucades.incidents.id')
    ->join('tipus_incidents', 'tipus_incidents.id', '=', 'incidents.tipus_incidents_id')
    ->select('tipus_incidents.nom', DB::raw('count(*) as numeros'))
    ->groupBy('tipus_incidents.nom')
    ->get();

    return $incidentes;
}
}
?>
