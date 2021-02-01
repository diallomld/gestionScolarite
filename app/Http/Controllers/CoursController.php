<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Cour;
use App\Models\Ec;
use App\Models\Salle;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours = Cour::all();
        return view('cours.index', compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classe::all();
        $ecs = Ec::all();
        $salles = Salle::all();
        return view('cours.create', compact('classes','ecs','salles'));
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
            'numero' => ['required', 'exists:"\App\Models\Classe",numero'],
            'idec' => ['required', 'exists:"\App\Models\Ec",idec'],
            'idsalle' => ['required', 'exists:"\App\Models\Salle",idsalle'],
            'nomcours' => ['required','min:2'],
            'desccours' => ['required','min:2'],
            'heuredebut' => ['required','min:2'],
            'heurefin' => ['required','min:2'],
            'duree' => ['required','numeric'],
        ]);

        $cour = new Cour();

        $cour->numero = $validated['numero'];
        $cour->idec = $validated['idec'];
        $cour->idsalle = $validated['idsalle'];
        $cour->nomcours = $validated['nomcours'];
        $cour->desccours = $validated['desccours'];
        $cour->heuredebut = $validated['heuredebut'];
        $cour->heurefin = $validated['heurefin'];
        $cour->duree = $validated['duree'];

        $cour->save();

        return redirect()->route('cours.index')->with('success','Cours ajouter avec succees');
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
    public function edit(Cour $cour)
    {
        $classes = Classe::all();
        $ecs = Ec::all();
        $salles = Salle::all();
        return view('cours.edit', compact('cour','salles','ecs','classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cour $cour)
    {
        $validated = $request->validate([
            'numero' => ['required', 'exists:"\App\Models\Classe",numero'],
            'idec' => ['required', 'exists:"\App\Models\Ec",idec'],
            'idsalle' => ['required', 'exists:"\App\Models\Salle",idsalle'],
            'nomcours' => ['required','min:2'],
            'desccours' => ['required','min:2'],
            'heuredebut' => ['required','min:2'],
            'heurefin' => ['required','min:2'],
            'duree' => ['required','numeric'],
        ]);

        $cour->numero = $validated['numero'];
        $cour->idec = $validated['idec'];
        $cour->idsalle = $validated['idsalle'];
        $cour->nomcours = $validated['nomcours'];
        $cour->desccours = $validated['desccours'];
        $cour->heuredebut = $validated['heuredebut'];
        $cour->heurefin = $validated['heurefin'];
        $cour->duree = $validated['duree'];

        $cour->update();

        return redirect()->route('cours.index')->with('success','Cours modifié avec succees');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cour $cour)
    {
        $cour->delete();

        return redirect()->route('cours.index')->with('seccess','cours supprime avec success');

    }
}
