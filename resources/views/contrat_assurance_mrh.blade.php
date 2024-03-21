<!DOCTYPE html>
<html>

<head>
    <title>Contrat assurance Mrh</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>

<body>
    <table width="100%" style="margin-left:80px">
        <tr>
            <td style="text-align: center; font-size:12px; letter-spacing: .1rem;color:red;">
                RISQUE ASSURÉ
            </td>
            <td style="text-align: center; font-size:12px; letter-spacing: .1rem;color:red;">
                SOUSCRIPTEUR
            </td>

        </tr>
        <tr>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height:1.3em.0;">
                Genre de construction : : {{ ucwords($assurance[0]->genre_de_construction) }} <br>
                Adresse : {{ ucwords($assurance[0]->adresse) }} <br>
                Type de Résidence : {{ ucwords($assurance[0]->type_de_residence)}} <br>
                Superficie développée : {{ucwords($assurance[0]->superficie_developpe) }} <br>
                Nombre de pièces : {{ ucwords($assurance[0]->nombre_de_piece_principale) }} <br>
                Valeur du contenu : {{ ucwords($assurance[0]->valeur_contenu) }} <br>
                Valeur du batiment : {{ ucwords($assurance[0]->valeur_du_batiment) }} <br>
                Si appartement : {{ ucwords($assurance[0]->si_appartement_dans_un_immeuble) }}
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height:1.3em.0;"0>
                Prénom & Nom : {{ ucwords($assurance[0]->prenom) }} {{ ucwords($assurance[0]->nom)}} <br>
                Profession : {{ ucwords($assurance[0]->profession) }} <br>
                Age : {{ ucwords($assurance[0]->age) }} <br>
                Qualité : {{ ucwords($assurance[0]->qualite) }} <br>
                Téléphone : {{ ucwords($assurance[0]->telephone) }} <br>
                Email : {{ ucwords($assurance[0]->email) }} <br>
                N° Client : {{ ucwords($assurance[0]->numero_client) }} <br>
            </td>
        </tr>
    </table>
    <table width="100%" style="margin-left:80px">
        <tr>
            <td colspan="2" style="text-align: center; font-size:12px; letter-spacing: .1rem;color:red;">
                RISQUE ASSURÉ
            </td>
        </tr>
        <tr>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height:1.3em;">
                N° Police : {{ ucwords($assurance[0]->numero_police) }} <br>
                Date d'effet : {{ ucwords($assurance[0]->date_effet) }} <br>
                Date d'échéance : {{ ucwords($assurance[0]->date_echeance) }} <br>
                Avenant : {{ ucwords($assurance[0]->avenant) }}
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height:1.3em;">
                Clause d'indexation capital sur mobilier :  3% pan an <br>
                Durée du contrat : {{ ucwords($assurance[0]->duree) }} Mois<br>
                Tacite Reconduction : {{ ucwords($assurance[0]->profession) }} <br>
                Préavis résiliation annuelle : 01 mois avant l'échéance <br>
            </td>
        </tr>
    </table>  
    <p style="text-align: right;font-size:12px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; A l'exception de la professionnelle non-indexée, la régle proportionelle des capitaux prévue par le code CIMA ne s'applique pas aux polices "Multirisque"</p>
    <p style="text-align: right;font-size:12px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; Le présent contrat est conclu pour une durée d'un an avec une clause de tacite reconduction. Il est reconduit automatiquement à l'échéance sauf défaut de paiement de la prime ou dénonciation par l'une des parties.</p>
    <p style="text-align: center;font-size:12px; letter-spacing: .1rem;line-height:1.3em;font-weight:bold;">GARANTIES / CAPITAUX / FRANCHISES</p>
    <table width="100%" border="1px solid;border-collapse: collapse;">
        <tr>
            <td style="text-align: center;font-size:12px;">
                GARANTIES
            </td>
            <td style="text-align: center;font-size:12px;">
                ÉTAT
            </td>
            <td style="text-align: center;font-size:12px;">
                FRANCHISES
            </td>
            <td style="text-align: center;font-size:12px;">
                PRIME NETTE
            </td>
        </tr>
        <tr>
            <td colspan="4" style="text-align: center;font-size:12px;">
                Garanties de base
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Incendie, explosion et risques assimilés
            </td>
            <td style="text-align: center;font-size:12px;">
                garanti
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;" rowspan="6">
                {{ $assurance[0]->garantie_de_base}}
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Dégats des eaux
            </td>
            <td style="text-align: center;font-size:12px;">
                garanti
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Bris de glaces
            </td>
            <td style="text-align: center;font-size:12px;">
                garanti
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Vol
            </td>
            <td style="text-align: center;font-size:12px;">
                garanti
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Responsabilité Civile
            </td>
            <td style="text-align: center;font-size:12px;">
                garanti
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Défense et Recours
            </td>
            <td style="text-align: center;font-size:12px;">
                garanti
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
        </tr>
        <tr>
            <td colspan="4" style="text-align: center;font-size:12px;">
                Garanties optionnelles
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Vol complémentaire - Remplacement des serrures
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->vol_remplacement_serrures!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->vol_remplacement_serrures!=0){
                    {{$assurance[0]->vol_remplacement_serrures}}
                }@else{
                    --
                }
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Assistance à domicile
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->assistance_a_domicile!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->assistance_a_domicile!=0){
                    {{$assurance[0]->assistance_a_domicile}}
                }@else{
                    --
                }
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Dommages électriques
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->dommages_electriques!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->dommages_electriques!=0){
                    {{$assurance[0]->dommages_electriques}}
                }@else{
                    --
                }
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Responsabilité Civile - Séjour voyage
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->rc_sejour_voyage!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->rc_sejour_voyage!=0){
                    {{$assurance[0]->rc_sejour_voyage}}
                }@else{
                    --
                }
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Responsabilité Civile - Chiens
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->rc_chients!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->rc_chients!=0){
                    {{$assurance[0]->rc_chients}}
                }@else{
                    --
                }
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Responsabilité Civile - Sports
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->rc_sports!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->rc_sports!=0){
                    {{$assurance[0]->rc_sports}}
                }@else{
                    --
                }
                @endif
            </td>
        </tr>
        <tr>
            <td style="text-align: center;font-size:12px;">
                Assurance Scolaire
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->assurance_scolaire!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if ($assurance[0]->assurance_scolaire!=0){
                    {{$assurance[0]->assurance_scolaire}}
                }@else{
                    --
                }
                @endif
            </td>
        </tr>
    </table>
    <p style="text-align: right;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">PRIME NETTE {{$assurance[0]->prime_nette}} FCFA</p>
    <p style="text-align: right;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">Accessoire {{$assurance[0]->accessoire}} FCFA</p>
    <p style="text-align: right;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">TAXES {{$assurance[0]->taxes}} FCFA</p>
    <p style="text-align: right;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">PRIME TTC {{$assurance[0]->prime_ttc}} FCFA</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;text-decoration: underline;font-weight:bold;">SI VOUS ETES ASSURE OCCUPANT :</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; IL EST EXCLU DE LA GARANTIE LE VOL OU LA TENTATIVE DE VOL DES TELEPHONES PORTABLES.</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; IL EST FIXE UNE FRANCHISE DE 300.000 FCFA PAR SINISTRE EN CAS DE VOLOU DE TENTATIVE DE VOL DES ORDINATEURS PORTABLES.</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; NONOBSTANT TOUTES DISPOSITIONS CONTRAIRES PREVUES AU CONDITIONS GENERALES ET AUX CONVENTIONS SPECIALES, LE VOL DES OBJETS PRECIEUX, LORSQU'ILS NE SONT PAS RENFERMES DANS DES MEUBLES OU TIROIRS FERMANT A CLE A L'INTERIEUR DE L'HABITATION, EST FORMELLEMENT EXCLU DE LA GARANTIE.</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;text-decoration: underline;font-weight:bold;">L'ASSURÉ RECONNAIS AVOIR RECU UN EXEMPLAIRE :</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; DES PRÉSENTES CONDITIONS PARTICULIÉRES</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; DES CONDITIONS GÉNÉRALES</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; DES CONVENTIONS SPÉCIALES</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; DU TABLEAU DES GARANTIES CONPRENANT LE RÉSUMÉ DES GARANTIES, CAPITAUX ET FRANCHISES</p>
    <p style="font-size:12px; letter-spacing: .1rem;text-align:center;"> Fait à Dakar en trois exemplaires, le
        {{ ucwords($assurance[0]->date_effet) }}</p>
    <table width="100%">
        <tr>
            <td style="text-decoration: underline;font-weight:bold;">
                LE SOUSCRIPTEUR
            </td>
            <td style="text-align: right;text-decoration: underline;font-weight:bold;">
                POUR LA COMPAGNIE
            </td>
        </tr>
    </table>
</body>

</html>
