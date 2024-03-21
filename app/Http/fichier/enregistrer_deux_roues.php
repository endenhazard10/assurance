<?php
use App\Models\Assurance;
if ( session()->get('numero_client_deux_roues')!=null){
    $clientExists = DB::table('assurances')->where('numero_client', session()->get('numero_client_deux_roues'))->exists();
    }
$clientExists = DB::table('assurances')->where('numero_client', session()->get('numero_client_deux_roues'))->exists();
        if ($clientExists == false) {
            $article = Assurance::create([
                'numero_client' => session()->get('numero_client_deux_roues'),
                'prenom' => session()->get('prenom_deux_roues')
                ,
                'nom' => session()->get('nom_deux_roues'),
                'profession' => session()->get('profession_deux_roues'),
                'adresse' => session()->get('adresse_deux_roues')
                ,
                'marque' => session()->get('marque_deux_roues'),
                'modele' => session()->get('modele_deux_roues'),
                'puissance' => session()->get('puissance_deux_roues')
                ,
                'energie' => session()->get('energie_deux_roues'),
                'categorie' => session()->get('categorie_deux_roues'),
                'nombre_de_place' => 0,
                'valeur_neuve' => 0,
                'valeur_venale' => 0
                ,
                'nom_sur_la_carte_grise' => session()->get('nom_carte_grise_deux_roues'),
                'numero_police' => session()->get('numero_police_deux_roues')
                ,
                'date_effet' => session()->get('date_effet_deux_roues'),
                'date_echeance' => session()->get('date_echeance_deux_roues'),
                'bonus_rc' => session()->get('bonus_rc_deux_roues')
                ,
                'dure' => session()->get('duree_deux_roues'),
                'numero_avenant' => session()->get('numero_avenant_deux_roues'),
                'niveau' => 'deux roues'
                ,
                'telephone' => session()->get('telephone_deux_roues'),
                'immatriculation' => session()->get('immatriculation_deux_roues'),
                'date_de_naissance' => session()->get('date_de_naissance_deux_roues')
                ,
                'mise_en_circulation' => session()->get('mise_en_circulation_deux_roues')
                ,
                'id_apporter' => session()->get('id_apporter'),
            ]);
            session()->put('id_deux_roues', $article->id);

            $req = DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('assurance_choisit' => "axa"));
            DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('responsabilite_civile' => session()->get('prime_net_axa_rc_deux_roues')));
            DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('prime_nette' => session()->get('prime_net_axa_deux_roues')));
            DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('taxes' => session()->get('taxe_axa_deux_roues')));
            DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('accessoires' => session()->get('accessoir_axa_deux_roues')));
            DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('rga' => session()->get('rga_axa_deux_roues')));
            DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('prime_ttc' => session()->get('prime_ttc_axa_deux_roues')));

            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_deux_roues'))->get();
            //$commissions_accessoires = ($assurance[0]->accessoires / 100) * 100;
            $commissions_accessoires=0;
            $commissions_apporteur = ($assurance[0]->prime_nette / 100) * 20;
            DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('commissions_apporteur' => $commissions_apporteur, 'commissions_accessoires' => $commissions_accessoires));
            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_deux_roues'))->get();
            $calcule = DB::table('assurances')->where('niveau', '=', 'deux roues')->where('valider', '=', '1')->get();
            $sumOfCommissions = $calcule->sum('commissions_apporteur');
        } else {
            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_deux_roues'))->get();
        }

        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance,
        ];
        DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('valider' => "1"));
        Session::forget([
            'prenom_deux_roues',
            'nom_deux_roues',
            'adresse_deux_roues',
            'profession_client_deux_roues',
            'telephone_deux_roues'
            ,
            'date_de_naissance_deux_roues',
            'marque_deux_roues',
            'modele_deux_roues',
            'puissance_deux_roues',
            'energie_deux_roues',
            'categorie_deux_roues',
            'nombre_de_places_deux_roues'
            ,
            'immatriculation_deux_roues',
            'mise_en_circulation_deux_roues',
            'valeur_neuve_deux_roues',
            'valeur_venale_deux_roues',
            'nom_carte_grise_deux_roues',
            'numero_police_deux_roues',
            'date_effet_deux_roues',
            'date_echeance_deux_roues',
            'duree_deux_roues',
            'numero_avenant_deux_roues',
            'bonus_rc_deux_roues',
            'bris_de_glace_deux_roues',
            'personnes_transportees_deux_roues',
        ]);
       