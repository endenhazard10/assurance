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
                Genre de construction : : {{ ucwords(session()->get('genre_de_construction_mrh')) }} <br>
                Adresse : {{ ucwords(session()->get('adresse_mrh')) }} <br>
                Type de Résidence : {{ ucwords(session()->get('type_de_residence_mrh')) }} <br>
                Superficie développée : {{ ucwords(session()->get('superficie_developpee_mrh')) }} <br>
                Nombre de pièces : {{ ucwords(session()->get('nombre_piece_principale_mrh')) }} <br>
                Valeur du contenu : {{ ucwords(session()->get('valeur_contenu_mrh')) }} <br>
                Valeur du batiment : {{ ucwords(session()->get('valeur_du_batiment_mrh')) }} <br>
                Si appartement : {{ ucwords(session()->get('appartement_dans_un_immeuble_mrh')) }}
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height:1.3em.0;"0>
                Prénom & Nom : {{ ucwords(session()->get('prenom_mrh')) }} {{ ucwords(session()->get('nom_mrh')) }} <br>
                Profession : {{ ucwords(session()->get('profession_mrh')) }} <br>
                Age : {{ session()->get('age_mrh') }} <br>
                Qualité : {{ ucwords(session()->get('qualite_mrh')) }} <br>
                Téléphone : {{ session()->get('telephone_mrh') }} <br>
                Email : {{ session()->get('email_mrh') }} <br>
                N° Client : {{ session()->get('numero_client_mrh') }} <br>
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
                N° Police : {{ ucwords(session()->get('numero_police_mrh')) }} <br>
                Date d'effet : {{ ucwords(session()->get('date_effet_mrh')) }} <br>
                Date d'échéance : {{ ucwords(session()->get('date_echeance_mrh')) }} <br>
                Avenant : {{ ucwords(session()->get('avenant_mrh')) }}
            </td>
            <td style="text-align: left; font-size:12px; letter-spacing: .1rem;line-height:1.3em;">
                Clause d'indexation capital sur mobilier :  3% pan an <br>
                Durée du contrat : {{ ucwords(session()->get('duree_mrh')) }} Mois<br>
                Tacite Reconduction : {{ session()->get('age_mrh') }} <br>
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
                {{ session()->get('prime_de_base_mrh') }}
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
                @if (session()->get('prime_nette_vol_remplacement_serrures_mrh')!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if (session()->get('prime_nette_vol_remplacement_serrures_mrh')!=0){
                    {{session()->get('prime_nette_vol_remplacement_serrures_mrh')}}
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
                @if (session()->get('prime_nette_assistance_a_domicile_mrh')!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if (session()->get('prime_nette_assistance_a_domicile_mrh')!=0){
                    {{session()->get('prime_nette_assistance_a_domicile_mrh')}}
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
                @if (session()->get('prime_nette_dommages_electrique_mrh')!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if (session()->get('prime_nette_dommages_electrique_mrh')!=0){
                    {{session()->get('prime_nette_dommages_electrique_mrh')}}
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
                @if (session()->get('prime_nette_rc_sejour_voyage_mrh')!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if (session()->get('prime_nette_rc_sejour_voyage_mrh')!=0){
                    {{session()->get('prime_nette_rc_sejour_voyage_mrh')}}
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
                @if (session()->get('prime_nette_rc_chients_mrh')!=0){
                   garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if (session()->get('prime_nette_rc_chients_mrh')!=0){
                    {{session()->get('prime_nette_rc_chients_mrh')}}
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
                @if (session()->get('prime_nette_rc_sports_mrh')!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
                
            </td>
            <td style="text-align: center;font-size:12px;">
                @if (session()->get('prime_nette_rc_sports_mrh')!=0){
                    {{session()->get('prime_nette_rc_sports_mrh')}}
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
                @if (session()->get('prime_nette_assurance_scolaire_mrh')!=0){
                    garanti
                }@else{
                    non garanti
                }
                @endif
            </td>
            <td style="text-align: center;font-size:12px;">
               
            </td>
            <td style="text-align: center;font-size:12px;">
                @if (session()->get('prime_nette_assurance_scolaire_mrh')!=0){
                    {{session()->get('prime_nette_assurance_scolaire_mrh')}}
                }@else{
                    --
                }
                @endif
            </td>
        </tr>
        {{-- prime nette de base + prime nete garanti facultative =prime nette total
        accessoire 60000
        7% de prime nette totale + accesoir --}}
        </table>
    <p style="text-align: right;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">PRIME NETTE {{ session()->get('prime_nette_total_mrh') }} FCFA</p>
    <p style="text-align: right;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">Accessoire {{ session()->get('accessoire_mrh') }} FCFA</p>
    <p style="text-align: right;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">TAXES {{ session()->get('taxe_mrh') }} FCFA</p>
    <p style="text-align: right;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">PRIME TTC {{ session()->get('prime_ttc_axa_mrh') }} FCFA</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;text-decoration: underline;font-weight:bold;">SI VOUS ETES ASSURE OCCUPANT :</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; IL EST EXCLU DE LA GARANTIE LE VOL OU LA TENTATIVE DE VOL DES TELEPHONES PORTABLES.</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; IL EST FIXE UNE FRANCHISE DE 300.000 FCFA PAR SINISTRE EN CAS DE VOLOU DE TENTATIVE DE VOL DES ORDINATEURS PORTABLES.</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; NONOBSTANT TOUTES DISPOSITIONS CONTRAIRES PREVUES AU CONDITIONS GENERALES ET AUX CONVENTIONS SPECIALES, LE VOL DES OBJETS PRECIEUX, LORSQU'ILS NE SONT PAS RENFERMES DANS DES MEUBLES OU TIROIRS FERMANT A CLE A L'INTERIEUR DE L'HABITATION, EST FORMELLEMENT EXCLU DE LA GARANTIE.</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;text-decoration: underline;font-weight:bold;">L'ASSURÉ RECONNAIS AVOIR RECU UN EXEMPLAIRE :</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; DES PRÉSENTES CONDITIONS PARTICULIÉRES</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; DES CONDITIONS GÉNÉRALES</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; DES CONVENTIONS SPÉCIALES</p>
    <p style="text-align: left;font-size:8px; letter-spacing: .1rem;line-height:1.3em;">&rsaquo; DU TABLEAU DES GARANTIES CONPRENANT LE RÉSUMÉ DES GARANTIES, CAPITAUX ET FRANCHISES</p>
    <p style="font-size:8px; letter-spacing: .1rem;text-align:center;"> Fait à Dakar en trois exemplaires, le
        {{ session()->get('date_effet_mrh') }}</p>
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
