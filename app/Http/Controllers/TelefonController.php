<?php

namespace App\Http\Controllers;

use App\Models\Cartes_trucades;
use App\Http\Requests;
use App\Http\Requests\StoreTelefonRequest;

class TelefonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Cartes_trucades::pluck('telefon')->toArray();
        $count = sizeof($phones);
        $randomIndex = rand(0, $count-1);
        $randomPhone = $phones[$randomIndex];

        return view ('NavBar.home', compact('randomPhone'));
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
     * @param  \App\Http\Requests\StoreTelefonRequest  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(StoreTelefonRequest $request)
    {
        //
    }*/

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Telefon  $telefon
     * @return \Illuminate\Http\Response
     */
    /*public function show(Telefon $telefon)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Telefon  $telefon
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Telefon $telefon)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTelefonRequest  $request
     * @param  \App\Models\Telefon  $telefon
     * @return \Illuminate\Http\Response
     */
    /*public function update(UpdateTelefonRequest $request, Telefon $telefon)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Telefon  $telefon
     * @return \Illuminate\Http\Response
     */
    /*public function destroy(Telefon $telefon)
    {
        //
    }*/
}
