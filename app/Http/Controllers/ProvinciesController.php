<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincies;

class ProvinciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $userRol = Tipus_usuaris::pluck('nom')->first();
        return view ('layout.plantilla', compact('user', 'userRol'));
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
    public function show(Provincies $provincies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provincies  $provincies
     * @return \Illuminate\Http\Response
     */
    public function edit(Provincies $provincies)
    {
        //
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
