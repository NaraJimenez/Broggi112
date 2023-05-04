<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\Cartes_trucades;
use App\Models\Expedients;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\ExpedientsResources;

class GraficoController extends Controller{

public function datos(){
    $incidentes = Cartes_trucades::join('incidents', 'incidents_id', '=', 'cartes_trucades.incidents.id')
    ->join('tipus_incidents', 'tipus_incidents.id', '=', 'incidents.tipus_incidents_id')
    ->select('tipus_incidents.nom', DB::raw('count(*) as numeros'))
    ->groupBy('tipus_incidents.nom')
    ->get();

    return $incidentes;
}
// Incidentes totales
public function datostotal(){
    $incidentestotales = Cartes_trucades::join('cartes_trucades', 'cartes_trucades_id', '=', 'cartes_trucades.incidents.id')
    ->join('tipus_incidents', 'tipus_incidents.id', '=', 'incidents.tipus_incidents_id')
    ->select('tipus_incidents.nom', DB::raw('count(*) as numeros'))
    ->groupBy('tipus_incidents.nom')
    ->get();

    return $incidentestotales;
}

// Que sea inci de Barcelona
public function datosBCN(){
    $incidentesBCN = Cartes_trucades::join('incidents', 'incidents_id', '=', 'cartes_trucades.incidents.id')
        ->join('tipus_incidents', 'tipus_incidents.id', '=', 'incidents.tipus_incidents_id')
        ->where('cartes_trucades.provincies_id', '=', '1') //1 es el ID de Barcelona en la tabla provincies
        ->select('tipus_incidents.nom', DB::raw('count(*) as numeros'))
        ->groupBy('tipus_incidents.nom')
        ->get();

    return $incidentesBCN;
}
// Que sea inci de otras prov menos de Barcelona
public function datosProv(){
    $incidentesProv = Cartes_trucades::join('incidents', 'incidents_id', '=', 'cartes_trucades.incidents.id')
        ->join('tipus_incidents', 'tipus_incidents.id', '=', 'incidents.tipus_incidents_id')
        ->where('cartes_trucades.provincies_id', '!=', '1') //1 es el ID de Barcelona en la tabla provincies
        ->select('tipus_incidents.nom', DB::raw('count(*) as numeros'))
        ->groupBy('tipus_incidents.nom')
        ->get();

    return $incidentesProv;
}


}
?>
