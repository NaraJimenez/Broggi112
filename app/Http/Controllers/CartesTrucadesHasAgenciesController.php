<?php

namespace App\Http\Controllers;

use App\Models\Agencies;
use App\Models\Estats_agencies;
use App\Models\Cartes_trucades;
use App\Models\Cartes_trucades_has_agencies;
use Illuminate\Http\Request;

class CartesTrucadesHasAgenciesController extends Controller
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
     * @param  \App\Models\Cartes_trucades_has_agencies  $cartes_trucades_has_agencies
     * @return \Illuminate\Http\Response
     */
    public function show(Cartes_trucades_has_agencies $cartes_trucades_has_agencies)
    {
        //
    }


    public function edit($id)
    {
        // Obtener la carta trucada específica
        $carta_trucada = Cartes_trucades::find($id);
        $estado_actual = null;
        // Obtener todos los estados posibles de las agencias
        $estados = Estats_agencies::all();

        // Obtener todas las agencias que han sido asignadas a la carta trucada
        $agencias = Agencies::all();

        // Pasar los datos a la vista de edición
        return view('AdminE.carta', compact('carta_trucada', 'estado_actual', 'estados', 'agencias'));
    }
    public function update(Request $request, $id)
    {
        // Obtener la carta trucada específica
        $carta_trucada = Cartes_trucades::find($id);

        // Actualizar las agencias asociadas a la carta trucada
        Cartes_trucades_has_agencies::where('cartes_trucades_id', $id)->delete();

        // Obtener las agencias seleccionadas
        $agencias_seleccionadas = $request->input('agencias');

        // Crear las asociaciones para cada agencia seleccionada
        foreach ($agencias_seleccionadas as $agencia_id) {
            Cartes_trucades_has_agencies::create([
                'cartes_trucades_id' => $id,
                'agencies_id' => $agencia_id,
                'estat_agencies_id' => $request->input('estado')
            ]);
        }

        // Redirigir de vuelta a la vista de detalle de la carta trucada
        return redirect()->route('cartes_trucades.show', $id);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartes_trucades_has_agencies  $cartes_trucades_has_agencies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartes_trucades_has_agencies $cartes_trucades_has_agencies)
    {
        //
    }
}
