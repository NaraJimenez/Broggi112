<?php

namespace App\Http\Controllers\Api;

use App\Models\Agencies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AgenciesResources;

class AgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Buscamos las agencias por el municipio
        $agencies = Agencies::with('municipi')->get();

        return AgenciesResources::collection($agencies);

        //SACAR DE LA BBDD -- El nombre de las agencias guardadas
        
    }

    public function mapbox(){
        $datosA = DB::table('agencies')
            ->select('nom', 'carrer', 'codi_postal')
            ->get();
        return response()->json($datosA);
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
     * @param  \App\Models\Agencies  $agencies
     * @return \Illuminate\Http\Response
     */
    public function show(Agencies $agencies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agencies  $agencies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agencies $agencies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agencies  $agencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agencies $agencies)
    {
        //
    }
}
