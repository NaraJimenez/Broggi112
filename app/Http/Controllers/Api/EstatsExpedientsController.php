<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Estat_expedients;
use App\Http\Controllers\Controller;
use App\Http\Resources\EstatsExpedientsResources;

class EstatsExpedientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatsExpedients = Estat_expedients::all();

        return EstatsExpedientsResources::collection($estatsExpedients);
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
     * @param  \App\Models\Estats_expedients  $estats_expedients
     * @return \Illuminate\Http\Response
     */
    public function show(Estat_expedients $estats_expedients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estats_expedients  $estats_expedients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estat_expedients $estats_expedients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estats_expedients  $estats_expedients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estat_expedients $estats_expedients)
    {
        //
    }
}
