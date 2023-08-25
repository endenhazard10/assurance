<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facture assurance vehicule</title>
</head>
<body style="border: solid 2px;">
    <p style="font-size: 25px;text-align:center;">RECU ENCAISSEMENT</p>
    <p><span style="color: blue">AXA</span> <span style="color: red;">VOTRE</span> <span style="color: blue">SERVICE</span></p>
    <table width="50%" style="ma" align="center">
        <tr>
            <td style="font-size: 12px;line-height: 1.5;margin-left:50px !important;">
                AXA ASSURANCE SENEGAL
                {{-- 5, place de l'indépendance <br>
                BP 182 Dakar – Sénégal --}}
            </td>
            <td style="text-align: left; font-size:12px; margin-right:50px;">
                POLICE N {{ ucwords($assurance[0]->numero_police) }}
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
    <br><br><br><br>
    <p style="margin-left:100px;">De</p>
    <p style="text-transform: capitalize;margin-left:100px;">{{ ucwords($assurance[0]->prenom) }} {{ ucwords($assurance[0]->nom) }}</p>
    <p style="text-transform: capitalize;margin-left:100px;">{{ ucwords($assurance[0]->adresse) }}</p>
    <p style="text-align: center;font-weight:bold;">{{ ucwords($assurance[0]->marque) }}</p>
    <p style="text-transform: capitalize;margin-left:100px;">Enregistrer sous le numero : {{ ucwords($assurance[0]->immatriculation) }}</p>
    <br><br>
    <p style="text-align: center">Recu la somme de : {{ ucwords($assurance[0]->prime_ttc) }} FCFA</p>
    <p style="text-align: center">Fait à Dakar le : {{ ucwords($date) }}</p>
    <p style="text-align: center;font-weight:bold;text-decoration: underline;">Pour la compagnie</p>
</body>
</html>