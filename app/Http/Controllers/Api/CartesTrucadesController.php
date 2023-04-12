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
           // DB::beginTransaction();
            $cartaTrucada = new Cartes_trucades();
            $expedient = new Expedients();


            //--------------EXPEDIENT----------------------
            $expedient->estats_expedients_id = 1;
            $expedient->save();

            $cartaTrucada->expedients_id = $expedient->id;
            //---------------------------------------------

            //--------------COMUNES-----------------
            $cartaTrucada->temps_trucada = $request->input('tempsTrucada');
            $cartaTrucada->codi_trucada = "TRUC-" . $request->input('codiTrucada');
            $cartaTrucada->telefon = $request->input('phoneInput');
            $cartaTrucada->fora_catalunya = $request->input('localitzacio');
            //-------------------------------------

            //--------------CATALUNYA-------------------
            if ($request->input('localitzacio') == 1) {
                $cartaTrucada->procedencia_trucada = $request->input('procedenciaInput');
                $cartaTrucada->nom_trucada = $request->input('nomIntelocutor');
                $cartaTrucada->municipis_id_trucada = $request->input('selectMunicipi');
                $cartaTrucada->adreca_trucada = $request->input('adreca');



                //--------------------------------------------
                $cartaTrucada->provincies_id = $request->input('selectProvincia');
                $cartaTrucada->municipis_id = $request->input('selectMunicipi'); //Preguntar entre municipis id i municipis id trucada diferencia

                $cartaTrucada->tipus_localitzacions_id = $request->input('tipusLoc');


                if ($request->input('tipusLoc') == 1) {
                    $carrerDescrip = $request->input('tipusVia') . ' ' . $request->input('nomVia') . ' ' . $request->input('numVia');
                    $detallLoc = $request->input('escala') . ' ' . $request->input('pis') . ' ' . $request->input('porta');

                    $cartaTrucada->descripcio_localitzacio = $carrerDescrip;
                    $cartaTrucada->detall_localitzacio = $detallLoc;
                    $cartaTrucada->altres_ref_localitzacio = $request->input('referenciesLoc1');
                } else if ($request->input('tipusLoc') == 2) {
                    $cartaTrucada->descripcio_localitzacio = $request->input('nomPunt');
                    $cartaTrucada->altres_ref_localitzacio = $request->input('referenciesLoc2');
                } else if ($request->input('tipusLoc') == 3) {
                    $cartaTrucada->descripcio_localitzacio = $request->input('selectMunicipi');
                    $cartaTrucada->altres_ref_localitzacio = $request->input('referenciesLoc3');
                } else if ($request->input('tipusLoc') == 4) {
                    $descripCarretera = $request->input('nomCarretera') . ' ' . $request->input('puntKilometric');

                    $cartaTrucada->descripcio_localitzacio = $descripCarretera;
                    $cartaTrucada->detall_localitzacio = $request->input('sentitCarretera');
                    $cartaTrucada->altres_ref_localitzacio = $request->input('referenciesLoc4');
                } else if ($request->input('tipusLoc') == 5) {
                    $cartaTrucada->descripcio_localitzacio = $request->input('selectProvincia');
                    $cartaTrucada->altres_ref_localitzacio = $request->input('referenciesLoc5');
                }
            }
            //------------------------------------------------------
            //---------------ALTRES (LOCALITZACÓ)-------------------
            else {
                $cartaTrucada->procedencia_trucada = $request->input('procedenciaInput');
                $cartaTrucada->nom_trucada = $request->input('nomIntelocutor');
                $cartaTrucada->municipis_id_trucada = $request->input('municipioInput');
                $cartaTrucada->adreca_trucada = $request->input('adreca');
                $cartaTrucada->provincies_id = $request->input('provinciaInput');
            }
            //--------------------------------------------------

            //-------------------MES COMUNES--------------------
            $cartaTrucada->incidents_id = $request->input('incident');
            $cartaTrucada->nota_comuna = $request->input('notaComunaInput');
            $cartaTrucada->usuaris_id = $request->input("usuaris_id");
            //---------------------------------------

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
