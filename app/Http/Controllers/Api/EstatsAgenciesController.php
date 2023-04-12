<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Estats_agencies;
use App\Http\Controllers\Controller;
use App\Http\Resources\EstatsAgenciesResources;

class EstatsAgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dades = Estats_agencies::all();

        return EstatsAgenciesResources::collection($dades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estats_agencies  $estats_agencies
     * @return \Illuminate\Http\Response
     */
    public function show(Estats_agencies $estats_agencies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estats_agencies  $estats_agencies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estats_agencies $estats_agencies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estats_agencies  $estats_agencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estats_agencies $estats_agencies)
    {
        //
    }
}
