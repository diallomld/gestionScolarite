<?php

namespace App\Http\Controllers;

use App\Models\Anneescolaire;
use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscriptions = Inscription::all();
        return view('inscription.index', compact('inscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etudiants = Etudiant::all();
        $classes = Classe::all();
        $annees = Anneescolaire::all();
        return view('inscription.create',compact('annees', 'classes','etudiants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricule' => ['required', 'exists:"\App\Models\Etudiant",matricule'],
            'numero' => ['required', 'exists:"\App\Models\Classe",numero'],
            'idannescolaire' => ['required', 'exists:"\App\Models\Anneescolaire",idannescolaire'],
            'dateinscription' => ['required', 'date']
        ]);

        $inscription = new Inscription();
        $inscription->matricule = $request->matricule;
        $inscription->numero = $request->numero;
        $inscription->idannescolaire = $request->idannescolaire;
        $inscription->dateinscription = $request->dateinscription;

        $inscription->save();

        return redirect()->route('inscription.index')->with('success','Inscription ajouter avec succees');
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
    public function edit(Inscription $inscription)
    {
        //$etudiants = Etudiant::all();
        $classes = Classe::all();
        $annees = Anneescolaire::all();
        return view('inscription.edit',compact('inscription','annees', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Inscription $inscription)
    {

        $request->validate([
            'matricule' => ['required', 'exists:"\App\Models\Etudiant",matricule'],
            'numero' => ['required', 'exists:"\App\Models\Classe",numero'],
            'idannescolaire' => ['required', 'exists:"\App\Models\Anneescolaire",idannescolaire'],
            'dateinscription' => ['required', 'date']
        ]);
        $inscription->matricule = $request->matricule;
        $inscription->idannescolaire = $request->idannescolaire;
        $inscription->dateinscription = $request->dateinscription;

        $inscription->save();

        return redirect()->route('inscription.index')->with('success','Inscription modifié avec succees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        $inscription->delete();

        return redirect()->route('inscription.index')->with('success','Inscription supprimer avec succees');

    }
}
