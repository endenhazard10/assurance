<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facture assurance vehicule</title>
</head>
<body style="border: solid 2px;">
    <div style="width: 100%;background-color:blue;">
        <p style="font-size: 25px;text-align:center;color:#fff;font-weight:bold;">RECU ENCAISSEMENT</p>
    </div>
    <p style="margin-left: 100px;"><span style="color: blue">AXA</span> <span style="color: red;">VOTRE</span> <span style="color: blue">SERVICE</span></p>
    <p style="margin-left:100px;">Assuré ou Souscripteur</p>
    <p style="margin-left:150px;font-weight:bold;text-transform:capitalize;">{{ ucwords($assurance[0]->prenom) }} {{ ucwords($assurance[0]->nom) }} </p>
    <table width="50%" style="ma" align="center">
        <tr>
            <td style="font-size: 12px;line-height: 1.5;margin-left:50px !important;">
                AXA ASSURANCE SENEGAL
                {{-- 5, place de l'indépendance <br>
                BP 182 Dakar – Sénégal --}}
            </td>
            <td style="text-align: left; font-size:12px; margin-right:50px;text-transform:uppercase;">
                POLICE Numéro {{ ucwords($assurance[0]->numero_police) }}
            </td>
            {{-- <td style="text-align: right; font-size:12px;">
                DATE EFFET {{ ucwords($assurance[0]->date_effet) }}
            </td>
            <td style="text-align: right; font-size:12px;">
                DATE ECHEANCE {{ ucwords($assurance[0]->date_echeance) }}
            </td> --}}
        </tr>
        <tr>
            <td style="font-size: 12px;line-height: 1.5;">
                5, place de l'indépendance
                {{-- 5, place de l'indépendance <br>
                BP 182 Dakar – Sénégal --}}
            </td>
            <td style="text-align: left; font-size:12px;">
                DATE EFFET {{ ucwords($assurance[0]->date_effet) }}
            </td>
        </tr>
        <tr>
            <td style="font-size: 12px;line-height: 1.5;">
                BP 182 Dakar – Sénégal
                {{-- 5, place de l'indépendance <br>
                BP 182 Dakar – Sénégal --}}
            </td>
            <td style="text-align: left; font-size:12px;">
                DATE ECHEANCE {{ ucwords($assurance[0]->date_echeance) }}
            </td>
        </tr>
    </table>
    <br><br>
    <div style="width: 70%;margin-left:15%;border:solid 2px;">
        <p style="font-size: 15px;margin-left:12px;">Au titre de la Police  TRANSPORT DE PERSONNES A TITRE ONEREUX</p>
        <p style="text-transform: capitalize;text-align:center;">Numéro :  {{ ucwords($assurance[0]->numero_client) }}
            Avenant : @if($assurance[0]->numero_avenant) {{$assurance[0]->numero_avenant}} @else 0000000 @endif</p>
        <p style="text-transform: capitalize;text-align:center;">Pour la période allant du  {{ ucwords($assurance[0]->date_effet) }} au {{ ucwords($assurance[0]->date_echeance) }}</p>
       </div>
    <br><br><br>
    <p style="margin-left:100px;">Détail Facture</p>
    <div style="width: 70%;margin-left:15%;border:solid 2px;">
        <table width="50%" align="center">
            <tr>
                <td style="font-size: 12px;line-height: 1.5;margin-left:50px !important;">
                    Prime Nette 
                </td>
                <td style="text-align: left; font-size:12px; margin-right:50px;">
                    {{ ucwords($assurance[0]->prime_nette) }} FCFA
                </td>
            </tr>
            <tr>
                <td style="font-size: 12px;line-height: 1.5;margin-left:50px !important;">
                    Accessoires
                </td>
                <td style="text-align: left; font-size:12px; margin-right:50px;">
                    {{ ucwords($assurance[0]->accessoires) }} FCFA
                </td>
            <tr>
            <tr>
                <td style="font-size: 12px;line-height: 1.5;margin-left:50px !important;">
                    Prime TTC
                </td>
                <td style="text-align: left; font-size:12px; margin-right:50px;">
                    {{ ucwords($assurance[0]->prime_ttc) }} FCFA
                </td>
            <tr>
        </table>
    </div>
    <br><br>
    <div style="width: 70%;background-color:blue;margin-left:15%;">
    <p style="text-align: center;color:#fff;font-weight:bold;">PRIME TOTALE A PAYER : {{ ucwords($assurance[0]->prime_ttc) }} FCFA</p>
    </div>
    <br>
    <p style="text-align: center;font-weight:bold !important;font-size:12px !important;">Article 13 du Code CIMA Conformément aux dispositions de l’Article 13 et suivants du Code des Assurances (Code CIMA)
        « La prise d’effet du contrat est subordonnée au paiement intégral de la prime ».</p>
    <p style="text-align: center">Fait à Dakar le : {{ ucwords($date) }}</p>
    <p style="text-align: center;font-weight:bold;text-decoration: underline;">Pour la compagnie</p>
</body>
</html>