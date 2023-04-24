<?php

namespace App\Http\Controllers;

use App\Models\Interlocutors;
use App\Http\Requests\StoreInterlocutorsRequest;
use App\Http\Requests\UpdateInterlocutorsRequest;

class InterlocutorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInterlocutorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInterlocutorsRequest $request)
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interlocutors  $interlocutors
     * @return \Illuminate\Http\Response
     */
    public function edit(Interlocutors $interlocutors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInterlocutorsRequest  $request
     * @param  \App\Models\Interlocutors  $interlocutors
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInterlocutorsRequest $request, Interlocutors $interlocutors)
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
