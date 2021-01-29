<?php

namespace App\Http\Controllers;

use App\Models\Nationnalite;
use Illuminate\Http\Request;

class NationnaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nationnalites = Nationnalite::all();

        return view('nationnalite.index', compact('nationnalites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nationnalite.create');
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
            'nom'=> ['required']
        ]);
        
        $nationnalite = new Nationnalite();
        $nationnalite->nom = $validated['nom'];
        $nationnalite->save();
        return redirect()->route('nationnalite.index')->with('success',' la nationnalite a ete créee avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nationnalite  $nationnalite
     * @return \Illuminate\Http\Response
     */
    public function show(Nationnalite $nationnalite)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nationnalite  $nationnalite
     * @return \Illuminate\Http\Response
     */
    public function edit(Nationnalite $nationnalite)
    {
        return view('nationnalite.edit',compact('nationnalite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nationnalite  $nationnalite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nationnalite $nationnalite)
    {
        $validated = $request->validate([
            'nom' => ['required'],
            
        ]);

        $nationnalite->nom = $validated['nom'];        

        $nationnalite->update();
        return redirect()->route('nationnalite.index')->with('success',' la nationnalite a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nationnalite  $nationnalite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nationnalite $nationnalite)
    {
        $nationnalite->delete();
        return redirect()->route('nationnalite.index')->with('success',' la nationnalite a ete supprimer avec succes');
    }
}
