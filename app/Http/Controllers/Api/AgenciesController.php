<?php

namespace App\Http\Controllers\Api;

use App\Models\Agencies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AgenciesResources;

class AgenciesController extends Controller
{
    
    public function index()
    {
        //Buscamos las agencias por el municipio
        $agencies = Agencies::with('municipi')->get();

        return AgenciesResources::collection($agencies);

        //SACAR DE LA BBDD -- El nombre de las agencias guardadas
        
    }

    public function mapbox(){
        $agencias = Agencies::select('nom', 'carrer', 'codi_postal')->get();
        dump($agencias);
        return response()->json($agencias);

    }

    


    

  
    public function store(Request $request)
    {
        //
    }

   
    public function show(Agencies $agencies)
    {
        //
    }

   
    public function update(Request $request, Agencies $agencies)
    {
        //
    }

    public function destroy(Agencies $agencies)
    {
        //
    }
}
