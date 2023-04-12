<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cartes_trucades;
use Illuminate\Http\Request;


use App\Clases\Utilitat;
use App\Models\CartesTrucades;
use Illuminate\Database\QueryException;
use App\Http\Resources\CartesTrucadesResource;

class CartesTrucadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartesTrucades = Cartes_trucades::all();
        return CartesTrucadesResource::collection($cartesTrucades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartesTrucades = new CartesTrucades();

        //$cartesTrucades->codi_trucada = $request->input('codi_trucada');

       // $cartesTrucades->data_hora = $request->input('data_hora');
       // $cartesTrucades->temps_trucada = $request->input('temps_trucada');

       // $cartesTrucades->dades_personals_id = $request->input('dades_personals_id');
       // $cartesTrucades->telefon = $request->input('telefon');
        //$cartesTrucades->procedencia_trucada = $request->input('procedencia_trucada');
        //$cartesTrucades->origen_trucada = $request->input('origen_trucada');
        //$cartesTrucades->nom_trucada = $request->input('nom_trucada');

        $cartesTrucades->municipis_id_trucada = $request->input('municipis_id_trucada');
        $cartesTrucades->adreca_trucada = $request->input('adreca_trucada');
        $cartesTrucades->fora_catalunya = $request->input('fora_catalunya');
        $cartesTrucades->provincies_id = $request->input('provincies_id');
        $cartesTrucades->municipis_id = $request->input('municipis_id');

        $cartesTrucades->incidents_id = $request->input('incidents_id');
        $cartesTrucades->nota_comuna = $request->input('nota_comuna');
       // $cartesTrucades->expedients_id = $request->input('expedients_id');
       // $cartesTrucades->usuaris_id = $request->input('usuaris_id');

        try{

            $cartesTrucades->save();
            $response = (new CartesTrucadesResource($cartesTrucades))->response()->setStatusCode(201);
        }
        catch(QueryException $ex)
        {
            $mensaje = Utilitat::errorMessage($ex);
            // $request->session()->flash('error', $mensaje);
            $response = \response()->json(['error' => $mensaje], 400);
        }

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cartes_trucades  $cartes_trucades
     * @return \Illuminate\Http\Response
     */
    public function show(Cartes_trucades $cartes_trucades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartes_trucades  $cartes_trucades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartes_trucades $cartes_trucades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartes_trucades  $cartes_trucades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartes_trucades $cartes_trucades)
    {
        //
    }
}
