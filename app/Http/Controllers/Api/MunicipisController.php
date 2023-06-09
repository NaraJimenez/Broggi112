<?php

namespace App\Http\Controllers\Api;

use App\Models\Municipis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MunicipisResources;

class MunicipisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipis = Municipis::all();

        return MunicipisResources::collection($municipis);
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
     * @param  \App\Models\Municipis  $municipis
     * @return \Illuminate\Http\Response
     */
    public function show(Municipis $municipis)
    {
       /* $municipi = Municipis::where('comarques_id', '=', $municipis)
                                    ->get();
        return new MunicipisResources($municipi);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipis  $municipis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipis $municipis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipis  $municipis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipis $municipis)
    {
        //
    }
}
