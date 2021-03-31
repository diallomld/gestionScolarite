<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bulletins de note semestre 2</title>
    <style>
        .validate{
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }
        li{
            list-style: none;
        }
        legend {
            font-style: italic
        }
        .examen-faire{
            border-left: 20px solid rgb(235, 193, 6);
            display: inline-block;
            height: 15px;
            margin: 1 1 1 5px;
        }
        .ue-invalide{
            border-left: 20px solid red;
            display: inline-block;
            height: 15px;
            margin: 1 1 1 5px;
        }
        .ue-valide{
            border-left: 20px solid rgba(4, 4, 238, 0.788);
            display: inline-block;
            height: 15px;
            margin: 1 1 1 5px;
        }
        .ue-ratrap{
            border-left: 20px solid rgba(26, 210, 235, 0.788);
            display: inline-block;
            height: 15px;
            margin: 1 1 1 5px;
        }
        .valid{
            background: blue;
            font-weight: bolder;
            color:white;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <table style="width: 100%; border: solid; margin-top: 0px;">
        <tr>
            <td>
                <img src="{{ $logo }}" alt="logo"/>
            </td>
            <td style="padding-left: 230px; float: right; text-align: center; width: 100%">
                <table border="1px">
                    <tr>
                        <td colspan="2" style="text-align: center; font-size: 30px; color: white; height: 30; background: #1809e6">Bulletin de notes <br> {{ $semestres[0]->libellesemestre}} </td>
                    </tr>
                    <tr>
                        <td>Annee accademique</td>
                        <td>{{ $etudiant->inscription->annee->anneescolaire}}</td>
                    </tr>
                    <tr>
                        <td>Matricule</td>
                        <td>{{ $etudiant->matricule }}/unipro</td>
                    </tr>
                    <tr>
                        <td>Nom et prenom</td>
                        <td>{{ $etudiant->prenom}} {{ $etudiant->nom}}</td>
                    </tr>
                    <tr>
                        <td>Sexe</td>
                        <td>{{ $etudiant->genre}}</td>
                    </tr>
                    <tr>
                        <td>Lieu & Date naissance</td>
                        <td>{{ $etudiant->datenaissance}} {{ $etudiant->lieu}}</td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
    <table border="1px" style="width: 100%; text-align: center">
        <tr>
            <td> <b> <u> Domaine </u></b> <br> {{ $etudiant->inscription->classe->filiere->mention->domaine->nomdomaine}}</td>
            <td> <b><u>Mention</u></b> <br>{{ $etudiant->inscription->classe->filiere->mention->nommention}}</td>
            <td> <b><u>Specialite</u></b> <br> {{ $etudiant->inscription->classe->filiere->nomfiliere}}</td>
            <td> <b><u>Grade</u></b> <br> {{ $etudiant->inscription->classe->nomclasse}}</td>
        </tr>
    </table>
    <table border="1px" style="width: 100%; text-align: center">
        <tr>
            <td style="150px"> <b>Ue Element constitutifs</b></td>
            <td>MCC <br> 40%</td>
            <td>Examen <br> 60% </td>
            <td>Rattrapae <br> 100% </td>
            <td>Moye <br> EC </td>
            <td>Coef <br> EC </td>
            <td>Moyenne <br> Coef </td>
            <td>Credit <br> Ec </td>
            <td>Moyenne <br> UE </td>
            <td>Appreciation </td>

        </tr>
        <?php
            // semestre 1

            $totalCredit1 = 0;
            $moySemestre1 = 0;
            $tabRecap1 = [];
            $tabCredit1 = [];
            $totalCredit1 = 0;
            $totalUe1 = 0;

            //$smestre 2 = 0;
            $moySemestre = 0;
            $tabRecap = [];
            $tabCredit = [];
            $totalCredit = 0;
            $totalUe = 0;
            ?>
        @foreach ($etudiant->inscription->classe->filiere->uniteEnseignements as $ues)

            <tr style="text-align: start">
                <td colspan="10"><b>{{ $ues->descuea }}</b></td>
            </tr>
            <?php
            // semestre 1
                $somme1 = 0;
                $sommeCoef1 = 0;
                $sommeMoyUe1 = 0;
                $devoir1 = 0;
                $examen1 = 0;
            // semestre 2
                $somme = 0;
                $sommeCoef = 0;
                $sommeMoyUe = 0;
                $devoir = 0;
                $examen = 0;
             ?>
            @foreach ($ues->ecs as $ec)
                <tr>
                    <td style="150px"> <b>{{ $ec->nomec}}</b></td>
                    @if (count($ec->evaluations) -2 == 0)
                        <td></td>
                        <td></td>
                        <td></td>
                    @else
                        @foreach ($ec->evaluations as $eva)

                            @if ($eva->semestre->libellesemestre == "semestre 2")
                                @if (count($ec->evaluations) - 2 == 1)
                                    @if ($ec->evaluations[2]->typeevaluation=="devoir" && isset($eva->note->note))
                                        <?php
                                            echo "<td>".$eva->note->note."</td>";
                                            $devoir=$eva->note->note;
                                        ?>
                                        <td></td>
                                    @elseif ($ec->evaluations[2]->typeevaluation=="examen" && isset($eva->note->note))
                                        <td></td>
                                        <?php
                                            echo "<td>".$eva->note->note."</td>";
                                            $examen=$eva->note->note;
                                        ?>
                                    @else
                                        @php
                                            echo "<td></td>";
                                            $rattrap = $eva->note->note;
                                        @endphp
                                    @endif

                                @elseif (count($ec->evaluations) -2 >= 2)
                                    @if ($ec->evaluations[2]->typeevaluation=="examen" && isset($ec->evaluations[2]->note->note))


                                        @php
                                            $devoir = $ec->evaluations[3]->note->note;
                                            $examen = $ec->evaluations[2]->note->note;
                                        @endphp
                                        <td>{{ $devoir}}</td>
                                        <td>{{ $examen}}</td>
                                    @elseif($ec->evaluations[2]->typeevaluation=="devoir" && isset($ec->evaluations[2]->note->note))
                                        @php
                                            $devoir = $ec->evaluations[2]->note->note;
                                            $examen = $ec->evaluations[3]->note->note;
                                        @endphp
                                        <td>{{ $devoir}}</td>
                                        <td>{{ $examen}}</td>
                                    @else
                                        @php
                                            echo "<td></td><td></td>";
                                            //$rattrap = $eva->note->note;
                                        @endphp
                                    @endif
                                @else
                                    <td></td>
                                    <td></td>
                                @endif



                                @if ($ec->evaluations[0]->typeevaluation=="devoir" && isset($ec->evaluations[0]->note->note))
                                    <?php
                                        //echo "<td>".$eva->note->note."</td>";
                                        $devoir1=$ec->evaluations[0]->note->note;
                                        $exmaen1=$ec->evaluations[1]->note->note;
                                    ?>
                                @elseif ($ec->evaluations[0]->typeevaluation=="examen" && isset($ec->evaluations[0]->note->note))

                                    <?php

                                        $examen1=$ec->evaluations[0]->note->note;
                                        $devoir1=$ec->evaluations[1]->note->note;
                                    ?>
                                @endif

                                @break
                            @endif
                        @endforeach
                        <td></td>
                    @endif
                    <td>
                        <?php
                            // semestre 1
                            if (isset($devoir1) and isset($examen1)) {
                                //echo 'vide';
                                $moy1 = $devoir1*0.4 + $examen1*0.6;
                                $sommeMoyUe1+=$moy1;
                            } elseif (isset($devoir1) and !isset($examen1)) {
                                $moy1 = $devoir1*0.4;
                                $sommeMoyUe1+=$moy1;
                            }elseif (!isset($devoir1) and isset($examen1)) {
                                $moy1 = $examen1*0.6;
                                $sommeMoyUe1+=$moy1;
                            }
                            // semestre 2
                            if (isset($devoir) and isset($examen)) {
                                //echo 'vide';
                                $moy = $devoir*0.4 + $examen*0.6;
                                $sommeMoyUe+=$moy;
                                echo number_format($moy,2,'.',' ');
                            } elseif (isset($devoir) and !isset($examen)) {
                                $moy = $devoir*0.4;
                                $sommeMoyUe+=$moy;
                                echo number_format($moy,2,'.',' ');
                            }elseif (!isset($devoir) and isset($examen)) {
                                $moy = $examen*0.6;
                                $sommeMoyUe+=$moy;
                                echo number_format($moy,2,'.',' ');
                            }

                        ?>
                    </td>
                    <td>
                        <?php
                        // semestre 1
                        $credit1 = ($ec->cm + $ec->td + $ec->tpe)/20;
                        $round1 = round($credit1,0,PHP_ROUND_HALF_UP);
                        $somme1+= $round1;
                        $moyCoef1 = $moy1*$round1;
                        $sommeCoef1+=$moyCoef1;
                        // semestre 2
                        $credit = ($ec->cm + $ec->td + $ec->tpe)/20;
                        $round = round($credit,0,PHP_ROUND_HALF_UP);
                        $somme+= $round;
                        echo number_format($round,2,'.',' ');
                        ?>
                    </td>
                    <td>
                        @php
                            //echo $round."|".$moy."=>";
                            $moyCoef = $moy*$round;
                            $sommeCoef+=$moyCoef;


                            echo number_format($moyCoef,2,'.',' ');

                        @endphp
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <?php
                            if ($moy>=10 and $moy<12) {
                                echo 'Passable';
                            }elseif ($moy>=12 and $moy<14) {
                                echo 'Assez-bien';
                            }elseif ($moy>=14 and $moy<16) {
                                echo 'Bien';
                            }elseif ($moy>=16 and $moy<18) {
                                echo "Tres bien";
                            }elseif ($moy>=18 and $moy<=20) {
                                echo "Excelent";
                            }else {
                                echo 'Non validé';
                            }
                        ?>
                    </td>
                </tr>
            @endforeach
            <tr style="background: gray">
                <td colspan="5"></td>
                <td><?php echo number_format($somme,2,'.',' '); ?></td>
                <td><?php echo number_format($sommeCoef,2,'.',' '); ?></td>
                <td><?php echo number_format($somme,2,'.',' '); ?></td>
                <td>
                    <?php
                        // semstre 1
                        $totalCredit1+=$somme1;
                        $divider1 = $sommeMoyUe1/count($ues->ecs);
                        $moySemestre1+= $divider1;
                        $tabRecap1[] = number_format($divider1,2,'.',' ');
                        $tabCredit1[] = $somme1;
                        $totalUe1+=1;
                        // semestre 2
                        $totalCredit+=$somme;
                        $divider = $sommeMoyUe/count($ues->ecs);
                        $moySemestre+= $divider;
                        $tabRecap[] = number_format($divider,2,'.',' ');
                        $tabCredit[] = $somme;
                        $totalUe+=1;
                        echo number_format($divider,3,'.',' ');
                    ?>
                </td>
                <td>
                @if ($divider >=10)
                    validé
                @else
                    Non validé
                @endif
                </td>
            </tr>
        @endforeach
    </table>
    @php
        $moySem = $moySemestre/$totalUe;
    @endphp
    <!-- start moy semestre 1 et 2 -->

    <table border="1" style="width: 580px; text-align: center;">
        <tr>
            <td rowspan="2" style="width: 120px;">Semestre 1</td>
            <td>Crédits</td>
            <td class="valid"><?php echo number_format($totalCredit,2,'.',' ');?>/30</td>
            <td rowspan="2" style="width: 118px;">Semestre 2</td>
            <td>Crédits</td>
            <td class="valid"><?php echo number_format($totalCredit,2,'.',' ');?>/30</td>
            <td style="width: 100px;">Total credits</td>
            <td class="valid">60.00/60</td>
        </tr>
        <tr>
            <td>Moyenne</td>
            <td class="valid">
                @php
                    $moySem1 = $moySemestre1/$totalUe1;
                    echo number_format($moySem1,2,'.',' ');
                @endphp
            </td>
            <td>Moyenne</td>
            <td class="valid">
                @php
                    echo number_format($moySem,2,'.',' ').'/20';
                @endphp
            </td>
            <td style="width: 100px;">Moy General</td>
            <td class="valid">
                @php
                    $moyGen = ($moySem1 + $moySem) / 2;
                    echo number_format($moyGen,2,'.',' ').'/20';
                @endphp
            </td>
        </tr>
        <tr>
            <td colspan="8" style="text-align: start;">
                Décision conseil de classe : Trés bon travail / Resultat: Admis(e) en classe supérieur
            </td>
        </tr>
    </table>
    <!-- end moy semestre 1 et 2 -->
    <br>
    <table border="1" style="text-align: center; width: 100%">

        <tr>
            <td rowspan="2">Recapitulatifs du 1er semestre</td>
            @php
                for ($i=1; $i < $totalUe1+1 ; $i++) {
                    echo "<td><b>UE $i</b></td>";
                }
            @endphp
            <td rowspan="2">Recapitulatifs du second semestre</td>
            @php
                for ($i=1; $i < $totalUe+1 ; $i++) {
                    echo "<td><b>UE $i</b></td>";
                }
            @endphp
        </tr>
        <tr>
            @php
                // semestre 1
                for ($i=0; $i < count($tabRecap1) ; $i++) {
                    echo "<td><b> $tabRecap1[$i]</b></td>";
                }
            @endphp
            @php
                // semestre 2
                for ($i=0; $i < count($tabRecap) ; $i++) {
                    echo "<td><b> $tabRecap[$i]</b></td>";
                }
            @endphp
        </tr>
        <tr>
            <td> Validations 1</td>
            @php
                for ($i=0; $i < count($tabRecap1) ; $i++) {
                    if ($tabRecap1[$i] >= 10 and $tabRecap1[$i] <=20 ) {
                        echo '<td class="validate" bgcolor="blue">Validé</td>';
                    }elseif ($tabRecap1[$i] < 10) {

                        echo '<td class="validate" bgcolor="red">Non Validé</td>';
                        # c
                    }else {
                        echo '<td class="validate" bgcolor="red">Erreur</td>';

                    }
                }
            @endphp
            <td> Validations 2</td>
            @php
                for ($i=0; $i < count($tabRecap) ; $i++) {
                    if ($tabRecap[$i] >= 10 and $tabRecap[$i] <=20 ) {
                        echo '<td class="validate" bgcolor="blue">Validé</td>';
                    }elseif ($tabRecap[$i] < 10) {

                        echo '<td class="validate" bgcolor="red">Non Validé</td>';
                        # c
                    }else {
                        echo '<td class="validate" bgcolor="red">Erreur</td>';

                    }
                }
            @endphp
        </tr>
        <tr>
            <td>Crédits obtenus 1</td>
            @php
                for ($i=0; $i < count($tabCredit1) ; $i++) {
                    echo "<td><b> $tabCredit1[$i]</b></td>";
                }
            @endphp
            <td>Crédits obtenus 2</td>
            @php
                for ($i=0; $i < count($tabCredit) ; $i++) {
                    echo "<td><b> $tabCredit[$i]</b></td>";
                }
            @endphp
        </tr>
    </table>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th colspan="4">Légende</th>
            </tr>
        </thead>
        <tr style="text-align: center">
            <td>MCC = Moyenne controle continue</td>
            <td>EC = Element constitutif</td>
            <td>Rattrap = Note de rattrapage</td>
            <td>Moy = Moyenne EC</td>
        </tr>
        <tr>
            <td> <span class="examen-faire"></span> Examen(s) à faire </td>
            <td> <span class="ue-invalide"></span> UE invalidé </td>
            <td> <span class="ue-valide"></span> UE validé </td>
            <td style="width: 200px"> <span class="ue-ratrap"></span> UE validé en rattrapage</td>
        </tr>
    </table>

    <p style="margin-left: 65%; margin-top: 2%"><u>Directeur des etudes</u></p>
    <p style="margin-left: 65%; margin-top: 2%"><u>Cache & Signature</u></p>

    <p style="margin-top: 5px;">Sicap Mermoz LM 7648 Dakar Fann Eamil: uniprosenegal@gmail.com Web site: wwww.uni-prosenegal.com</p>



</body>
</html>
