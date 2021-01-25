<?php

namespace App\Http\Controllers;

use App\Models\Anneescolaire;
use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semestres = Semestre::all();
        return view('semestre.index', compact('semestres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $annees = Anneescolaire::all();
        return view('semestre.create', compact('annees'));
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
            'libellesemestre' => ['required','min:3'],
            'idanneescolaire' => ['required','exists:"App\Models\Anneescolaire",idannescolaire'],
            'datedebut' => ['required','date'],
            'datefin' => ['required','date'],
        ]);

        $semestre = new Semestre();
        $semestre->idannescolaire = $validated['idanneescolaire'];
        $semestre->libellesemestre = $validated['libellesemestre'];
        $semestre->datedebut = $validated['datedebut'];
        $semestre->datefin = $validated['datefin'];

        $semestre->save();

        return redirect()->route('semestre.index')->with('success',' le semestre a ete créee avec succes');
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
    public function edit(Semestre $semestre)
    {
        $annees = Anneescolaire::all();
        return view('semestre.edit',compact('semestre','annees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semestre $semestre)
    {
        $validated = $request->validate([
            'libellesemestre' => ['required','min:3'],
            'idanneescolaire' => ['required','exists:"App\Models\Anneescolaire",idannescolaire'],
            'datedebut' => ['required','date'],
            'datefin' => ['required','date'],
        ]);

        $semestre->idannescolaire = $validated['idanneescolaire'];
        $semestre->libellesemestre = $validated['libellesemestre'];
        $semestre->datedebut = $validated['datedebut'];
        $semestre->datefin = $validated['datefin'];

        $semestre->update();

        return redirect()->route('semestre.index')->with('success',' le semestre a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semestre $semestre)
    {
        $semestre->delete();
        return redirect()->route('semestre.index')->with('success',' le semestre a ete supprimer avec succes');
    }
}
