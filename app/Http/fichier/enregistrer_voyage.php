<?php
use App\Models\AssuranceVoyage;
    if ( session()->get('numero_client_voyage')!=null){
        $clientExists = DB::table('assurance_voyages')->where('numero_client', session()->get('numero_client_voyage'))->exists();
    }
        if ($clientExists == false) {
            $article = AssuranceVoyage::create([
                'numero_client' => session()->get('numero_client_voyage'),
                'numero_passeport' => session()->get('numero_passeport_voyage')
                ,
                'prenom' => session()->get('prenom_voyage'),
                'nom' => session()->get('nom_voyage'),
                'adresse' => session()->get('adresse_voyage')
                ,
                'profession' => session()->get('profession_voyage'),
                'motif_voyage' => session()->get('motif_voyage'),
                'date_validite_passeport' => session()->get('date_validite_voyage')
                ,
                'age' => session()->get('age_voyage'),
                'date_de_naissance' => session()->get('date_de_naissance_voyage'),
                'numero_police' => session()->get('numero_police_voyage'),
                'numero_passport' => session()->get('numero_passeport_voyage')
                ,
                'formule' => session()->get('formule_voyage'),
                'pays' => session()->get('destination_voyage')
                ,
                'date_depart' => session()->get('date_depart_voyage'),
                'date_retour' => session()->get('date_retour_voyage'),
                'duree' => session()->get('duree_voyage'),
                
                'date_effet' => session()->get('date_effet_voyage'),
                'id_apporter' => session()->get('id_apporter'),
            ]);
            session()->put('id_voyage', $article->id);

            $req = DB::table('assurance_voyages')->where('id', session()->get('id_voyage'))->update(array('assurance_choisit' => "axa"));
            DB::table('assurance_voyages')->where('id', session()->get('id_voyage'))->update(array('prime_ttc' => session()->get('prime_ttc_axa_voyage'),
            'prime_nette' => session()->get('prime_nette_axa_voyage'),'taxe' => session()->get('taxe_axa_voyage'),'accessoire' => session()->get('accessoire_axa_voyage')));

             $assurance = DB::table('assurance_voyages')->where('id', '=', session()->get('id_voyage'))->get();
             //$commissions_accessoires = ($assurance[0]->accessoires / 100) * 100;
             $commissions_accessoires=session()->get('taxe_axa_voyage');
             $commissions_apporteur = ($assurance[0]->prime_nette / 100) * 20;
             DB::table('assurance_voyages')->where('id', session()->get('id_voyage'))->update(array('commissions_apporteur' => $commissions_apporteur, 'commissions_accessoires' => $commissions_accessoires));
             $assurance = DB::table('assurance_voyages')->where('id', '=', session()->get('id_voyage'))->get();
             $calcule = DB::table('assurance_voyages')->where('valider', '=', '1')->get();
             //$sumOfCommissions = $calcule->sum('commissions_apporteur');
        } else {
            $assurance = DB::table('assurance_voyages')->where('numero_client', '=', session()->get('numero_client_voyage'))->get();
        }
        //dd($sumOfCommissions);
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance,
        ];
        DB::table('assurance_voyages')->where('id', session()->get('id_voyage'))->update(array('valider' => "1"));
        
         Session::forget([
             'numero_passeport_voyage',
             'prenom_voyage',
             'nom_voyage',
             'adresse_voyage'
             ,
             'profession_voyage',
             'motif_voyage',
             'date_validite_voyage',
             'age_voyage',
             'date_de_naissance_voyage',
             'numero_police_voyage',
             'formule_voyage'
             ,
             'destination_voyage',
             'date_depart_voyage',
             'date_retour_voyage',
             'duree_voyage',
             'date_effet_voyage',

             'prime_ttc_axa_voyage',
             'taxe_axa_voyage',
             'accessoire_voyage',

             'id_apporter',
        ]);