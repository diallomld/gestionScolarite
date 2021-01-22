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
            'idanneescolaire' => ['required','exists:AnneeScolaire::class,idannescolaire'],
            'datedebut' => ['required','date'],
            'datefin' => ['required','date'],
        ]);

        $semestre = new Semestre();
        $semestre->anneescolaire = $validated['anneescolaire'];
        $semestre->statut = $validated['statut'];

        $semestre->save();

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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
