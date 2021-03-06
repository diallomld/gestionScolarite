<?php

namespace App\Http\Controllers;

use App\Models\Anneescolaire;
use Illuminate\Http\Request;

class AnneeScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annees = Anneescolaire::all();
        return view('annee.index', compact('annees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'anneescolaire' => ['required','regex:/^[0-9]{4}(-|\/)[0-9]{4}$/'],
            'statut' => 'required',
        ]);

        $annee = new Anneescolaire();
        $annee->anneescolaire = $validated['anneescolaire'];
        $annee->statut = $validated['statut'];

        $annee->save();

        return redirect()->route('annee.index')->with('success',' l annee a ete créee avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anneescolaire $annee)
    {
        return view('annee.edit',compact('annee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anneescolaire $annee)
    {
        $validated = $request->validate([
            'anneescolaire' => ['required','regex:/^[0-9]{4}(-|\/)[0-9]{4}$/'],
            'statut' => 'required',
        ]);

        $annee->anneescolaire = $validated['anneescolaire'];
        $annee->statut = $validated['statut'];

        $annee->update();

        return redirect()->route('annee.index')->with('success',' l annee a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anneescolaire $annee)
    {
        $annee->delete();
        return redirect()->route('annee.index')->with('success',' l\'annee a ete supprimer avec succes');
    }
}
