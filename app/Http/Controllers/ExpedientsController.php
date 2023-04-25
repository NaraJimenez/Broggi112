<?php

namespace App\Http\Controllers;

use App\Models\Estat_expedients;
use App\Models\Expedients;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ExpedientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
          // Obtiene la lista de expedientes y estados
        $expedientes = Expedients::all();
        $estados = Estat_expedients::all();

          // Devuelve la vista expedientes y le pasa los datos
          return view('AdminE.expedientes', compact('expedientes', 'estados'));

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
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function show(Expedients $expedients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function edit(Expedients $expedients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
  
    //  Actualiza el estado del expediente
    public function update(Request $request, $id){
        
        $estado = Estat_expedients::find($id);
        $estado->colors = $request->input('color-input');
       
        $estado->save();

        return redirect()->back()->with('success', 'El estado del expediente se ha actualizado.');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expedients  $expedients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expedients $expedients)
    {
        //
    }
}
