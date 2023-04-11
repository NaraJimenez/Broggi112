<?php

namespace App\Http\Controllers;

use App\Models\Tipus_usuaris;
use App\Http\Requests\StoreTipus_usuarisRequest;
use App\Http\Requests\UpdateTipus_usuarisRequest;

class TipusUsuarisController extends Controller
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
     * @param  \App\Http\Requests\StoreTipus_usuarisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipus_usuarisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipus_usuaris  $tipus_usuaris
     * @return \Illuminate\Http\Response
     */
    public function show(Tipus_usuaris $tipus_usuaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipus_usuaris  $tipus_usuaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipus_usuaris $tipus_usuaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipus_usuarisRequest  $request
     * @param  \App\Models\Tipus_usuaris  $tipus_usuaris
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipus_usuarisRequest $request, Tipus_usuaris $tipus_usuaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipus_usuaris  $tipus_usuaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipus_usuaris $tipus_usuaris)
    {
        //
    }
}
