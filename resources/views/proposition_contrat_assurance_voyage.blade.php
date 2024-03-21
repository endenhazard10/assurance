<!DOCTYPE html>
<html>

<head>
    <title>Contrat assurance vehicule</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>

<body>
    <div
        style="border-top: solid 10px #00008F;border-left: solid 2px #00008F;border-right: solid 2px #00008F;border-bottom: solid 2px #00008F;">
        <table width="100%">
            <tr>
                <td>
                    <img src="https://i.postimg.cc/02ytsVtw/Axa-Egypt.png" alt="" height="80px" width="100px"
                        style="border-radius: 10%;">
                </td>
                <td style="text-align: left;font-size:13px;">
                    AXA ASSURANCE SENEGAL <br>
                    5, place de l'indépendance <br>
                    BP 182 Dakar – Sénégal
                </td>
                <td style="text-align: left;font-size:13px;">
                    CONDITIONS PARTICULIÉRES <br>
                    Axa Voyage <br>
                    POLICE N : 3443455567766767
                </td>
            </tr>
        </table>
    </div>
    <hr height="200px" style="color: #00008F;height:10px;background-color:#00008F">
    <p style="color: #00008F;text-align: justify;font-size:13px;">Le présent contrat est régi par le code CIMA, ainsi
        que les présentes Conditions Particulières et les Conditions Générales Annexées.
        Il a pour objet de garantir l'assuré en cas d'accident ou de maladie grave, soudaine et imprevisible, survenu en
        cours de voyage, pendant la période de
        garantie indiquée ci-après et ceux, à concurrence des capitaux fixés ci-dessous. </p>
    <div style="border-left: solid 2px #00008F;border-right: solid 2px #00008F;border-bottom: solid 2px #00008F;">
        <p style="text-align: center;background-color: #00008F;color:#fff;font-weight:bold;font-size:13px;">PERSONNE
            ASSUREE</p>
        <table width="100%">
            <tr style="font-size:13px;">
                <td style="font-size:13px;">
                    Nom :
                </td>
                <td style="text-align: left;font-size:13px;font-size:13px;">
                    {{ ucfirst(session()->get('nom_voyage')) }}
                </td>
                <td style="text-align: left;font-size:13px;font-size:13px;">
                    Adresse
                </td>
                <td style="text-align: left;font-size:13px;font-size:13px;">
                    {{ ucfirst(session()->get('adresse_voyage')) }}
                </td>
            </tr>
            <tr>
                <td style="font-size:13px;font-size:13px;">
                    Prénom
                </td>
                <td style="text-align: left;font-size:13px;font-size:13px;">
                    {{ ucfirst(session()->get('prenom_voyage')) }}
                </td>
                <td style="text-align: left;font-size:13px;font-size:13px;">
                    N Passeport
                </td>
                <td style="text-align: left;font-size:13px;font-size:13px;">
                    {{ ucfirst(session()->get('numero_passeport_voyage')) }}
                </td>
            </tr>
            <tr>
                <td style="font-size:13px;font-size:13px;">
                    Date de naissance :
                </td>
                <td style="text-align: left;font-size:13px;">
                    {{ ucfirst(session()->get('date_de_naissance_voyage')) }}
                </td>
                <td style="text-align: left;font-size:13px;">
                    Délivré le
                </td>
                <td style="text-align: left;font-size:13px;">
                    20-08-2018
                </td>
            </tr>
            <tr>
                <td>
                    Lieu de naissance :
                </td>
                <td style="text-align: left;font-size:13px;">
                    Dakar
                </td>
                <td style="text-align: left;font-size:13px;">
                    Validité
                </td>
                <td style="text-align: left;font-size:13px;">
                    05-04-2028
                </td>
            </tr>
        </table>
    </div>
    <div style="border-left: solid 2px #00008F;border-right: solid 2px #00008F;border-bottom: solid 2px #00008F;">
        <p style="text-align: center;background-color: #00008F;color:#fff;font-weight:bold;font-size:13px;">VOYAGE</p>
        <table width="100%">
            <tr>
                <td style="font-size:13px;">
                    Trajet : Dakar - Monde Entier - Dakar :
                </td>
                <td style="text-align: left;font-size:13px;">
                    Du 03/10/2022 au 12/12/2024
                </td>
            </tr>
        </table>
    </div>
    <div style="border-left: solid 2px #00008F;border-right: solid 2px #00008F;border-bottom: solid 2px #00008F;">
        <p style="text-align: center;background-color: #00008F;color:#fff;font-weight:bold;font-size:13px;">PRESTATAIRE
        </p>
        <table width="100%">
            <tr>
                <td style="font-size:13px;">
                    - Assistance médicale
                </td>
            </tr>
            <tr>
                <td style="font-size:13px;">
                    - Transport médicalisé : frais réels
                </td>
            </tr>
            <tr>
                <td style="font-size:13px;">
                    - Frais médicaux d'urgence : 20 000 000 FCFAavec une franchise de 65 000 FCFA
                </td>
            </tr>
            <tr>
                <td style="font-size:13px;">
                    - Soins d'entaires d'urgences : 200 000 FCFA avec une franchise de 35 000 FCFA
                </td>
            </tr>
            <tr>
                <td style="font-size:13px;">
                    - Rapatriement du corps : Frais réels
                </td>
            </tr>
            <tr>
                <td style="font-size:13px;">
                    - Recherche de Bagages égarés
                </td>
            </tr>
            <tr>
                <td style="font-size:13px;">
                    - Avance de caution pénale à concurrence 3 300 000 FCFA et frais d'avocat à concurrence de 330 000
                    FCFA
                </td>
            </tr>
        </table>
    </div>
    <div style="border-left: solid 2px #00008F;border-right: solid 2px #00008F;border-bottom: solid 2px #00008F;">
        <p style="text-align: center;background-color: #00008F;color:#fff;font-weight:bold;font-size:13px;">VOYAGE</p>
        <table width="100%">
            <tr>
                <td style="font-size:13px;">
                    PRIME NETTE
                </td>
                <td style="text-align: left;font-size:13px;">
                    {{ ucfirst(session()->get('prime_nette_axa_voyage')) }}
                </td>
                <td>
                    Accessoires
                </td>
                <td style="text-align: left;font-size:13px;">
                    {{ ucfirst(session()->get('accessoire_axa_voyage')) }}
                </td>
                <td>
                    Taxes
                </td>
                <td style="text-align: left;font-size:13px;">
                    {{ ucfirst(session()->get('taxe_axa_voyage')) }}
                </td>
                <td style="font-size:13px;">
                    PRIME TTC
                </td>
                <td style="text-align: left;font-size:13px;">
                    {{ ucfirst(session()->get('prime_ttc_axa_voyage')) }}
                </td>
            </tr>
        </table>
    </div>
    <p style="color: #00008F;text-align: justify;font-size:13px;">Le présent contrat prend effet le 10/02/2023. Il est
        souscrit pour une durée ferme de 365 jours.
        Les garanties cessent donc sans autre avis à la fin du voyage au plus tard le 02/13/2024. </p>
    <div style="border-left: solid 2px #00008F;border-right: solid 2px #00008F;border-bottom: solid 2px #00008F;">
        <p style="text-align: center;background-color: #00008F;color:#fff;font-weight:bold;">PRESTATAIRE</p>
        <p style="text-align: justify;font-size:13px;">En cas de sinistre, le beneficiaire du present contrat ou toute
            personne agissant pour son compte doit contacter dans les 24h
            INTER PARTENAIRE à PARIS, TELEPHONE : 772345267
        </p>
    </div>
    <p style="font-size: 12px;color:#00008F;">L'assuré reconnait avoir recu un exemlplaire du contrat tel que d'ecrit ci
        dessus et en approuvé les termes.
    </p>
    <p style="font-size: 13px;color:#00008F;text-align:center;">Fait à dakar le 4/10/2023 <span
            style="text-align:right;color:black;">En trois exemlplaires (3)</span></p>
    <table width="100%">
        <tr>
            <td style="font-size: 13px;">
                L'ASSURE(E)
            </td>
            <td style="text-align: right;font-size: 13px;">
                POUR LA COMPAGNIE
            </td>
        </tr>
    </table>
</body>

</html>
