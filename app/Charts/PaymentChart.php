<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Paiement;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class PaymentChart extends BaseChart
{
    public function handler(Request $request): Chartisan
    {
        $janv =Paiement::where('mois',json_encode(["Mars"]))->get()->sum("montant");
        $fev =Paiement::where('mois',json_encode(["Fevrier"]))->get()->sum("montant");
        $mars =Paiement::where('mois',json_encode(["Mars"]))->get()->sum("montant");
        $avril =Paiement::where('mois',json_encode(["Avril"]))->get()->sum("montant");
        $mais =Paiement::where('mois',json_encode(["Mais"]))->get()->sum("montant");
        $Juin =Paiement::where('mois',json_encode(["Juin"]))->get()->sum("montant");
        $Aout =Paiement::where('mois',json_encode(["Aout"]))->get()->sum("montant");
        $Septembre =Paiement::where('mois',json_encode(["Septembre"]))->get()->sum("montant");
        $Octombre =Paiement::where('mois',json_encode(["Octombre"]))->get()->sum("montant");
        $Novembre =Paiement::where('mois',json_encode(["Novembre"]))->get()->sum("montant");
        $Decembre =Paiement::where('mois',json_encode(["Decembre"]))->get()->sum("montant");
        $Julliet =Paiement::where('mois',json_encode(["Julliet"]))->get()->sum("montant");

        return Chartisan::build()
            ->labels(['Jan', 'Fev', 'Mars',"Avril","Mais","Juin","Julliet","Août","Septembre","Octombre","Novembre","Decembre"])
            ->dataset('Payments Par Mois',[$janv, $fev, $mars,$avril,$mais,$Juin,$Julliet,$Aout,$Septembre,$Octombre,$Novembre,$Decembre]);
    }
}
