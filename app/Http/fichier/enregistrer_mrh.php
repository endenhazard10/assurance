<?php
use App\Models\AssuranceMrh;
if ( session()->get('numero_client_mrh')!=null){
    $clientExists = DB::table('assurance_mrhs')->where('numero_client', session()->get('numero_client_mrh'))->exists();
    }
$clientExists = DB::table('assurance_mrhs')->where('numero_client', session()->get('numero_client_mrh'))->exists();
        if ($clientExists == false) {
            $article = AssuranceMrh::create([
                'numero_client' => session()->get('numero_client_mrh'),
                'id_apporter' => session()->get('id_apporter_mrh')
                ,
                'nom' => session()->get('nom_mrh'),
                'prenom' => session()->get('prenom_mrh'),
                'profession' => session()->get('profession_mrh')
                ,
                'age' => session()->get('age_mrh'),
                'qualite' => session()->get('qualite_mrh'),
                'telephone' => session()->get('telephone_mrh')
                ,
                'email' => session()->get('email_mrh'),
                'adresse' => session()->get('adresse_mrh'),
                'genre_de_construction' => session()->get('genre_de_construction_mrh')
                ,
                'type_de_residence' => session()->get('type_de_residence_mrh'),
                'superficie_developpe' => session()->get('superficie_developpee_mrh')
                ,
                'nombre_de_piece_principale' => session()->get('nombre_piece_principale_mrh'),
                'valeur_contenu' => session()->get('valeur_contenu_mrh')
                ,
                'valeur_du_batiment' => session()->get('valeur_du_batiment_mrh'),
                'si_appartement_dans_un_immeuble' => session()->get('appartement_dans_un_immeuble_mrh')
                ,
                'garantie_de_base' => session()->get('prime_de_base_mrh'),
                'assistance_a_domicile' => session()->get('prime_nette_assistance_a_domicile_mrh'),
                'dommages_electriques' => session()->get('prime_nette_dommages_electrique_mrh'),
                'vol_remplacement_serrures' => session()->get('prime_nette_vol_remplacement_serrures_mrh')
                ,
                'rc_sejour_voyage' => session()->get('prime_nette_rc_sejour_voyage_mrh'),
                'rc_chients' => session()->get('prime_nette_rc_chients_mrh')
                ,
                'rc_sports' => session()->get('prime_nette_rc_sports_mrh'),
                'assurance_scolaire' => session()->get('prime_nette_assurance_scolaire_mrh'),
                'numero_police' => session()->get('numero_police_mrh')
                ,
                'date_effet' => session()->get('date_effet_mrh'),
                'avenant' => session()->get('avenant_mrh'),
                'date_echeance' => session()->get('date_echeance_mrh'),
                'duree' => session()->get('duree_mrh'),
                'effectif_assurance_scolaire' => session()->get('effectif_assurance_scolaire_mrh'),
                'effectif_rc_chients' => session()->get('effectif_rc_chients_mrh'),
                'effectif_rc_sports' => session()->get('effectif_rc_sports_mrh'),
                'assurance_choisit' => 'axa',
                'taxes' => session()->get('taxe_mrh'),
                'valider' => 1,
                'prenom_et_nom_scolaire' => session()->get('prenom_et_nom_scolaire_mrh'),
                'date_de_naissance_scolaire' => session()->get('date_de_naissance_scolaire_mrh'),
                'age_scolaire' => session()->get('age_scolaire_mrh'),
                'sexe_scolaire' => session()->get('sexe_scolaire_mrh'),
                'etablissement_scolaire' => session()->get('etablissement_scolaire_mrh'),
                'niveau_etude_scolaire' => session()->get('niveau_etude_scolaire_mrh'),
                'race' => session()->get('race_mrh'),
                'vaccin' => session()->get('vaccin_mrh'),
                'date_derniere_vaccination' => session()->get('date_derniere_vaccination_mrh'),
                'prenom_et_nom_sport' => session()->get('prenom_et_nom_sport_mrh'),
                'date_de_naissance_sport' => session()->get('date_de_naissance_sport_mrh'),
                'age_sport' => session()->get('age_sport_mrh'),
                'sexe_sport' => session()->get('sexe_sport_mrh'),
                'profession_sport' => session()->get('profession_sport_mrh'),
                'prime_nette' => session()->get('prime_nette_total_mrh'),
                'prime_ttc' => session()->get('prime_ttc_axa_mrh'),
                'taxes' => session()->get('taxe_mrh'),
                'accessoire' => session()->get('accessoire_mrh'),
            ]);
            session()->put('id_mrh', $article->id);

            $assurance = DB::table('assurance_mrhs')->where('id', '=', session()->get('id_mrh'))->get();
            $req = DB::table('assurance_mrhs')->where('id', session()->get('id_mrh'))->update(array('assurance_choisit' => "axa"));
            DB::table('assurance_mrhs')->where('id', session()->get('id_mrh'))->update(array('prime_ttc' => session()->get('prime_ttc_axa_mrh')));

             $assurance = DB::table('assurance_mrhs')->where('id', '=', session()->get('id_mrh'))->get();
             $commissions_accessoires = ($assurance[0]->accessoires / 100) * 100;
             //$commissions_accessoires=0;
             $commissions_apporteur = ($assurance[0]->prime_ttc / 100) * 20;
             DB::table('assurance_mrhs')->where('id', session()->get('id_mrh'))->update(array('commissions_apporteur' => $commissions_apporteur, 'commissions_accessoires' => $commissions_accessoires));
             $assurance = DB::table('assurance_mrhs')->where('id', '=', session()->get('id_mrh'))->get();
             $calcule = DB::table('assurance_mrhs')->where('niveau', '=', 'mrh')->where('valider', '=', '1')->get();
            // $sumOfCommissions = $calcule->sum('commissions_apporteur');
        } else {
            $assurance = DB::table('assurance_mrhs')->where('id', '=', session()->get('id_mrh'))->get();
        }
        //dd($sumOfCommissions);
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance,
        ];
        DB::table('assurance_mrhs')->where('id', session()->get('id_mrh'))->update(array('valider' => "1"));
         Session::forget([
             'adresse_mrh',
             'genre_de_construction_mrh',
             'type_de_residence_mrh',
             'superficie_developpee_mrh',
             'nombre_piece_principale_mrh'
             ,
             'valeur_contenu_mrh',
             'valeur_du_batiment_mrh',
             'appartement_dans_un_immeuble_mrh',
             'garantie_de_base_mrh',
             'assistance_a_domicile_mrh',
             'dommages_electrique_mrh',
             'vol_remplacement_serrures_mrh'
             ,
             'rc_sejour_voyage_mrh',
             'rc_chients_mrh',
             'rc_sports_mrh',
             'assurance_scolaire_mrh',
             'prenom_mrh',
             'nom_mrh',
             'age_mrh',
             'qualite_mrh',
             'telephone_mrh',
             'email_mrh',
             'numero_client_mrh',
             'date_effet_mrh'
             ,
             'date_echeance_mrh',
             'duree_mrh',
             'avenant_mrh',
             '',
             'numero_police_mrh',
             'profession_mrh',
             'effectif_rc_chients_mrh'
             ,
             'effectif_rc_sports_mrh',
             'effectif_assurance_scolaire_mrh',
             'prenom_et_nom_scolaire_mrh',
             'date_de_naissance_scolaire_mrh'
             ,
             'age_scolaire_mrh',
             'sexe_scolaire_mrh',

             'etablissement_scolaire_mrh',
             'niveau_etude_scolaire_mrh',
             'race_mrh',
             'vaccin_mrh'
             ,
             'date_derniere_vaccination_mrh',
             'prenom_et_nom_sport_mrh',

             'date_de_naissance_sport_mrh',
             'age_sport_mrh',
             'sexe_sport_mrh',
             'profession_sport_mrh'
             ,
             'prime_ttc_axa_mrh',
             'prime_ttc_cnart_mrh',
             'prime_ttc_wafa_mrh',
             'prime_ttc_amsa_mrh',
             'prime_ttc_allianz_mrh',
             'prime_ttc_nsia_mrh',
             'prime_ttc_askia_mrh',
         ]);