<?php
use App\Models\Assurance;
if ( session()->get('numero_client_vehicule')!=null){
    $clientExists = DB::table('assurances')->where('numero_client', session()->get('numero_client_vehicule'))->exists();
}
// if (isset($assurance[0]->numero_client) and $assurance[0]->numero_client != null){
//     $clientExists = DB::table('assurances')->where('numero_client', $assurance[0]->numero_client )->exists();
// }
//dd($clientExists);
        if ($clientExists == false) {
            $article = Assurance::create([
                'numero_client' => session()->get('numero_client_vehicule'),
                'prenom' => session()->get('prenom_vehicule')
                ,
                'nom' => session()->get('nom_vehicule'),
                'profession' => session()->get('profession_client_vehicule'),
                'adresse' => session()->get('adresse_vehicule')
                ,
                'marque' => session()->get('marque_vehicule'),
                'modele' => session()->get('modele_vehicule'),
                'puissance' => session()->get('puissance_vehicule')
                ,
                'energie' => session()->get('energie_vehicule'),
                'categorie' => session()->get('categorie_vehicule'),
                'nombre_de_place' => session()->get('nombre_de_places_vehicule')
                ,
                'valeur_neuve' => session()->get('valeur_neuve_vehicule'),
                'valeur_venale' => session()->get('valeur_venale_vehicule')
                ,
                'nom_sur_la_carte_grise' => session()->get('nom_carte_grise_vehicule'),
                'numero_police' => session()->get('numero_police_vehicule'),
                'incendie_franchise' => session()->get('incendie_franchise_vehicule'),
                
                'date_effet' => session()->get('date_effet_vehicule'),
                'date_echeance' => session()->get('date_echeance_vehicule')
                ,
                'dure' => session()->get('duree_vehicule'),
                'numero_avenant' => session()->get('numero_avenant_vehicule'),
                'niveau' => 'vehicule',
                'bonus_rc' => session()->get('bonus_rc_vehicule')
                ,
                'thierce_complete' => session()->get('thierce_complete_vehicule'),
                'thierce_collision' => session()->get('thierce_collision_vehicule')
                ,
                'telephone' => session()->get('telephone_vehicule'),
                'immatriculation' => session()->get('immatriculation_vehicule'),
                'date_de_naissance' => session()->get('date_de_naissance_vehicule')
                ,
                'mise_en_circulation' => session()->get('mise_en_circulation_vehicule'),
                'vol' => session()->get('vol_vehicule'),
                'incendie' => session()->get('incendie_vehicule'),
                'bris_de_glace' => session()->get('bris_de_glace_vehicule'),
                'defence_et_recours' => session()->get('defence_et_recours_vehicule'),
                'avance_sur_recours' => session()->get('avance_sur_recours_vehicule'),
                'personnes_transportees' => session()->get('personnes_transportees_vehicule'),
                'thierce_complete_franchise' => session()->get('thierce_complete_franchise_vehicule'),
                'thierce_collision_franchise' => session()->get('thierce_collision_franchise_vehicule'),
                'vol_franchise' => session()->get('vol_franchise_vehicule'),
                'defence_et_recours_capital_garanti' => session()->get('defence_et_recours_capital_garanti_vehicule'),
                'avance_sur_recours_capital_garanti' => session()->get('avance_sur_recours_capital_garanti_vehicule')
                ,
                'id_apporter' => session()->get('id_apporter'),
            ]);
            session()->put('id_vehicule', $article->id);

            $req = DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('assurance_choisit' => "axa"));
            DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('responsabilite_civile' => session()->get('prime_net_axa_rc')));
            DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('prime_nette' => session()->get('prime_net_axa')));
            DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('taxes' => session()->get('taxe_axa')));
            DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('accessoires' => session()->get('accessoir_axa')));
            DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('rga' => session()->get('rga_axa')));
            DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('prime_ttc' => session()->get('prime_ttc_axa')));

            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_vehicule'))->get();
            //$commissions_accessoires = ($assurance[0]->accessoires / 100) * 100;
            $commissions_accessoires=0;
            $commissions_apporteur = ($assurance[0]->prime_nette / 100) * 20;
            DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('commissions_apporteur' => $commissions_apporteur, 'commissions_accessoires' => $commissions_accessoires));
            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_vehicule'))->get();
            $calcule = DB::table('assurances')->where('niveau', '=', 'vehicule')->where('valider', '=', '1')->get();
            //$sumOfCommissions = $calcule->sum('commissions_apporteur');
        } else {
            $assurance = DB::table('assurances')->where('numero_client', '=', session()->get('numero_client_vehicule'))->get();
        }
        //dd($sumOfCommissions);
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance,
        ];
        DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('valider' => "1"));

        Session::forget([
            'prenom_vehicule',
            'nom_vehicule',
            'adresse_vehicule',
            'profession_client_vehicule',
            'telephone_vehicule'
            ,
            'date_de_naissance_vehicule',
            'marque_vehicule',
            'modele_vehicule',
            'puissance_vehicule',
            'energie_vehicule',
            'categorie_vehicule',
            'nombre_de_places_vehicule'
            ,
            'immatriculation_vehicule',
            'mise_en_circulation_vehicule',
            'valeur_neuve_vehicule',
            'valeur_venale_vehicule',
            'nom_carte_grise_vehicule',
            'numero_police_vehicule',
            'date_effet_vehicule',
            'date_echeance_vehicule',
            'duree_vehicule',
            'numero_avenant_vehicule',
            'bonus_rc_vehicule',
            'thierce_complete_vehicule'
            ,
            'thierce_collision_vehicule',
            'vol_vehicule',
            'incendie_vehicule',
            '',
            'bris_de_glace_vehicule',
            'defence_et_recours_vehicule',
            'thierce_complete_franchise_vehicule'
            ,
            'avance_sur_recours_vehicule',
            'personnes_transportees_vehicule',
            'thierce_collision_franchise_vehicule',
            'vol_franchise_vehicule'
            ,
            'defence_et_recours_capital_garanti_vehicule',
            'avance_sur_recours_capital_garanti_vehicule',
        ]);