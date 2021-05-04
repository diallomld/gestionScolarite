<?php

namespace App\Http\Controllers;

use App\Models\Nationnalite;
use Illuminate\Http\Request;

class PaymentChart extends Controller
{
    //

    public function index(){

        $mois = array("Janvier","Février","Mars","Avril","Mai","Juin","Julliet","Août","Septembre","Octombre","Novembre","Decembre");

     //$nations = Nationnalite::all(['nom']);
        $data =[15000,25000, 155000, 157000, 185000, 135000, 125000, 15000, 150000, 115000, 35000, 20000];

        return view('charts.payment', compact('mois','data'));
    }
}
