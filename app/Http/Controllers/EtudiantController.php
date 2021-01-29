<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Nationnalite;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nationnalites = Nationnalite::all();
        return view('etudiant.create', compact('nationnalites'));
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
            'nom' => ['required','min:3'],
            'prenom' => ['required'],
            'idnationnalite' => ['required'],
            'adresse' => ['required'],
            'telephone' => ['required'],
            'teltuteur' => ['required'],
            'nomtuteur' => ['required'],
            'datenaissance' => ['required','date'],
            'genre' => ['required'],
            'disponibilite' => ['required'],
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $validated['nom'];
        $etudiant->prenom = $validated['prenom'];
        $etudiant->idnationnalite = $validated['idnationnalite'];
        $etudiant->adresse = $validated['adresse'];
        $etudiant->telephone = $validated['telephone'];
        $etudiant->teltuteur = $validated['teltuteur'];
        $etudiant->nomtuteur = $validated['nomtuteur'];
        $etudiant->datenaissance = $validated['datenaissance'];
        $etudiant->genre = $validated['genre'];
        $etudiant->disponibilite = $validated['disponibilite'];

        $etudiant->save();

        return redirect()->route('etudiant.index')->with('success',' l\'etudiant a ete créee avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $nationnalites = Nationnalite::all();
        return view('etudiant.edit',compact('etudiant','nationnalites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $validated = $request->validate([
            'nom' => ['required','min:3'],
            'prenom' => ['required'],
            'idnationnalite' => ['required'],
            'adresse' => ['required'],
            'telephone' => ['required'],
            'teltuteur' => ['required'],
            'nomtuteur' => ['required'],
            'datenaissance' => ['required','date'],
            'genre' => ['required'],
            'disponibilite' => ['required'],
        ]);

        $etudiant->idnationnalite = $validated['idnationnalite'];
        $etudiant->nom = $validated['nom'];
        $etudiant->prenom = $validated['prenom'];
        $etudiant->adresse = $validated['adresse'];
        $etudiant->telephone = $validated['telephone'];
        $etudiant->teltuteur = $validated['teltuteur'];
        $etudiant->nomtuteur = $validated['nomtuteur'];
        $etudiant->datenaissance = $validated['datenaissance'];
        $etudiant->genre = $validated['genre'];
        $etudiant->disponibilite = $validated['disponibilite'];

        $etudiant->update();

        return redirect()->route('etudiant.index')->with('success',' l\'etudiant a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiant.index')->with('success',' l\'etudiant a ete supprimer avec succes');
    }
}
