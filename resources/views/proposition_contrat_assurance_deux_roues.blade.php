<!DOCTYPE html>
<html>

<head>
    <title>Contrat assurance deux roues</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>

<body>
    <table width="100%">
        <tr>
            <td>
                <img src="https://i.postimg.cc/02ytsVtw/Axa-Egypt.png" alt="" height="100px" width="300px"
                    style="border-radius: 10%;">
            </td>
            <td style="text-align: right; font-size:10px;">
                CONDITIONS PARTICULIÉRES ASSURANCE DEUX ROUES
            </td>
        </tr>
        <tr>
            <td style="font-size: 10px;line-height: 1.5;">
                AXA ASSURANCE SENEGAL <br>
                5, place de l'indépendance <br>
                BP 182 Dakar – Sénégal
            </td>
            <td>

            </td>
        </tr>
    </table>
    <br><br>
    <table width="100%" style="margin-left:80px">
        <tr>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height: 1; font-weight: bold;">
                INTERMÉDIAIRE <br>
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height: 1;font-weight: bold;">
                RÉFÉRENCES CONTRAT <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height: 1;">
                Point E <br>
                Téléphone : 78 438 04 85 <br>
                Code : 70010 <br>
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .2rem;line-height: 1;">
                N° de Police : 0000000A <br>
                Avenant N° : Affaire nouvelle <br>
                Date d'effet : {{ session()->get('date_effet_deux_roues') }} <br>
                Date d'échéance : {{ session()->get('date_echeance_deux_roues') }} <br>
                Durée : {{ session()->get('duree_deux_roues') }} jours
            </td>
        </tr>
        <tr>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height: 1; font-weight: bold;">
                SOUSCRIPTEUR <br>
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height: 1;font-weight: bold;">
                VÉHICULE ASSURÉ <br>
            </td>
        </tr>
        <tr>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height: 1;">
                Nom : {{ ucwords(session()->get('nom_deux_roues')) }} <br>
                Prénom : {{ ucwords(session()->get('prenom_deux_roues')) }} <br>
                Adresse : {{ ucwords(session()->get('adresse_deux_roues')) }} <br>
                Téléphone : {{ ucwords(session()->get('telephone_deux_roues')) }} <br>
                Profession : {{ ucwords(session()->get('profession_deux_roues')) }} <br>
                N° Client : {{ session()->get('numero_client_deux_roues') }} <br>
                Nom sur la carte grise : {{ ucwords(session()->get('nom_carte_grise_deux_roues')) }}
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .2rem;line-height: 1;">
                Marque : {{ ucwords(session()->get('marque_deux_roues')) }} <br>
                Modèle : {{ ucwords(session()->get('modele_deux_roues')) }} <br>
                N° d'immatriculation : {{ session()->get('immatriculation_deux_roues') }} <br>
                Energie : @if (session()->get('energie_deux_roues') == 1)
                    Gazol
                @else
                    Essence
                @endif <br>
                Catégorie : {{ ucwords(session()->get('categorie_deux_roues')) }} <br>
                Nombre de place : {{ session()->get('nombre_de_places_deux_roues') }} <br>
                1ère mise en circulation : {{ session()->get('mise_en_circulation_deux_roues') }} <br>
            </td>
        </tr>
    </table>
    <br>
    <p style="font-size:12px; letter-spacing: .2rem;">GARANTIES - CAPITAUX - FRANCHISES</p>
    <br>
    <table width="100%" border="1px solid;border-collapse: collapse;">
        <tr>
            <td style="text-align: center;">
                Garanties
            </td>
            <td style="text-align: center;">
                Choix
            </td>
            <td style="text-align: center;">
                Capitaux assurés / limitations
            </td>
            <td style="text-align: center;">
                Bonus / Réduction
            </td>
            <td style="text-align: center;">
                Franchise
            </td>
            <td style="text-align: center;">
                Prime
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Responsabilité Civile
            </td>
            <td style="text-align: center;">
                garanti
            </td>
            <td style="text-align: center;">
                illimité
            </td>
            <td style="text-align: center;">
                @if (session()->get('bonus_rc_deux_roues') == 0)
                    --
                @else
                    {{ session()->get('bonus_rc_deux_roues') }} %
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                {{ (int) session()->get('prime_net_axa_rc_deux_roues') }}
            </td>
        </tr>
    </table>
    <br>
    <p style="font-size:12px; letter-spacing: .2rem;">DÉCOMPTE DE LA PRIME</p>
    <br>
    <table width="100%" border="1px solid;border-collapse: collapse;">
        <tr>
            <td style="text-align: center;">Prime nette</td>
            <td style="text-align: center;">Accessoires</td>
            <td style="text-align: center;">Taxes</td>
            <td style="text-align: center;">RGA</td>
            <td style="text-align: center;">Prime TTC</td>
        </tr>
        <tr>
            <td style="text-align: center;">{{ (int) session()->get('prime_net_axa_deux_roues') }}</td>
            <td style="text-align: center;">{{ (int) session()->get('accessoir_axa_deux_roues') }}</td>
            <td style="text-align: center;">{{ (int) session()->get('taxe_axa_deux_roues') }}</td>
            <td style="text-align: center;">{{ (int) session()->get('rga_axa_deux_roues') }}</td>
            <td style="text-align: center;">{{ (int) session()->get('prime_ttc_axa_deux_roues') }}</td>
        </tr>
    </table>
    <br><br>
    <p style="font-size:11px; letter-spacing: .1rem;"> &rsaquo; La prise d'effet de la garantie est subordonnée au
        paiement intégral de la prime conformément à l'article 13 du code CIMA.
        &rsaquo; Le contrat est à durée ferme. <br>
        &rsaquo; Le souscripteur reconnaît avoir reçu, en sus des conditions générales de la police d'assurance
        automobile, les présentes conditions particulières
        et les clauses relatives aux garanties souscrites, et avoir pris pleine connaissance des dispositions du contrat
        auxquelles il adhère sans restrictions
        ni réserves. <br><br>
        &rsaquo; Les garanties cesseront leurs effets, de plein droit et sans autre avis, le
        {{ session()->get('date_echeance_deux_roues') }} à 24 heures. </p>
    <br><br>
    <p style="font-size:12px; letter-spacing: .1rem;text-align:center;"> Fait à Dakar en trois exemplaires, le
        {{ session()->get('date_effet_deux_roues') }}</p>
    <br><br>
    <table width="100%">
        <tr>
            <td>
                LE SOUSCRIPTEUR
            </td>
            <td style="text-align: right;">
                POUR LA COMPAGNIE
            </td>
        </tr>
    </table>

</body>

</html>
