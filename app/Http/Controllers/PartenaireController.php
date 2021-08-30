<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        return view("partenaire.index", compact("partenaires"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("partenaire.create");
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
            'nom' => ['required','min:3']
        ]);

        $partenaire = new Partenaire();
        $partenaire->nom = $validated['nom'];

        $partenaire->save();

        return redirect()->route('partenaire.index')->with('success','Partenaire ajouter avec succees');
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
    public function edit(Partenaire $partenaire)
    {
        return view("partenaire.edit", $partenaire);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenaire $partenaire)
    {
        $validated = $request->validate([
            'nom' => ['required','min:3']
        ]);
        $partenaire->nom = $validated['nom'];

        $partenaire->save();

        return redirect()->route('partenaire.index')->with('success','Partenaire modifiée avec succees');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $partenaire)
    {
        $partenaire->delete();
        return redirect()->route('partenaire.index')->with('success','Partenaire suprimé avec succees');
    }
}
