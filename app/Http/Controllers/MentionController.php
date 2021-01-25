<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Mention;
use Illuminate\Http\Request;

class MentionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentions = Mention::all();

        return view('mention.index', compact('mentions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domaines = Domaine::all();

        return view('mention.create', compact('domaines'));
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
            'nommention' => ['required','min:3'],
            'iddomaine' => ['required','exists:"\App\Models\Domaine","iddomaine'],
        ]);

        $mention = new Mention();

        $mention->nommention = $validated['nommention'];
        $mention->iddomaine = $validated['iddomaine'];

        $mention->save();
        return redirect()->route('mention.index')->with('success',' la mention a ete créee avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mention  $mention
     * @return \Illuminate\Http\Response
     */
    public function show(Mention $mention)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mention $mention)
    {
        $domaines = Domaine::all();
        return view('mention.edit',compact('mention','domaines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mention $mention)
    {
        $validated = $request->validate([
            'nommention' => ['required','min:3'],
            'iddomaine' => ['required','exists:"\App\Models\Domaine","iddomaine'],
        ]);

        //dd($request->all());
        $mention->nommention = $validated['nommention'];
        $mention->iddomaine = $validated['iddomaine'];

        $mention->update();
        return redirect()->route('mention.index')->with('success',' la mention a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mention  $mention
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mention $mention)
    {
        $mention->delete();
        return redirect()->route('mention.index')->with('success',' la mention a ete supprimer avec succes');

    }
}
