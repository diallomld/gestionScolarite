<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\ModePaiement;
use App\Models\Paiement;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class PaimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paiements = Paiement::all();
        //dd(json_decode($paiements[0]->mois));
        return view('paiement.index', compact('paiements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mois = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Julliet',
            'Aout','Septembre','Octombre','Novembre', 'Decembre',
        ];

        $etudiants = Etudiant::all();
        $modePaiements = ModePaiement::all();
        return view('paiement.create', compact('etudiants','modePaiements','mois'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricule' => ['required', 'exists:"\App\Models\Etudiant",matricule'],
            'modepaiement' => ['required', 'exists:"\App\Models\ModePaiement",idmodepaiement'],
            'mois' => ['required'],
            'datepaiement' => ['required', 'date'],
            'montant' => ['required','numeric'],
            'libelle' => ['required'],
            'observation' => ['required','min:3'],
        ]);

        //dd($request->mois);
        //dd(json_encode($request->mois));
        $paiement = new Paiement();
        $paiement->matricule = $request->matricule;
        $paiement->idmodepaiement = $request->modepaiement;
        $paiement->datepaiement = $request->datepaiement;
        $paiement->observation = $request->observation;
        $paiement->libelle = $request->libelle;
        $paiement->mois = json_encode($request->mois);

        $paiement->montant = $request->montant;

        $paiement->save();

        return redirect()->route('recu', $paiement);
        //return redirect()->route('paiement.index')->with('success','Paiement ajouter avec succees');

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
    public function edit(Paiement $paiement)
    {
        $mois = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Julliet',
            'Aout','Septembre','Octombre','Novembre', 'Decembre',
        ];
        $etudiants = Etudiant::all();
        $modePaiements = ModePaiement::all();
        return view('paiement.edit', compact('paiement','mois','etudiants','modePaiements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paiement $paiement)
    {
        $request->validate([
            'matricule' => ['required', 'exists:"\App\Models\Etudiant",matricule'],
            'modepaiement' => ['required', 'exists:"\App\Models\ModePaiement",idmodepaiement'],
            'mois' => ['required'],
            'datepaiement' => ['required', 'date'],
            'montant' => ['required','numeric'],
            'libelle' => ['required'],
            'observation' => ['required','min:3'],
        ]);
        $paiement->matricule = $request->matricule;
        $paiement->idmodepaiement = $request->modepaiement;
        $paiement->datepaiement = $request->datepaiement;
        $paiement->observation = $request->observation;
        $paiement->libelle = $request->libelle;
        $paiement->mois = json_encode($request->mois);
        $paiement->montant = $request->montant;

        $paiement->save();

        return redirect()->route('paiement.index')->with('success','Paiement modifié avec succees');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paiement $paiement)
    {
        $paiement->delete();

        return redirect()->route('paiement.index')->with('success', 'Paiement supprimé avec success');
    }
}
