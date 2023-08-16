<?php

namespace App\Http\Controllers;

use App\Models\Assurance;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function proposition_contrat_assurance_vehicule()
    {
        $pdf = PDF::loadView('proposition_contrat_assurance_vehicule');
        return $pdf->download('proposition_contrat_assurance_vehicule.pdf');
    }
    public function proposition_contrat_assurance_deux_roues()
    {
        $pdf = PDF::loadView('proposition_contrat_assurance_deux_roues');
        return $pdf->download('proposition_contrat_assurance_deux_roues.pdf');
    }
    public function proposition_contrat_assurance_tpv()
    {
        $pdf = PDF::loadView('proposition_contrat_assurance_tpv');
        return $pdf->download('proposition_contrat_assurance_tpv.pdf');
    }
    public function contrat_assurance_tpv()
    {
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
            $commissions_accessoires = ($assurance[0]->accessoires / 100) * 100;
            $commissions_apporteur = ($assurance[0]->prime_ttc / 100) * 20;
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
            'profession_client_tpv',
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
        $pdf = PDF::loadView('contrat_assurance_tpv', $data);
        return $pdf->download('contrat_assurance_tpv.pdf');
    }
    public function contrat_assurance_vehicule()
    {
        $clientExists = DB::table('assurances')->where('numero_client', session()->get('numero_client_vehicule'))->exists();
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
                'numero_police' => session()->get('numero_police_vehicule')
                ,
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
            $commissions_accessoires = ($assurance[0]->accessoires / 100) * 100;
            $commissions_apporteur = ($assurance[0]->prime_ttc / 100) * 20;
            DB::table('assurances')->where('id', session()->get('id_vehicule'))->update(array('commissions_apporteur' => $commissions_apporteur, 'commissions_accessoires' => $commissions_accessoires));
            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_vehicule'))->get();
            $calcule = DB::table('assurances')->where('niveau', '=', 'vehicule')->where('valider', '=', '1')->get();
            $sumOfCommissions = $calcule->sum('commissions_apporteur');
        } else {
            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_vehicule'))->get();
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

        $pdf = PDF::loadView('contrat_assurance_vehicule', $data);
        return $pdf->download('contrat_assurance_vehicule.pdf');
    }
    public function contrat_assurance_deux_roues()
    {
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
            $commissions_accessoires = ($assurance[0]->accessoires / 100) * 100;
            $commissions_apporteur = ($assurance[0]->prime_ttc / 100) * 20;
            DB::table('assurances')->where('id', session()->get('id_deux_roues'))->update(array('commissions_apporteur' => $commissions_apporteur, 'commissions_accessoires' => $commissions_accessoires));
            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_deux_roues'))->get();
            $calcule = DB::table('assurances')->where('niveau', '=', 'deux roues')->where('valider', '=', '1')->get();
            $sumOfCommissions = $calcule->sum('commissions_apporteur');
        } else {
            $assurance = DB::table('assurances')->where('id', '=', session()->get('id_deux_roues'))->get();
            dd(session()->get('prime_net_axa_deux_roues'));
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
        $pdf = PDF::loadView('contrat_assurance_deux_roues', $data);
        return $pdf->download('contrat_assurance_deux_roues.pdf');
    }
    public function carte_jaune_assurance_vehicule()
    {
        $assurance = DB::table('assurances')->where('id', '=', session()->get('id_vehicule'))->get();
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance,
        ];

        $pdf = PDF::loadView('carteJaune', $data);
        return $pdf->download('carte_jaune.pdf');
    }
    public function contrat_assurance_voyage()
    {
        $assurance = DB::table('assurance_voyages')->where('id', '=', session()->get('id_voyage'))->get();
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance,
        ];
        DB::table('assurance_voyages')->where('id', session()->get('id_voyage'))->update(array('valider' => "1"));
        $pdf = PDF::loadView('contrat_assurance_voyage', $data);
        return $pdf->download('contrat_assurance_voyage.pdf');
    }

    public function carte_jaune_assurance_tpv()
    {
        $assurance = DB::table('assurances')->where('id', '=', session()->get('id_tpv'))->get();
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'assurance' => $assurance,
        ];

        $pdf = PDF::loadView('carteJaune', $data);
        return $pdf->download('carte_jaune.pdf');
    }
    // public function generateContrat()
    // {
    //     $data = [
    //         'title' => 'Welcome to LaravelTuts.com',
    //         'date' => date('m/d/Y'),
    //         'users' => $users
    //     ];
    //     $pdf = PDF::loadView('contratPdf', $data);
    //     return $pdf->download('laraveltuts.pdf');
    // }
}
