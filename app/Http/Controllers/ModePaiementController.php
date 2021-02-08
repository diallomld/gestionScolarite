<?php

namespace App\Http\Controllers;

use App\Models\ModePaiement;
use Illuminate\Http\Request;

class ModePaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modepaiements = ModePaiement::all();

        return view('modepaiement.index', compact('modepaiements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modepaiement.create');
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
            'liellemodepaiement' => ['required'],
        ]);

        $modePaiement = new ModePaiement();

        $modePaiement->liellemodepaiement = $validated['liellemodepaiement'];

        $modePaiement->save();
        return redirect()->route('modepaiement.index')->with('success',' la mode Paiement a ete créee avec succes');
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
    public function edit(ModePaiement $modepaiement)
    {
        return view('modepaiement.edit',compact('modepaiement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModePaiement $modepaiement)
    {
        $validated = $request->validate([
            'liellemodepaiement' => ['required'],
            
        ]);

        $modepaiement->liellemodepaiement = $validated['liellemodepaiement'];
        

        $modepaiement->update();

        return redirect()->route('modepaiement.index')->with('success',' le mode de paiemen a ete modiier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModePaiement $modepaiement)
    {
        $modepaiement->delete();
        return redirect()->route('modepaiement.index')->with('success',' la modepaiement a ete supprimer avec succes');
    }
}
