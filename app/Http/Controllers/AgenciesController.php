<?php

namespace App\Http\Controllers;

use App\Models\Agencies;
use App\Models\Municipis;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agencies::all();
        $municipis = Municipis::all();


        $agencia = view('paginas.adminAgencias.adminAgencias', compact('agencies','municipis'));

        return response($agencia);
    }
    public function eliminar($agenciaID){
        $agencia = Agencies::find($agenciaID);
        $agencia->delete();
        $agencia = Agencies::find($agenciaID);
        if (!$agencia) {
            return redirect()->back()->with('error', "No s'ha pogut eliminar la agencia");
        }
        $agencia->delete();
        return view('paginas.adminAgencias.adminAgencias')->with('success', "L'agència s'ha eliminat correctament.");
    }
    public function crear(Request $request)
    {
        $municipis = Municipis::all();
        return view('paginas.adminAgencias.crear', compact('municipis'));
    }
    public function afegir(Request $request)
    {
        $agencia = new Agencies;
        $agencia->nom = $request->nom;
        $agencia->carrer = $request->carrer;
        $agencia->codi_postal = $request->codi_postal;
        $agencia->correu = $request->correu;
        $agencia->municipis_id =$request->municipis_id;
        $agencia->save();

        return redirect()->back()->with('success', "L'agència s'ha afegit correctament.");
    }
    }



