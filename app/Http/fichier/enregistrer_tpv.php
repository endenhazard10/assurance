<?php
use App\Models\Assurance;
if ( session()->get('numero_client_tpv')!=null){
    $clientExists = DB::table('assurances')->where('numero_client', session()->get('numero_client_tpv'))->exists();
    }
$clientExists = DB::table('assurances')->where('numero_client', session()->get('numero_client_tpv'))->exists();
        if ($clientExists == false) {
            $article = Assurance::create([
                'numero_client' => session()->get('numero_client_tpv'),
                'prenom' => session()->get('prenom_tpv')
                ,
                'nom' => session()->get('nom_tpv'),
                'profession' => session()->get('profession_tpv'),
                'adresse' => session()->get('adresse_tpv')
                ,
                'marque' => session()->get('marque_tpv'),
                'modele' => session()->get('modele_tpv'),
                'puissance' => session()->get('puissance_tpv')
                ,
                'energie' => session()->get('energie_tpv'),
                'categorie' => session()->get('categorie_tpv'),
                'nombre_de_place' => session()->get('nombre_de_places_tpv')
                ,
                'valeur_neuve' => session()->get('valeur_neuve_tpv'),
                'valeur_venale' => session()->get('valeur_venale_tpv')
                ,
                'nom_sur_la_carte_grise' => session()->get('nom_carte_grise_tpv'),
                'numero_police' => session()->get('numero_police_tpv')
                ,
                'date_effet' => session()->get('date_effet_tpv'),
                'date_echeance' => session()->get('date_echeance_tpv')
                ,
                'dure' => session()->get('duree_tpv'),
                'numero_avenant' => session()->get('numero_avenant_tpv'),
                'niveau' => 'tpv',
                'bonus_rc' => session()->get('bonus_rc_tpv')
                ,
                'thierce_complete' => session()->get('thierce_complete_tpv'),
                'thierce_collision' => session()->get('thierce_collision_tpv')
                ,
                'telephone' => session()->get('telephone_tpv'),
                'immatriculation' => session()->get('immatriculation_tpv'),
                'date_de_naissance' => session()->get('date_de_naissance_tpv')
                ,
                'mise_en_circulation' => session()->get('mise_en_circulation_tpv'),
                'vol' => session()->get('vol_tpv'),
                'incendie' => session()->get('incendie_tpv'),
                'incendie_franchise' => session()->get('incendie_franchise_tpv'),
                'bris_de_glace' => session()->get('bris_de_glace_tpv'),
                'defence_et_recours' => session()->get('defence_et_recours_tpv'),
                'avance_sur_recours' => session()->get('avance_sur_recours_tpv'),
                'personnes_transportees' => session()->get('personnes_transportees_tpv'),
                'thierce_complete_franchise' => session()->get('thierce_complete_franchise_tpv'),
                'thierce_collision_franchise' => session()->get('thierce_collision_franchise_tpv'),
                'vol_franchise' => "30000",
                'defence_et_recours_capital_garanti' => session()->get('defence_et_recours_capital_garanti_tpv'),
                'avance_sur_recours_capital_garanti' => session()->get('avance_sur_recours_capital_garanti_tpv')
                ,
                'id_apporter' => session()->get('id_apporter_tpv'),
            ]);
            session()->put('id_tpv', $article->id);

            $req = DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('assurance_choisit' => "axa"));
            DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('responsabilite_civile' => session()->get('prime_net_axa_rc_tpv')));
            DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('prime_nette' => session()->get('prime_net_axa_tpv')));
            DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('taxes' => session()->get('taxe_axa_tpv')));
            DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('accessoires' => session()->get('accessoir_axa_tpv')));
            DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('rga' => session()->get('rga_axa_tpv')));
            DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('prime_ttc' => session()->get('prime_ttc_axa_tpv')));

            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_tpv'))->get();
            //$commissions_accessoires = ($assurance[0]->accessoires / 100) * 100;
            $commissions_accessoires=0;
            $commissions_apporteur = ($assurance[0]->prime_ttc / 100) * 15;
            DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('commissions_apporteur' => $commissions_apporteur, 'commissions_accessoires' => $commissions_accessoires));
            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_tpv'))->get();
            $calcule = DB::table('assurances')->where('niveau', '=', 'tpv')->where('valider', '=', '1')->get();
            $sumOfCommissions = $calcule->sum('commissions_apporteur');
        } else {
            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_tpv'))->get();
        }
        //dd($sumOfCommissions);
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance,
        ];
        DB::table('assurances')->where('id', session()->get('id_tpv'))->update(array('valider' => "1"));
        Session::forget([
            'prenom_tpv',
            'nom_tpv',
            'adresse_tpv',
            'profession_tpv',
            'telephone_tpv'
            ,
            'date_de_naissance_tpv',
            'marque_tpv',
            'modele_tpv',
            'puissance_tpv',
            'energie_tpv',
            'categorie_tpv',
            'nombre_de_places_tpv'
            ,
            'immatriculation_tpv',
            'mise_en_circulation_tpv',
            'valeur_neuve_tpv',
            'valeur_venale_tpv',
            'nom_carte_grise_tpv',
            'numero_police_tpv',
            'date_effet_tpv',
            'date_echeance_tpv',
            'duree_tpv',
            'numero_avenant_tpv',
            'bonus_rc_tpv',
            'thierce_complete_tpv'
            ,
            'thierce_collision_tpv',
            'vol_tpv',
            'incendie_tpv',
            '',
            'bris_de_glace_tpv',
            'defence_et_recours_tpv',
            'thierce_complete_franchise_tpv'
            ,
            'avance_sur_recours_tpv',
            'personnes_transportees_tpv',
            'thierce_collision_franchise_tpv',
            'vol_franchise_tpv'
            ,
            'defence_et_recours_capital_garanti_tpv',
            'avance_sur_recours_capital_garanti_tpv',
        ]);