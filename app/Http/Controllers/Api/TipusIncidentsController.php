<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Tipus_incidents;
use App\Http\Controllers\Controller;
use App\Http\Resources\TipusIncidentsResources;

class TipusIncidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TipusIncidents = Tipus_incidents::all();

        return TipusIncidentsResources::collection($TipusIncidents);


/*
        $tipusIncident = TipusIncident::with("incidents.cartestrucades")->get();
        return TipusIncidentResource::collection($tipusIncident);*/
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
     * @param  \App\Models\Tipus_incidents  $tipus_incidents
     * @return \Illuminate\Http\Response
     */
    public function show(Tipus_incidents $tipus_incidents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipus_incidents  $tipus_incidents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipus_incidents $tipus_incidents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipus_incidents  $tipus_incidents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipus_incidents $tipus_incidents)
    {
        //
    }
}
