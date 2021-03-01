<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bulletins de note</title>
    <style>
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
    </style>
</head>
<body>
    <table style="width: 100%; border: solid">
        <tr>
            <td>
                <img src="{{ $logo }}" alt="logo"/>
            </td>
            <td style="padding-left: 200px; float: right; text-align: center; width: 100%">
                <table border="1px">
                    <tr>
                        <td colspan="2" style="text-align: center; font-size: 30px; color: white; height: 30; background: #5897fb">Bulletin de semestre 1</td>
                    </tr>
                    <tr>
                        <td>Annee accademique</td>
                        <td>2019-2020</td>
                    </tr>
                    <tr>
                        <td>Matricule</td>
                        <td>411-20-3625/unipro</td>
                    </tr>
                    <tr>
                        <td>Nom et prenom</td>
                        <td>Lamine Diallo</td>
                    </tr>
                    <tr>
                        <td>Sexe</td>
                        <td>Masculin</td>
                    </tr>
                    <tr>
                        <td>Lieu & Date naissance</td>
                        <td>01.01.2020 Thies</td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
    <table border="1px" style="width: 100%; text-align: center">
        <tr>
            <td> <b> <u> Domaine </u></b> <br> science et technolgie</td>
            <td> <b><u>Filiere</u></b> <br>Informatique</td>
            <td> <b><u>Specialite</u></b> <br> genie informatique</td>
            <td> <b><u>Specialite</u></b> <br> genie informatique</td>
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
        <tr style="text-align: start">
            <td colspan="10"><b>UE 411 PRORAMMATION</b></td>
        </tr>
        <tr>
            <td style="150px"> <b>Java</b></td>
            <td> 16.50 </td>
            <td> 16.50 </td>
            <td></td>
            <td> 16.50 </td>
            <td> 5.0 </td>
            <td>82.0</td>
            <td></td>
            <td></td>
            <td>Tres bien </td>
        </tr>
        <tr>
            <td style="150px"> <b>Rappel POO</b></td>
            <td> 18.50 </td>
            <td> 17.50 </td>
            <td></td>
            <td> 17.50 </td>
            <td> 5.0 </td>
            <td>82.0</td>
            <td></td>
            <td></td>
            <td>Excelent</td>
        </tr>
        <tr style="background: gray">
            <td colspan="5"></td>
            <td>10.00 </td>
            <td>162.00</td>
            <td>10</td>
            <td>16.02</td>
            <td>Validé</td>
        </tr>
    </table>

    <table border="1">
        <tr>
            <td style="width: 580px;"><b>Total credit obtenus:</b></td>
            <td style="color: #441adb; font-weight: bold; font-size: 30px">30.00/30</td>
        </tr>
        <tr>
            <td><b>Moyenne du Semestre</b></td>
            <td style="color: #441adb; font-weight: bold; font-size: 30px">17.73/20</td>
        </tr>
        <tr>
            <td colspan="2">Apreciation conseil de classe: <b>Tres bon boulot</b></td>
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

</body>
</html>
