<?php

namespace App\Http\Controllers;

use App\Models\Estat_expedients;
use App\Models\Expedients;
use App\Models\Cartes_trucades;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ExpedientsController extends Controller
{

    public function index()
    {

          // Obtiene la lista de expedientes y estados
        $expedientes = Expedients::paginate(6);
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

    public function show(Expedients $expedients)
    {
        $expedientes = Expedients::with('cartes_trucades')->paginate(10);
        return view('AdminE.expedientes', compact('expedientes'));
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
    public function update(Request $request){

        $id = $request->input('expediente_id');
        $expediente = Expedients::find($id);
        $expediente->estat_expedients_id = $request->input('color_id');

        $expediente->save();

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
    public function cartasllamadas($id)
    {
        $cartasllamadas = Cartes_Trucades::where('expedients_id', $id)->get();
        $expedientes = Expedients::paginate(6);
        $estados = Estat_expedients::all();
          // Devuelve la vista expedientes y le pasa los datos
        return view('AdminE.gestExpedientes', compact('cartasllamadas','expedientes', 'estados'));
    }

}
