<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PDF;

class RecuController extends Controller
{

    public function __construct()
    {
    }

    public function recu(int $id){

        $paiement = Paiement::findOrFail($id);

        new ModelNotFoundException('Erreur');
        //dd($paiement);

        $pdf = PDF::loadView('recu.recu', compact('paiement'));

        return $pdf->stream();
    }
}
