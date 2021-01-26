<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professeurs = DB::table('professeur')->paginate(5);
        return view('professeur.index', compact('professeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professeur.create');

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
            'prenom' => ['required','min:3'],
            'telephone' => ['required','regex:/^(00|\+)?221?(77|78|70|76|75|33){1}[-. ]?[0-9]{3}([-. ]?[0-9]{2}){2}$/'],
            'email' => ['required','email'],
        ]);

        $professeur = new Professeur();
        $professeur->nom = $validated['nom'];
        $professeur->prenom = $validated['prenom'];
        $professeur->telephone = $validated['telephone'];
        $professeur->email = $validated['email'];

        $professeur->save();

        return redirect()->route('professeur.index')->with('success',' le professeur a ete créee avec succes');
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
    public function edit(Professeur $professeur)
    {
        return view('professeur.edit', compact('professeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Professeur $professeur)
    {
        $validated = $request->validate([
            'nom' => ['required','min:3'],
            'prenom' => ['required','min:3'],
            'telephone' => ['required'],
            'email' => ['required','email'],
        ]);

        $professeur->nom = $validated['nom'];
        $professeur->prenom = $validated['prenom'];
        $professeur->telephone = $validated['telephone'];
        $professeur->email = $validated['email'];

        $professeur->update();

        return redirect()->route('professeur.index')->with('success',' le professeur a ete modiier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professeur $professeur)
    {
        $professeur->delete();
        return redirect()->route('professeur.index')->with('success',' le professeur a ete supprimer avec succes');

    }
}
