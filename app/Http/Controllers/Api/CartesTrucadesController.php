<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\Expedients;
use Illuminate\Http\Request;



use App\Models\Cartes_trucades;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\CartesTrucadesResources;

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
        return CartesTrucadesResources::collection($cartesTrucades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $cartaTrucada = new Cartes_trucades();

           /* EXPEDIENTES
            $expedient = new Expedients();
            $expedient->estats_expedients_id = 1;
            $expedient->save();*/

            $cartaTrucada->expedients_id = $expedient->id;
            $cartaTrucada->codi_trucada = $request->codiTrucada;
            $cartaTrucada->data_hora_trucada = new \DateTime($request->iniciTrucada);
            $cartaTrucada->durada = $request->duracioTrucada;
            $cartaTrucada->interlocutors_id = $request->interlocutorID;
            $cartaTrucada->telefon = $request->numTel;
            $cartaTrucada->nom = $request->nom;
            $cartaTrucada->cognoms = $request->cognom;
            $cartaTrucada->nota_comuna = $request->notacomuna;
            $cartaTrucada->tipus_localitzacions_id = $request->tipusLocali;
            $cartaTrucada->decripcio_localitzacio = $request->descripcio;
            $cartaTrucada->detall_localitzacio = $request->detalls;
            $cartaTrucada->municipis_id = $request->selectedMunicipi;
            $cartaTrucada->provincies_id = $request->selectedProvincia;
            $cartaTrucada->incidents_id = $request->incident;
            $cartaTrucada->expedients_id = $request->expedient;
            $cartaTrucada->usuaris_id = $request->usuari;

            //Si la posicion es 0 se ponen los inputs

            //CARTA TRUCADA ES SALVA
            $cartaTrucada->save();

            $response = (new CartesTrucadesResources($cartaTrucada))
                ->response()
                ->setStatusCode(201);
            //DB::commit();
        } catch (QueryException $ex) {
            //DB::rollBack();
            $mensaje = Utilitat::errorMessage($ex);
            $response = \response()
                ->json(
                    ['error' => $mensaje],
                    400
                );
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
        $cartes_trucades = Cartes_trucades::find($cartes_trucades);
        return new CartesTrucadesResources($cartes_trucades);
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
