<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Ec;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        return view('evaluation.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ecs = Ec::all();
        $classes = Classe::all();
        return view('evaluation.create', compact('ecs','classes'));
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
            
            'idec' => ['required','exists:"App\Models\Ec",idec'],
            'numero' => ['required','exists:"App\Models\Classe",numero'],
            'dateevaluation' => ['required'],
            'typeevaluation' => ['required'],
            
        ]);

        $evaluation = new Evaluation();
        $evaluation->idec = $validated['idec'];
        $evaluation->numero = $validated['numero'];
        $evaluation->dateevaluation = $validated['dateevaluation'];
        $evaluation->typeevaluation = $validated['typeevaluation'];

        $evaluation->save();

        return redirect()->route('evaluation.index')->with('success',' l\'evaluation a ete créee avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        $ecs = Ec::all();
        $classes = Classe::all();
        return view('evaluation.edit',compact('evaluation','ecs','classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        $validated = $request->validate([
            
            'idec' => ['required','exists:"App\Models\Ec",idec'],
            'numero' => ['required','exists:"App\Models\Classe",numero'],
            'dateevaluation' => ['required'],
            'typeevaluation' => ['required'],
            
        ]);

        $evaluation->idec = $validated['idec'];
        $evaluation->numero = $validated['numero'];
        $evaluation->dateevaluation = $validated['dateevaluation'];
        $evaluation->typeevaluation = $validated['typeevaluation'];

        $evaluation->update();

        return redirect()->route('evaluation.index')->with('success',' l\'evaluation a ete modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return redirect()->route('evaluation.index')->with('success',' l\'evaluation a ete modifier avec succes');
    }
}
