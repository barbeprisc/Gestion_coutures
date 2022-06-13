<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Mesure;

class MesureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mesure.liste_mesure', [
            'mesures' => Mesure::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mesure.formulaire_mesure', [
            'clients' => Client::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mesure::create([
            'clients_id' => $request->clients_id,
            'dos' => $request->dos,
            'epaule' => $request->epaule,
            'poitrine' => $request->poitrine,
            'long_manche' => $request->long_manche,
            'tour_manche' => $request->tour_manche,
            'long_taille' => $request->long_taille,
            'tour_taille' => $request->tour_taille,
            'pinces' => $request->pinces,
            'long_camisole' => $request->long_camisole,
            'long_robe' => $request->long_robe,
            'long_chemise' => $request->long_chemise,
            'ceinture' => $request->ceinture,
            'bassin' => $request->bassin,
            'cuisse' => $request->cuisse,
            'genoux' => $request->genoux,
            'long_jupe' => $request->long_jupe,
            'long_pantalon' => $request->long_pantalon,
            'bas' => $request->bas,
        ]);
        return redirect()->route('gestion_mesure.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('mesure.show_mesure', [
            'finds' => Mesure::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('mesure.edit_mesure', [
            'finds' => Mesure::find($id),
            'clients' => Client::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Mesure::find($id);
        $client->update($request->all());

        return redirect()->route('gestion_mesure.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $client = Mesure::find($id);
        $client->delete();

        return redirect()->route('gestion_mesure.index');
    }
}
