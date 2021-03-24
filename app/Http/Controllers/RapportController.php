<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Evaluation;
use App\Models\Paiement;
use App\Models\Semestre;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PDF;

class RapportController extends Controller
{

    public function __construct()
    {
    }

    public function recu(int $id){

        $paiement = Paiement::findOrFail($id);

        new ModelNotFoundException('Erreur');
        //dd($paiement);

        $logo = base_path()."\logo.jpg";
        $pdf = PDF::loadView('rapport.recu', compact('paiement','logo'));

        return $pdf->stream();
    }

    public function bulletin(int $id){

        $logo = base_path()."\logo.jpg";
        //dd($logo);
        $etudiant = Etudiant::findOrFail($id);

        $pdf = PDF::loadView('rapport.bulletin', compact('etudiant', 'logo'));

        return $pdf->stream();
    }
    public function bulletin2(int $id){

        $logo = base_path()."\logo.jpg";
        //dd($logo);
        $etudiant = Etudiant::findOrFail($id);
        $semestres = Semestre::all();
        /*$eva = Evaluation::where('idec', 3)
                ->where('idsemestre', 4)
                ->count();
        dd($eva);
        dd($sem->evaluations->idec);*/
        $pdf = PDF::loadView('rapport.bulletin2', compact('etudiant', 'logo','semestres'));

        return $pdf->stream();
    }
}
