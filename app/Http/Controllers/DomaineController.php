<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use Illuminate\Http\Request;

class DomaineController extends Controller
{

    public $domaine;

    public function __construct(Domaine $domaine)
    {
        $this->domaine = $domaine;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $domaines = Domaine::all();

        return view('demaine.index', compact('domaines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demaine.create');
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
            'nomdomaine'=> ['required', 'min:5']
        ]);

        $this->domaine->nomdomaine = $validated['nomdomaine'];
        $this->domaine->save();
        return redirect()->route('domaine.index')->with('success',' le domaine a ete créee avec succes');
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
    public function edit(Domaine $domaine)
    {
        return view('demaine.edit',compact('domaine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domaine $domaine)
    {
        $validated = $request->validate([
            'nomdomaine'=> ['required', 'min:3']
        ]);

        $domaine->nomdomaine = $validated['nomdomaine'];
        $domaine->update();
        return redirect()->route('domaine.index')->with('success',' le domaine a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domaine $domaine )
    {
        $domaine->delete();
        return redirect()->route('domaine.index')->with('success',' le domaine a ete supprime avec succes');

    }
}
