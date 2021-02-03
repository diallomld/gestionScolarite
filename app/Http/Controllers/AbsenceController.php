<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Cour;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absences = Absence::all();
        return view("absence.index",compact('absences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cours = Cour::all();
        $etudiants = Etudiant::all();
        return view('absence.create', compact('cours','etudiants'));
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
            
            'idcours' => ['required','exists:"App\Models\Cour",idcours'],
            'matricule' => ['required','exists:"App\Models\Etudiant",matricule'],
            'motif' => ['required'],
            'dateabsence' => ['required'],
            
            
            ]);
        $absence = new Absence();
        $absence->idcours = $validated['idcours'];
        $absence->matricule = $validated['matricule'];
        $absence->motif = $validated['motif'];
        $absence->dateabsence = $validated['dateabsence'];

        $absence->save();

        return redirect()->route('absence.index')->with('success',' l\'absence a ete créee avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function show(Absence $absence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function edit(Absence $absence)
    {
        $cours = Cour::all();
        $etudiants = Etudiant::all();
        return view("absence.edit",compact('absence','cours','etudiants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absence $absence)
    {
        $validated = $request->validate([
            
            'idcours' => ['required','exists:"App\Models\Cour",idcours'],
            'matricule' => ['required','exists:"App\Models\Etudiant",matricule'],
            'motif' => ['required'],
            'dateabsence' => ['required'],
            
        ]);

        $absence->idcours = $validated['idcours'];
        $absence->matricule = $validated['matricule'];
        $absence->motif = $validated['motif'];
        $absence->dateabsence = $validated['dateabsence'];

        $absence->update();

        return redirect()->route('absence.index')->with('success',' l\'absence a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absence  $absence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absence $absence)
    {
        $absence->delete();
        return redirect()->route('absence.index')->with('success',' l\'absence a ete modifier avec succes');
    }
}
