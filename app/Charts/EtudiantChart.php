<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Etudiant;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class EtudiantChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    /*public function handler(Request $request): Chartisan
        {
        return Chartisan::build()
            ->labels(['First', 'Second', 'Third'])
            ->dataset('Sample', [1, 2, 3])
            ->dataset('Sample 2', [3, 2, 1]);
    }*/
    public $senegal;
    public $guinee;
    public $gabon;
    public $togo;
    public function __construct()
    {

        $this->guinee = Etudiant::where('idnationnalite',1)->count();
        $this->senegal = Etudiant::where('idnationnalite',2)->count();
        $this->gabon = Etudiant::where('idnationnalite',3)->count();
        $this->togo = Etudiant::where('idnationnalite',"togolaise")->count();
    }
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        //dd($senegal,$gabon,$guinee,$togo);

        return Chartisan::build()
            ->labels(['Senegal',"Guinee","Gabon","Togo"])
            ->dataset('Nombre detudiants par nationnalite', [$this->senegal,$this->guinee,$this->gabon,$this->togo]);
    }
}
