<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\Expedients;
use Illuminate\Http\Request;
use App\Models\Interlocutors;

use App\Models\Cartes_trucades;
use Illuminate\Support\Facades\DB;
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
            DB::beginTransaction();

            $expedient = new Expedients();
            $cartaTrucada = new Cartes_trucades();
            $interlocutor = new Interlocutors();
            /*
            // Obtener el valor del campo selected del objeto cartaTrucadaRealizada
            $selected = $request->input('cartaTrucadaRealizada.selected');

            //Metemos aqui el id que ha de pasarse para el expediente
            $idSeleccionado = null;

            if (!empty($selected)) {
                $idSeleccionado = $selected[0]['id'];
            } else {

            }*/


           /* EXPEDIENTES -- Guardamos en tabla Expedientes*/
            $expedient->estat_expedients_id = 1;
            $expedient->codi = 'EXP01' ;
            $expedient->save();


            //Cogemos el id de los expedientes
            $cartaTrucada->expedients_id = $expedient->id;


            //INTERLOCUTOR -- Guardamos en la tabla de interlocutor
            $interlocutor->nom = $request->inputNombre;
            $interlocutor->telefon = $request->telefonoLlamada;
            $interlocutor->cognoms = $request->inputApellidos;
            $interlocutor->save();


            //Cogemos el id de los interlocutores
            $cartaTrucada->interlocutors_id = $interlocutor->id;

            //En el componente Padre
            $cartaTrucada->codi_trucada = $request->codiTrucada;
            $cartaTrucada->data_hora_trucada = new \DateTime($request->iniciTrucada);
            $cartaTrucada->durada = $request->duracioTrucada;

            //Primer Form
            $cartaTrucada->telefon = $request->input('telefonoLlamada');
            $cartaTrucada->nom = $request->input('inputNombre');
            $cartaTrucada->cognoms = $request->input('inputApellidos');
            $cartaTrucada->nota_comuna = $request->input('InputNotaComuna');
            $cartaTrucada->incidents_id = $request->input('selectedIncident');


            //Segundo FORM
            if ($request->input('catEscogido') == 0) {
                //PROVINCIA
                $cartaTrucada->provincies_id = $request->input('selectProvincia');
                //MUNICIPI
                $cartaTrucada->municipis_id = $request->input('selecMunicipi');

                //SE PASA EL INDEX DEL TAB
                $cartaTrucada->tipus_localitzacions_id = $request->input('selectedNavItem');


                if($request->input('selectedNavItem') == 1){
                    $descripCarretera = $request->input('inputCarretera') . ' ' . $request->input('inputpuntoKM');

                    $cartaTrucada->descripcio_localitzacio = $descripCarretera;
                    $cartaTrucada->detall_localitzacio = $request->input('inputSentido');
                } else if ($request->input('selectedNavItem') == 2){
                    $carrerDescrip = $request->input('inputVia') . ' ' . $request->input('inputCalle') . ' ' . $request->input('inputCasa');
                    $detallLoc = $request->input('inputEscalera') . ' ' . $request->input('inputPiso') . ' ' . $request->input('inputPuerta');

                    $cartaTrucada->descripcio_localitzacio = $carrerDescrip;
                    $cartaTrucada->detall_localitzacio = $detallLoc;
                } else if ($request->input('selectedNavItem') == 3) {
                    $cartaTrucada->descripcio_localitzacio = $request->input('inputPS');
                } else if ($request->input('selectedNavItem') == 4) {
                    $cartaTrucada->descripcio_localitzacio = $request->input('inputPob');
                }

            } else {
                //SI NO ES CAT
                //PROVINCIA
                $cartaTrucada->provincies_id = $request->input('provinciaInput');
                //MUNICIPI
                $cartaTrucada->municipis_id = $request->input('municipioInput');

                //No catalunya se mete en los inputs de provincia y monicipi en altres referencies
                /*$noCat =  $request->input('provinciaInput') . ' ' . $request->input('municipioInput')
                $cartaTrucada->altres_ref_localitzacio = $noCat;
                */

            }

            //Elementos externos
            $cartaTrucada->usuaris_id= 1;

            //CARTA TRUCADA ES SALVA
            $cartaTrucada->save();

            $response = (new CartesTrucadesResources($cartaTrucada))
                ->response()
                ->setStatusCode(201);
            DB::commit();
        } catch (QueryException $ex) {
            DB::rollBack();
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
    public function show(Cartes_trucades $cartestrucade)
    {
        $cartes_trucades = Cartes_trucades::find($cartestrucade);
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
    {   //CUANDO SE SACA LA CARTA EN EL APARTADO DE LOS EXPEDIENTES

        //Buscamos primero la carta a la que se le va hacer update
        $id = $request->input('id');

        $find = Cartes_trucades::find($id);

        if ($find) {
            //SE HACE UPDATE DE LAS AGENCIAS


            try {
                $cartes_trucades->save();
                $response = (new CartesTrucadesResources($cartes_trucades))
                    ->response()
                    ->setStatusCode(201);
            } catch (QueryException $ex) {
                $mensaje = Utilitat::errorMessage($ex);
                $response = \response()
                    ->json(["error" => $mensaje], 400);
            }

            return $response;
        } else {
            var_dump("not exist");
        }
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

    //BUSCADOR PRUEBA 2
    public function search($telefon, $incident = 0, $municipi = 0)
    {
        $results = Expedients::join('cartes_trucades', 'cartes_trucades.expedients_id', '=', 'expedients.id')
                    ->join('incidents', 'cartes_trucades.incidents_id', '=', 'incidents.id')
                    ->where('incidents.tipus_incidents_id', $incident)
                    ->orWhere('cartes_trucades.municipis_id', $municipi)
                    ->orWhere('cartes_trucades.telefon', 'LIKE', '%'.$telefon.'%')
                    ->select('expedients.*')
                    ->get();

        return response()->json($results);
    }

}
