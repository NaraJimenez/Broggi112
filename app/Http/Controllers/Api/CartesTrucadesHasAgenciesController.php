<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cartes_trucades_has_agencies;
use App\Http\Resources\CartesTrucadesHasAgenciesResources;

class CartesTrucadesHasAgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucadesHasAgencies = Cartes_trucades_has_agencies::all();

        return CartesTrucadesHasAgenciesResources::collection($trucadesHasAgencies);
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
     * @param  \App\Models\Cartes_trucades_has_agencies  $cartes_trucades_has_agencies
     * @return \Illuminate\Http\Response
     */
    public function show(Cartes_trucades_has_agencies $cartes_trucades_has_agencies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartes_trucades_has_agencies  $cartes_trucades_has_agencies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartes_trucades_has_agencies $cartes_trucades_has_agencies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartes_trucades_has_agencies  $cartes_trucades_has_agencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartes_trucades_has_agencies $cartes_trucades_has_agencies)
    {
        //
    }
}
