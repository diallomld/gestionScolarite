<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Specialite;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe::all();
        return view('classe.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialites = Specialite::all();
        return view('classe.create',compact('specialites'));
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
            'idfiliere' => ['required', 'exists:"\App\Models\Specialite",idfiliere'],
            'nomclasse' => ['required', 'min:2', 'unique:classe'],
            'fraisscolarite' => ['required', 'numeric'],
            'fraisinscription' => ['required', 'numeric'],
        ]);

        $classe = new Classe();

        $classe->idfiliere = $validated['idfiliere'];
        $classe->nomclasse = $validated['nomclasse'];
        $classe->fraisscolarite = $validated['fraisscolarite'];
        $classe->fraisinscription = $validated['fraisinscription'];
        $classe->save();

        return redirect()->route('classe.index')->with('success','Classe ajouter avec succees');
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
    public function edit(Classe $classe)
    {
        $specialites = Specialite::all();
        return view('classe.edit', compact('classe','specialites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        $validated = $request->validate([
            'idfiliere' => ['required', 'exists:"\App\Models\Specialite",idfiliere'],
            'nomclasse' => ['required', 'min:2'],
            'fraisscolarite' => ['required', 'numeric'],
            'fraisinscription' => ['required', 'numeric'],
        ]);
        $classe->idfiliere = $validated['idfiliere'];
        $classe->nomclasse = $validated['nomclasse'];
        $classe->fraisscolarite = $validated['fraisscolarite'];
        $classe->fraisinscription = $validated['fraisinscription'];
        $classe->save();

        return redirect()->route('classe.index')->with('success','La classe modifiée avec succees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        $classe->delete();

        return redirect()->route('classe.index')->with('success', 'La classe a été supprimé avec succees');
    }
}
