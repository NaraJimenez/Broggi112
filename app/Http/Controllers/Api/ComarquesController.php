<?php

namespace App\Http\Controllers\Api;

use App\Models\Comarques;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ComarquesResources;

class ComarquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comarques = Comarques::all();

        return ComarquesResources::collection($comarques);
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
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
    public function show(Comarques $comarque)
    {
       /* $comarca = Comarques::where('provincies_id', '=', $comarques)
                                    ->get();
        return new ComarquesResources($comarca);*/

        $comarca= Comarques::with('Municipis')->find($comarque->id);
        return new ComarquesResources($comarca);



        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comarques $comarques)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comarques  $comarques
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comarques $comarques)
    {
        //
    }
}
