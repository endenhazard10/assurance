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
                Date d'effet : {{ $assurance[0]->date_effet }} <br>
                Date d'échéance : {{ $assurance[0]->date_echeance }} <br>
                Durée : {{ $assurance[0]->dure }} Mois
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
                Nom : {{ ucwords($assurance[0]->nom) }} <br>
                Prénom : {{ ucwords($assurance[0]->prenom) }} <br>
                Adresse : {{ ucwords($assurance[0]->adresse) }} <br>
                Téléphone : {{ ucwords($assurance[0]->telephone) }} <br>
                Profession : {{ ucwords($assurance[0]->profession) }} <br>
                N° Client : {{ ucwords($assurance[0]->numero_client) }} <br>
                Nom sur la carte grise : {{ ucwords($assurance[0]->nom_sur_la_carte_grise) }}
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .2rem;line-height: 1;">
                Marque : {{ ucwords($assurance[0]->marque) }} <br>
                Modèle : {{ ucwords($assurance[0]->modele) }} <br>
                N° d'immatriculation : {{ $assurance[0]->immatriculation }} <br>
                Energie : @if ($assurance[0]->energie == 1)
                    Gazol
                @else
                    Essence
                @endif <br>
                Catégorie : {{ ucwords($assurance[0]->categorie) }} <br>
                Nombre de place : {{ $assurance[0]->nombre_de_place }} <br>
                1ère mise en circulation : {{ $assurance[0]->mise_en_circulation }} <br>
                Valeur neuve : {{ $assurance[0]->valeur_neuve }} <br>
                Valeur vénale : {{ $assurance[0]->valeur_venale }}
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
                @if ($assurance[0]->bonus_rc == 0)
                    --
                @else
                    {{ $assurance[0]->bonus_rc }} %
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                {{ $assurance[0]->responsabilite_civile }}
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
                @if ($assurance[0]->defence_et_recours == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->defence_et_recours == 0)
                    --
                @else
                    {{ $assurance[0]->defence_et_recours_capital_garanti }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->defence_et_recours == 0)
                    --
                @else
                    {{ $assurance[0]->defence_et_recours }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Avance sur recours
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->avance_sur_recours == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->avance_sur_recours == 0)
                    --
                @else
                    {{ $assurance[0]->avance_sur_recours_capital_garanti }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->avance_sur_recours == 0)
                    --
                @else
                    {{ $assurance[0]->avance_sur_recours }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Thierces Complètes
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->thierce_complete == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->thierce_complete == 0)
                    --
                @else
                    {{ $assurance[0]->valeur_venale }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->thierce_complete == 0)
                    --
                @else
                    {{ $assurance[0]->thierce_complete_franchise }}
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->thierce_complete == 0)
                    --
                @else
                    {{ $assurance[0]->thierce_complete }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Thierces Collisions
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->thierce_collision == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->thierce_collision == 0)
                    --
                @else
                    {{ $assurance[0]->valeur_venale }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->thierce_collision == 0)
                    --
                @else
                    {{ $assurance[0]->thierce_collision_franchise }}
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->thierce_collision == 0)
                    --
                @else
                    {{ $assurance[0]->thierce_collision }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Bris de Glaces
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->bris_de_glace == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->bris_de_glace == 0)
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
                @if ($assurance[0]->bris_de_glace == 0)
                    --
                @else
                    {{ $assurance[0]->bris_de_glace }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Incendie
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->incendie == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->incendie == 0)
                    --
                @else
                    {{ $assurance[0]->valeur_venale }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->incendie == 0)
                    --
                @else
                {{ $assurance[0]->incendie_franchise }}
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->incendie == 0)
                    --
                @else
                    {{ $assurance[0]->incendie }}
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                Vol
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->vol == 0)
                    non garanti
                @else
                    garanti
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->vol == 0)
                    --
                @else
                    {{ $assurance[0]->valeur_venale }}
                @endif
            </td>
            <td style="text-align: center;">
                --
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->vol == 0)
                    --
                @else
                    {{ $assurance[0]->vol_franchise }}
                @endif
            </td>
            <td style="text-align: center;">
                @if ($assurance[0]->vol == 0)
                    --
                @else
                    {{ $assurance[0]->vol }}
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
            <td style="text-align: center;">{{ $assurance[0]->prime_nette }}</td>
            <td style="text-align: center;">{{ $assurance[0]->accessoires }}</td>
            <td style="text-align: center;">{{ $assurance[0]->taxes }}</td>
            <td style="text-align: center;">{{ $assurance[0]->rga }}</td>
            <td style="text-align: center;">{{ $assurance[0]->prime_ttc }}</td>
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
        {{ $assurance[0]->date_echeance }} à 24 heures. </p>
    <p style="font-size:12px; letter-spacing: .1rem;text-align:center;"> Fait à Dakar en trois exemplaires, le
        {{ $assurance[0]->date_effet }}</p>
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
