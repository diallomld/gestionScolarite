<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salles = Salle::all();
        return view('salle.index',compact('salles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salle.create');
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
            'nomsalle' => ['required'],
            'capacite' => ['required'],
            
        ]);

        $salle = new Salle();
        $salle->nomsalle = $validated['nomsalle'];
        $salle->capacite = $validated['capacite'];

        $salle->save();

        return redirect()->route('salle.index')->with('success',' la salle a ete créee avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function show(Salle $salle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function edit(Salle $salle)
    {
        return view('salle.edit',compact('salle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salle $salle)
    {
        $validated = $request->validate([
            'nomsalle' => ['required','min:3'],
            'capacite' => ['required','numeric'],
            
        ]);

        $salle->nomsalle = $validated['nomsalle'];
        $salle->capacite = $validated['capacite'];
        

        $salle->update();

        return redirect()->route('salle.index')->with('success',' la salle a ete modiier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salle $salle)
    {
        $salle->delete();
        return redirect()->route('salle.index')->with('success',' la salle a ete supprimer avec succes');
    }
}
