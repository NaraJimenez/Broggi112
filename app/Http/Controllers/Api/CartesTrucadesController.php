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

            //En el componente Padre
            $cartaTrucada->temps_trucada = $request->input('tempsTrucada'); 
            $cartaTrucada->codi_trucada = $request->input('tempsTrucada');
            $cartaTrucada->data_hora_trucada = $request->input('tempsTrucada');
            $cartaTrucada->durada = $request->input('tempsTrucada');

            //Primer Form
            $cartaTrucada->telefon = $request->input('tempsTrucada'); 
            $cartaTrucada->nom = $request->input('tempsTrucada'); 
            $cartaTrucada->cognoms = $request->input('tempsTrucada'); 
            $cartaTrucada->nota_comuna = $request->input('tempsTrucada'); 
            $cartaTrucada->incidents_id = $request->input('tempsTrucada'); 
            $cartaTrucada->interlocutors_id = $request->input('tempsTrucada'); 

            //Segundo Form
            $cartaTrucada->tipus_localitzacions_id = $request->input('tempsTrucada'); 
            $cartaTrucada->decripcio_localitzacio = $request->input('tempsTrucada'); 
            $cartaTrucada->detall_localitzacio = $request->input('tempsTrucada'); 
            $cartaTrucada->altres_ref_localitzacio = $request->input('tempsTrucada'); 
            $cartaTrucada->municipis_id = $request->input('tempsTrucada'); 
            $cartaTrucada->provincies_id = $request->input('tempsTrucada'); 

            //FINAL
            $cartaTrucada->expedients_id = $request->input('tempsTrucada'); 
            $cartaTrucada->usuaris_id= $request->input('tempsTrucada'); 

            //Si la posicion es 0 se ponen los inputs en lozalitzación

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
