<?php

namespace App\Http\Controllers\Api;

use App\Models\Provincies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProvinciesResources;

class ProvinciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincies = Provincies::all();

        return ProvinciesResources::collection($provincies);
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
     * @param  \App\Models\Provincies  $provincies
     * @return \Illuminate\Http\Response
     */
    public function show(Provincies $provincy)
    {
        $provincia = Provincies::with('Comarques')->find($provincy->id);
        return new ProvinciesResources($provincia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provincies  $provincies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincies $provincies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provincies  $provincies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincies $provincies)
    {
        //
    }
}
