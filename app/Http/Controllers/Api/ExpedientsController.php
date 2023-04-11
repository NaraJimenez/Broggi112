<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Expedients;
use Illuminate\Http\Request;


use Illuminate\Database\QueryException;
use App\Http\Resources\ExpedientsResource;
class ExpedientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedients = Expedients::with("estatsExpedients")->get();
        return ExpedientsResource::collection($expedients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expedients = new Expedients();


        $expedients->data_creacio = $request->input('data_creacio');
        $expedients->data_ultima_modificacio = $request->input('data_ultima_modificacio');
        $expedients->estats_expedients_id = $request->input('estats_expedients_id');

        try{

            $expedients->save();
            $response = (new ExpedientsResource($expedients))->response()->setStatusCode(201);
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
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function show(Expedients $expedients)
    {
        //$expedient = Expedients::with("estatsExpedients")->get();
        $expedientNou = Expedients::with(["cartestrucades.provincies","cartestrucades.municipis","cartestrucades.usuari"])->where("id", $expedient->id)->first();
        return new ExpedientsResource($expedientNou);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expedients $expedients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expedients $expedients)
    {
        //
    }
}
