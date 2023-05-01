<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Interlocutors;
use App\Http\Controllers\Controller;
use App\Http\Resources\InterlocutorsResources;

class InterlocutorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedients = Interlocutors::all();

        return InterlocutorsResources::collection($expedients);
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
     * @param  \App\Models\Interlocutors  $interlocutors
     * @return \Illuminate\Http\Response
     */
    public function show(Interlocutors $interlocutors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interlocutors  $interlocutors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interlocutors $interlocutors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interlocutors  $interlocutors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interlocutors $interlocutors)
    {
        //
    }
}
