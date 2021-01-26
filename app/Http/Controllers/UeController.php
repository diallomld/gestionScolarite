<?php

namespace App\Http\Controllers;

use App\Models\Specialite;
use App\Models\Ue;
use Illuminate\Http\Request;

class UeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ues = Ue::all();
        return view('ue.index', compact('ues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialites = Specialite::all();
        return view('ue.create', compact('specialites'));
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
            'descuea' => ['required', 'min:3'],
            'typeuea' => ['required', 'min:3'],
            'sigleuea' => ['required', 'min:3'],
            'filiere' => ['required','exists:"\App\Models\Specialite",idfiliere']
        ]);

        $ue = new Ue();
        $ue->idfiliere = $validated['filiere'];
        $ue->typeue = $validated['typeuea'];
        $ue->sigleue = $validated['sigleuea'];
        $ue->descuea = $validated['descuea'];

        $ue->save();
        return redirect()->route('ue.index')->with('success',' l\unite d\'enseignement a ete créee avec succes');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ue  $ue
     * @return \Illuminate\Http\Response
     */
    public function show(Ue $ue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ue  $ue
     * @return \Illuminate\Http\Response
     */
    public function edit(Ue $ue)
    {
        $filieres = Specialite::all();
        return view('ue.edit', compact('ue','filieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ue  $ue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ue $ue)
    {
        $validated = $request->validate([
            'descuea' => ['required', 'min:3'],
            'typeue' => ['required', 'min:3'],
            'sigleue' => ['required', 'min:3'],
            'filiere' => ['required','exists:"\App\Models\Specialite",idfiliere']
        ]);
        $ue->idfiliere = $validated['filiere'];
        $ue->typeue = $validated['typeue'];
        $ue->sigleue = $validated['sigleue'];
        $ue->descuea = $validated['descuea'];

        $ue->update();
        return redirect()->route('ue.index')->with('success',' l\unite d\'enseignement a ete modifiée avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ue  $ue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ue $ue)
    {
        $ue->delete();

        return redirect()->route('ue.index')->with('success', ' l\unite d\'enseignement a ete suprimer avec succes');
    }
}
