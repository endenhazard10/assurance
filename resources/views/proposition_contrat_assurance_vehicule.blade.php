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
    <table width="100%">
        <tr>
            <td>
                <img src="https://i.postimg.cc/02ytsVtw/Axa-Egypt.png" alt="" height="100px" width="300px"
                    style="border-radius: 10%;">
            </td>
            <td style="text-align: right; font-size:10px;">
                CONDITIONS PARTICULIÉRES ASSURANCE AUTOMOBILE
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
    <br>
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
                Date d'effet : {{ session()->get('date_effet_vehicule') }} <br>
                Date d'échéance : {{ session()->get('date_echeance_vehicule') }} <br>
                Durée : {{ session()->get('duree_vehicule') }} Mois
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
                Nom : {{ ucwords(session()->get('nom_vehicule')) }} <br>
                Prénom : {{ ucwords(session()->get('prenom_vehicule')) }} <br>
                Adresse : {{ ucwords(session()->get('adresse_vehicule')) }} <br>
                Téléphone : {{ session()->get('telephone_vehicule') }} <br>
                Profession : {{ ucwords(session()->get('profession_client_vehicule')) }} <br>
                N° Client : {{ session()->get('numero_client_vehicule') }} <br>
                Nom sur la carte grise : {{ ucwords(session()->get('nom_carte_grise_vehicule')) }}
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .2rem;line-height: 1;">
                Marque : {{ ucwords(session()->get('marque_vehicule'))}} <br>
                Modèle : {{ ucwords(session()->get('modele_vehicule')) }} <br>
                N° d'immatriculation : {{ session()->get('immatriculation_vehicule') }} <br>
                Energie : @if (session()->get('energie_vehicule') == 1)
                    Gazol
                @else
                    Essence
                @endif <br>
                Catégorie : {{ ucwords(session()->get('categorie_vehicule')) }} <br>
                Nombre de place : {{ session()->get('nombre_de_places_vehicule') }} <br>
                1ère mise en circulation : {{ session()->get('mise_en_circulation_vehicule') }} <br>
                Valeur neuve : {{ (int) session()->get('valeur_neuve_vehicule') }} <br>
                Valeur vénale : {{ (int) session()->get('valeur_venale_vehicule') }}
            </td>
        </tr>
    </table>
    <p style="font-size:12px; letter-spacing: .2rem;">GARANTIES - CAPITAUX - FRANCHISES</p>
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
                @if (session()->get('bonus_rc_vehicule') == 0)
                    --
                @else
                    {{ session()->get('bonus_rc_vehicule') }} %
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                {{ (int) session()->get('prime_net_axa_rc') }}
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Recours du tiers incendie
            </td>
            <td style="text-align: center;">
                garanti
            </td>
            <td style="text-align: center;">
                50 000 000
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                --
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Défense et recours
            </td>
            <td style="text-align: center;">
                @if (session()->get('defence_et_recours_vehicule') == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('defence_et_recours_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('defence_et_recours_capital_garanti_vehicule') }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if (session()->get('defence_et_recours_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('defence_et_recours_vehicule') }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Avance sur recours
            </td>
            <td style="text-align: center;">
                @if (session()->get('avance_sur_recours_vehicule') == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('avance_sur_recours_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('avance_sur_recours_capital_garanti_vehicule') }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if (session()->get('avance_sur_recours_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('avance_sur_recours_vehicule') }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Thierces Complètes
            </td>
            <td style="text-align: center;">
                @if (session()->get('thierce_complete_vehicule') == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('thierce_complete_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('valeur_venale_vehicule') }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if (session()->get('thierce_complete_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('thierce_complete_franchise_vehicule') }}
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('thierce_complete_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('thierce_complete_vehicule') }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Thierces Collisions
            </td>
            <td style="text-align: center;">
                @if (session()->get('thierce_collision_vehicule') == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('thierce_collision_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('valeur_venale_vehicule') }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if (session()->get('thierce_collision_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('thierce_collision_franchise_vehicule') }}
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('thierce_collision_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('thierce_collision_vehicule') }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Bris de Glaces
            </td>
            <td style="text-align: center;">
                @if (session()->get('bris_de_glace_vehicule') == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('bris_de_glace_vehicule') == 0)
                    --
                @else
                    --
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if (session()->get('bris_de_glace_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('bris_de_glace_vehicule') }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Incendie
            </td>
            <td style="text-align: center;">
                @if (session()->get('incendie_vehicule') == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('incendie_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('valeur_venale_vehicule') }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if (session()->get('incendie_vehicule') == 0)
                    --
                @else
                 {{session()->get('incendie_franchise_vehicule')}}
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('incendie_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('incendie_vehicule') }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Vol
            </td>
            <td style="text-align: center;">
                @if (session()->get('vol_vehicule') == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('vol_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('valeur_venale_vehicule') }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if (session()->get('vol_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('vol_franchise_vehicule') }}
                @endif
            </td>
            <td style="text-align: center;">
                @if (session()->get('vol_vehicule') == 0)
                    --
                @else
                    {{ (int) session()->get('vol_vehicule') }}
                @endif
            </td>
        </tr>
    </table>
    <p style="font-size:12px; letter-spacing: .2rem;">DÉCOMPTE DE LA PRIME</p>
    <table width="100%" border="1px solid;border-collapse: collapse;">
        <tr>
            <td style="text-align: center;">Prime nette</td>
            <td style="text-align: center;">Accessoires</td>
            <td style="text-align: center;">Taxes</td>
            <td style="text-align: center;">RGA</td>
            <td style="text-align: center;">Prime TTC</td>
        </tr>
        <tr>
            <td style="text-align: center;">{{ (int) session()->get('prime_net_axa') }}</td>
            <td style="text-align: center;">{{ (int) session()->get('accessoir_axa') }}</td>
            <td style="text-align: center;">{{ (int) session()->get('taxe_axa') }}</td>
            <td style="text-align: center;">{{ (int) session()->get('rga_axa') }}</td>
            <td style="text-align: center;">{{ (int) session()->get('prime_ttc_axa') }}</td>
        </tr>
    </table>
    <p style="font-size:11px; letter-spacing: .1rem;"> &rsaquo; La prise d'effet de la garantie est subordonnée au
        paiement intégral de la prime conformément à l'article 13 du code CIMA.
        &rsaquo; Le contrat est à durée ferme. <br>
        &rsaquo; Le souscripteur reconnaît avoir reçu, en sus des conditions générales de la police d'assurance
        automobile, les présentes conditions particulières
        et les clauses relatives aux garanties souscrites, et avoir pris pleine connaissance des dispositions du contrat
        auxquelles il adhère sans restrictions
        ni réserves. <br>
        &rsaquo; Les garanties cesseront leurs effets, de plein droit et sans autre avis, le
        {{ session()->get('date_echeance_vehicule') }} à 24 heures. </p>
    <p style="font-size:12px; letter-spacing: .1rem;text-align:center;"> Fait à Dakar en trois exemplaires, le
        {{ session()->get('date_effet_vehicule') }}</p>
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
