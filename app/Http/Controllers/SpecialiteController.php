<?php

namespace App\Http\Controllers;

use App\Models\Mention;
use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialites = Specialite::all();
        return view('specialite.index', compact('specialites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentions = Mention::all();
        return view('specialite.create', compact('mentions'));
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
            'nomfiliere' => ['required', 'min:3'],
            'mention' => ['required','exists:"\App\Models\Mention",idmention']
        ]);

        $specialite = new Specialite();
        $specialite->nomfiliere = $validated['nomfiliere'];
        $specialite->idmention = $validated['mention'];

        $specialite->save();
        return redirect()->route('specialite.index')->with('success',' la specialite a ete créee avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function show(Specialite $specialite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialite $specialite)
    {
        $mentions = Mention::all();
        return view('specialite.edit',[
            'mentions' => $mentions,
            'specialite' => $specialite,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialite $specialite)
    {
        $validated = $request->validate([
            'nomfiliere' => ['required', 'min:3'],
            'mention' => ['required','exists:"\App\Models\Mention",idmention']
        ]);

        $specialite->nomfiliere = $validated['nomfiliere'];
        $specialite->idmention = $validated['mention'];

        $specialite->update();
        return redirect()->route('specialite.index')->with('success',' la specialite a ete modifier avec succes');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialite $specialite)
    {
        $specialite->delete();
        return redirect()->route('specialite.index')->with('success',' la specialite a ete supprimer avec succes');
    }
}
