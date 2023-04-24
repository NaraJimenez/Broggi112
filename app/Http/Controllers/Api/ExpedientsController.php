<?php

namespace App\Http\Controllers\Api;

use App\Clases\Utilitat;
use App\Models\Expedients;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Resources\ExpedientsResources;

class ExpedientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedients = Expedients::all();

        return ExpedientsResources::collection($expedients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {/*
        $expedients = new Expedients();
        $expedients->data_creacio = $request->input('data_creacio');
        $expedients->estats_expedients_id = $request->input('estats_expedients_id');

        try{

            $expedients->save();
            $response = (new ExpedientsResources($expedients))->response()->setStatusCode(201);
        }
        catch(QueryException $ex)
        {

            $mensaje = Utilitat::errorMessage($ex);
            // $request->session()->flash('error', $mensaje);
            $response = \response()->json(['error' => $mensaje], 400);
        }

        return $response;*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function show(Expedients $expedient)
    {
        $expediente = Expedients::find($expedient);
        return new ExpedientsResources($expediente);
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
