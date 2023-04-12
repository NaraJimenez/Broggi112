<?php

namespace App\Http\Controllers\Api;

use App\Models\Incidents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\IncidentsResources;

class IncidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidents = Incidents::all();

        return IncidentsResources::collection($incidents);


        //AQUÍ NECESITARIAMOS PASARLE LA ID DEL TIPO DE INCIDENTE COMO PARÁMETRO, Y EN EL CONTROLLER QUE BUSQUE POR TAL EN VEZ DE SER ALEATORIO.
       /* $incidents = Incidents::with("cartesTrucades")->get();

        return IncidentsResources::collection($incidents);*/

        /* $incidents = Incidents::where('classes_incidents_id',$tipusIncident)->get();
        return IncidentResource::collection($incidents); */
        // $incidents = Incidents::all();
        // return IncidentResource::collection($incidents);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incidents  $incidents
     * @return \Illuminate\Http\Response
     */
    public function show(Incidents $incidents)
    {
        $inci = Incidents::where('tipus_incidents_id', '=', $incidents)
        ->get();
        return new IncidentsResources($inci);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidents  $incidents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidents $incidents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidents  $incidents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidents $incidents)
    {
        //
    }
}
