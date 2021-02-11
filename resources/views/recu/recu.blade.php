<!DOCTYPE html>
<html>
<head>
    <title>Recu</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <style>
        .section{
            align-content: space-between;
            color: blue;
            display: inline-flex;
            flex: 30%;
        }
        .end{
            color: rgb(66, 39, 223)

            justify-content: end;
        }
        .start{
            justify-content: start;
        }
        li{
            list-style: none;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>
                <img src="http://placehold.it/100x100" alt="">
            </td>
            <td style="margin: 20%;">
                <p><b>Univers professionnel</b></p>
                <p>Faites vos etudes en entreprise</p>
                <p>Aut n^ 232 MESR/DEGES/DESP</p>
            </td>
        </tr>
    </table>
    <table class="">
        <td>
            411-21-4544/Unipro
        </td>
        <td class="content-end" style="float: right">
            <b>Sevice Facturation Unipro</b>
        </td>
    </table>

    <table>
        <tr>
            <td style="width: 300px;">
                <fieldset>
                    <legend>info reçu</legend>
                    <p>n reçu: 21 061</p>
                    <p>Date: {{ $paiement->datepaiement}}</p>
                    <p>Encaissé par: unipro-kn</p>
                    <p>N bordereau: </p>
                    <p>Classe: {{ $paiement->etudiant->inscription->classe->nomclasse}}</p>
                    <p>Mode paiement: {{ $paiement->modepaiement->libellemodepaiement}}</p>
                    <p>N chéque:</p>
                    <p>Banque chéque:</p>
                </fieldset>
            </td>
            <td style="width:300px;">
                <fieldset>
                    <legend>{{ $paiement->etudiant->matricule}}</legend>
                    <p>{{ $paiement->etudiant->nom}} {{ $paiement->etudiant->prenom}} </p>
                </fieldset>
            </td>
        </tr>
    </table>

    <div>
        <fieldset>

            <ul>
                <li>nature: {{ $paiement->observation}}</li>
                <li>a titre de: ouverture</li>
                <li>Annee: {{ $paiement->etudiant->inscription->annee->anneescolaire}}</li>
                <li>Total recu: {{ $paiement->montantpaiement}}</li>
                <li>
                    <p>Cantine: 0, Transport:0, Scolarite: 1000</p>
                <li>
            </ul>
        </fieldset>
    </div>
    <div>
        <p>Nb: Paiement le 5 de chaque mois au plus tard</p>

        <fieldset> <legend><b>Rappel  des factures restantes</b></legend>
            <table>
                <tr>
                    <td>
                        <p>Oct: 0</p>
                        <p>Nov: 0</p>
                        <p>Dé: 0</p>
                        <p>JanvP: 0</p>
                    </td>
                    <td>
                        <p>Jan: 0</p>
                        <p>Fev: 0</p>
                        <p>Mars: 0</p>
                        <p>FevP: 0</p>
                    </td>
                    <td>
                        <p>Avril: 0</p>
                        <p>Mais: 0</p>
                        <p>Jun: 0</p>
                        <p>MarsP: 0</p>
                    </td>
                    <td>
                        <p>Julliet: 0</p>
                        <p>Août: 0</p>
                        <p>Sept: 0</p>
                        <p>AvrilP: 0</p>
                    </td>
                    <td>
                        <p>Oct: 0</p>
                        <p>Nov: 0</p>
                        <p>Dé: 0</p>
                        <p>MaiP: 0</p>
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
    <table>
        <tr>
            <td>
                <i>Caché et signature exigés</i>
            </td>
            <td> <b>Caisse</b> </td>
        </tr>
    </table>
    <table>
        <tr>
            <td> 03/12/2020 à 09:55:51</td>
            <td>caché</td>
        </tr>
    </table>
</body>
</html>
