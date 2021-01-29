<?php

namespace App\Http\Controllers;

use App\Models\Ec;
use App\Models\Ue;
use Illuminate\Http\Request;

class EcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecs = Ec::all();
        return view('ec.index', compact('ecs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ues = Ue::all();
        return view('ec.create', compact('ues'));
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
            'iduea' => ['required', 'exists:"\App\Models\Ue",iduea'],
            'nomec' => ['required', 'min:3'],
            'cm' => ['required', 'numeric'],
            'td' => ['required', 'numeric'],
            'sigleec' => ['required', 'min:3'],
            'tpe' => ['required', 'numeric']
        ]);


        $ec = new Ec();

        $ec->iduea = $validated['iduea'];
        $ec->nomec = $validated['nomec'];
        $ec->cm = $validated['cm'];
        $ec->td = $validated['td'];
        $ec->sigleec = $validated['sigleec'];
        $ec->tpe = $validated['tpe'];

        $ec->save();

        return redirect()->route('ec.index')->with('success',' Bravo ! L\'EC a ete crée avec success');
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
    public function edit(Ec $ec)
    {
        $ues = Ue::all();
        return view('ec.edit', compact('ec','ues'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ec $ec)
    {
        $validated = $request->validate([
            'iduea' => ['required', 'exists:"\App\Models\Ue",iduea'],
            'nomec' => ['required', 'min:3'],
            'cm' => ['required', 'numeric'],
            'td' => ['required', 'numeric'],
            'sigleec' => ['required', 'min:3'],
            'tpe' => ['required', 'numeric']
        ]);

        $ec->iduea = $validated['iduea'];
        $ec->nomec = $validated['nomec'];
        $ec->cm = $validated['cm'];
        $ec->td = $validated['td'];
        $ec->sigleec = $validated['sigleec'];
        $ec->tpe = $validated['tpe'];

        $ec->update();

        return redirect()->route('ec.index')->with('success',' Bravo ! L\'EC a ete modifer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ec $ec)
    {
        $ec->delete();

        return redirect()->route('ec.index')->with('success','L\'ec a ete supprimer avec success ');
    }
}
