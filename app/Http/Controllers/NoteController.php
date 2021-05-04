<?php

namespace App\Http\Controllers;

use App\Models\Ec;
use App\Models\Etudiant;
use App\Models\Evaluation;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$notes = DB::table('note')->paginate(10);
        $notes = Note::with('evaluation','etudiant')->paginate(5);
        return view("note.index",compact("notes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ecs = Ec::all();
        $evaluations = Evaluation::all();
        $etudiants = Etudiant::all();
        return view("note.create",compact("ecs","evaluations","etudiants"));
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
            'note' => ['required'],
            'matricule' => ['required','exists:"\App\Models\Etudiant","matricule'],
            'idevaluation' => ['required','exists:"\App\Models\Evaluation","idevaluation'],
        ]);

        $note = new Note();

        $note->note = $validated['note'];
        $note->idevaluation = $validated['idevaluation'];
        $note->matricule = $validated['matricule'];

        $note->save();
        return redirect()->route('note.index')->with('success',' la note a ete créee avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        $ecs = Ec::all();
        return view('note.edit',compact('note','ecs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $validated = $request->validate([
            'note' => ['required'],
        ]);

        //dd($request->all());
        $note->note = $validated['note'];

        $note->update();
        return redirect()->route('note.index')->with('success',' la note a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.index')->with('success',' la note a ete supprimer avec succes');
    }
}
