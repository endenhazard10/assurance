<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;

class FormulaireMrh extends Component
{
    use WithFileUploads;

    public $adresse;
    public $genre_de_construction;
    public $type_de_residence;
    public $superficie_developpee;
    public $nombre_piece_principale;
    public $valeur_contenu;
    public $valeur_du_batiment;
    public $appartement_dans_un_immeuble;

    public $garantie_de_base=1;
    public $assistance_a_domicile;
    public $dommages_electrique;
    public $vol_remplacement_serrures;
    public $rc_sejour_voyage;
    public $rc_chients;
    public $rc_sports;
    public $assurance_scolaire;

    public $prenom_et_nom;
    public $age;
    public $qualite;
    public $telephone;
    public $email;

    public $numero_client;
    public $numero_police;
    public $date_effet;
    public $date_echeance;
    public $duree;
    public $avenant;
    public $nom;
    public $prenom;
    public $profession;
    public $effectif_rc_chients;
    public $effectif_rc_sports;
    public $effectif_assurance_scolaire;

    public $totalSteps = 7;
    public $currentStep = 1;

    public $text_rc_chients='null';
    public $text_rc_sports='null';
    public $text_assurance_scolaire='null';
    public $prenom_et_nom_scolaire = [];
    public $date_de_naissance_scolaire = [];
    public $age_scolaire = [];
    public $sexe_scolaire = [];
    public $etablissement_scolaire = [];
    public $niveau_etude_scolaire = [];
    public $race = [];
    public $vaccin = [];
    public $date_derniere_vaccination = [];
    public $prenom_et_nom_sport = [];
    public $date_de_naissance_sport = [];
    public $age_sport = [];
    public $sexe_sport = [];
    public $profession_sport = [];
    public $assuranceScolaire = [];
    public $rcChients = [];
    public $rcSports = [];
    
    public function __construct()
    {
        $latestAssurance = DB::table('assurance_mrhs')
            ->latest('id')
            ->first();
        if ($latestAssurance) {
            $newId = $latestAssurance->id + 1;
            while (true) {
                $exists = DB::table('assurance_mrhs')
                    ->where('numero_client', $newId)
                    ->exists();
                if ($exists) {
                    $newId++;
                } else {
                    break; // Sortir de la boucle si le numéro n'existe pas
                }
            }
            $lastInsertedId = $newId;
        } else {
            $lastInsertedId = 1;
        }

        session(['numero_client_mrh' => $lastInsertedId]);
        if (session()->has('numero_client_mrh')) {$this->numero_client = session('numero_client_mrh');}
        if (session()->has('prenom_mrh')) {$this->prenom = session('prenom_mrh');}
        if (session()->has('nom_mrh')) {$this->nom = session('nom_mrh');}
        if (session()->has('adresse_mrh')) {$this->adresse = session('adresse_mrh');}
        if (session()->has('profession_mrh')) {$this->profession = session('profession_mrh');}
        if (session()->has('telephone_mrh')) {$this->telephone = session('telephone_mrh');}
        if (session()->has('genre_de_construction_mrh')) {$this->genre_de_construction = session('genre_de_construction_mrh');}
        if (session()->has('type_de_residence_mrh')) {$this->type_de_residence = session('type_de_residence_mrh');}
        if (session()->has('superficie_developpee_mrh')) {$this->superficie_developpee = session('superficie_developpee_mrh');}
        if (session()->has('nombre_piece_principale_mrh')) {$this->nombre_piece_principale = session('nombre_piece_principale_mrh');}
        if (session()->has('valeur_contenu_mrh')) {$this->valeur_contenu = session('valeur_contenu_mrh');}
        if (session()->has('valeur_du_batiment_mrh')) {$this->valeur_du_batiment = session('valeur_du_batiment_mrh');}
        if (session()->has('appartement_dans_un_immeuble_mrh')) {$this->appartement_dans_un_immeuble = session('appartement_dans_un_immeuble_mrh');}
        if (session()->has('garantie_de_base_mrh')) {$this->garantie_de_base = session('garantie_de_base_mrh');}
        if (session()->has('assistance_a_domicile_mrh')) {$this->assistance_a_domicile = session('assistance_a_domicile_mrh');}
        if (session()->has('dommages_electrique_mrh')) {$this->dommages_electrique = session('dommages_electrique_mrh');}
        if (session()->has('vol_remplacement_serrures_mrh')) {$this->vol_remplacement_serrures = session('vol_remplacement_serrures_mrh');}
        if (session()->has('rc_sejour_voyage_mrh')) {$this->rc_sejour_voyage = session('rc_sejour_voyage_mrh');}
        if (session()->has('rc_chients_mrh')) {$this->rc_chients = session('rc_chients_mrh');}
        if (session()->has('rc_sports_mrh')) {$this->rc_sports = session('rc_sports_mrh');}
        if (session()->has('assurance_scolaire_mrh')) {$this->assurance_scolaire = session('assurance_scolaire_mrh');}
        if (session()->has('age_mrh')) {$this->age = session('age_mrh');}
        if (session()->has('qualite_mrh')) {$this->qualite = session('qualite_mrh');}
        if (session()->has('telephone_mrh')) {$this->telephone = session('telephone_mrh');}
        if (session()->has('email_mrh')) {$this->email = session('email_mrh');}
        if (session()->has('date_effet_mrh')) {$this->date_effet = session('date_effet_mrh');}
        if (session()->has('date_echeance_mrh')) {$this->date_echeance = session('date_echeance_mrh');}
        if (session()->has('duree_mrh')) {$this->duree = session('duree_mrh');}
        if (session()->has('avenant_mrh')) {$this->avenant = session('avenant_mrh');}
        if (session()->has('numero_police_mrh')) {$this->numero_police = session('numero_police_mrh');}
        if (session()->has('profession_mrh')) {$this->profession = session('profession_mrh');}
        if (session()->has('effectif_rc_chients_mrh')) {$this->effectif_rc_chients = session('effectif_rc_chients_mrh');}
        if (session()->has('effectif_rc_sports_mrh')) {$this->effectif_rc_sports = session('effectif_rc_sports_mrh');}
        if (session()->has('effectif_assurance_scolaire_mrh')) {$this->effectif_assurance_scolaire = session('effectif_assurance_scolaire_mrh');}
               

    }
    
    public function mount()
    {
        for ($i = 1; $i <= $this->effectif_assurance_scolaire; $i++) {
            $this->assuranceScolaire[$i] = [
                'prenom_et_nom_scolaire.'.$i => '',
                'date_de_naissance_scolaire.'.$i => '',
                'age_scolaire.'.$i => '',
                'sexe_scolaire.'.$i => 'm', // Vous pouvez définir une valeur par défaut
                // Ajoutez d'autres champs si nécessaire
            ];
        }
        for ($i = 1; $i <= $this->effectif_rc_chients; $i++) {
            $this->rcChients[$i] = [
                'race.'.$i => '',
                'vaccin.'.$i => '',
                'date_derniere_vaccination.'.$i => '',
                // Ajoutez d'autres champs si nécessaire
            ];
        }
        for ($i = 1; $i <= $this->effectif_rc_sports; $i++) {
            $this->rcSports[$i] = [
                'prenom_et_nom_sport.'.$i => '',
                'date_de_naissance_sport.'.$i => '',
                'age_sport.'.$i => '',
                'sexe_sport.'.$i => '',
                'profession_sport.'.$i => '',
                // Ajoutez d'autres champs si nécessaire
            ];
        }
        $this->currentStep = 1;
    }
    public function vider_le_formulaire(){
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
        return redirect()->route('cotation_apporter_habitation');
    }
    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }
    public function goToStep($newStep)
    {
        if($newStep > $this->currentStep){
            $this->validateData();
        }
        $this->currentStep = $newStep;
    }
    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }
    public function updatedDateEffet()
    {
        if ($this->date_effet != null and $this->duree != null) {
            $date = Carbon::parse($this->date_effet);
            $this->date_echeance = $date->addMonths($this->duree)->subDays(1)->format('d/m/Y');
            //$this->date_echeance=$date;
            //dd($this->date_echeance);
        }
    }

    public function updatedDuree()
    {
        if ($this->date_effet != null and $this->duree != null) {
            $date = Carbon::parse($this->date_effet);
            $this->date_echeance = $date->addMonths($this->duree)->subDays(1)->format('d/m/Y');
            //$this->date_echeance=$date;
           //dd($this->date_echeance);
        }
    }

    public function validateData()
    {

        if ($this->currentStep == 1) {
            $this->validate([
                'numero_client' => 'required',
                'prenom' => 'required',
                'nom' => 'required',
                'profession' => 'required',
                'age' => 'required',
                'qualite' => 'required',
                'telephone' => 'required',
                'email' => 'required|email',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'adresse' => 'required',
                'genre_de_construction' => 'required',
                'type_de_residence' => 'required',
                'superficie_developpee' => 'required',
                'nombre_piece_principale' => 'required',
                'valeur_contenu' => 'required',
                'valeur_du_batiment' => 'required',
                'appartement_dans_un_immeuble' => 'required',
            ]);

        } elseif ($this->currentStep == 3) {
                if($this->rc_chients==1){
                    $this->validate([
                    'effectif_rc_chients' => 'required',
                ]);
                }
                if($this->rc_sports==1){
                    $this->validate([
                    'effectif_rc_sports' => 'required',
                ]);
                }
                if($this->assurance_scolaire==1){
                    $this->validate([
                    'effectif_assurance_scolaire' => 'required',
                ]);
                }
        
           
        } elseif ($this->currentStep == 4) {
            $this->validate([
                'numero_police' => 'required',
                'date_effet' => 'required',
                'date_echeance' => 'required',
                'duree' => 'required',
                'avenant' => 'required',
            ]);
        }
        elseif ($this->currentStep == 5) {
            if($this->assurance_scolaire==1){
            for ($i = 1; $i <= $this->effectif_assurance_scolaire; $i++) {
                $this->validate([
                    "prenom_et_nom_scolaire.$i" => 'required',
                    "date_de_naissance_scolaire.$i" => 'required|date', // Vous pouvez ajuster la validation en fonction de vos besoins.
                    "age_scolaire.$i" => 'required|numeric',
                    "sexe_scolaire.$i" => 'required|in:m,f', // Assurez-vous que les valeurs sont "m" ou "f".
                    "etablissement_scolaire.$i" => 'required',
                    "niveau_etude_scolaire.$i" => 'required',
                ]);
            }
         }
        }
        elseif ($this->currentStep == 6) {
            if($this->rc_chients==1){
            for ($i = 1; $i <= $this->effectif_rc_chients; $i++) {
                $this->validate([
                    "race.$i" => 'required',
                    "vaccin.$i" => 'required', // Vous pouvez ajuster la validation en fonction de vos besoins.
                    "date_derniere_vaccination.$i" => 'required',
                ]);
            }
          }
        }
        if($this->rc_chients==1){
            $this->text_rc_chients="null";
        }else{
            $this->text_rc_chients="Pas d'effectif Rc chients vous pouvez cliquez sur next";
        }
        if($this->rc_sports==1){
            $this->text_rc_sports="null";
        }else{
            $this->text_rc_sports="Pas d'effectif Rc sports vous pouvez cliquez sur envoyer";
        }
        if($this->assurance_scolaire==1){
            $this->text_assurance_scolaire="null";
        }else{
            $this->text_assurance_scolaire="Pas d'effectif Assurance scolaire vous pouvez cliquez sur next";
        }
    }
    public function calcule()
    {
        $this->resetErrorBag();
        if ($this->currentStep == 7) {
            if($this->rc_sports==1){
            for ($i = 1; $i <= $this->effectif_rc_sports; $i++) {
                $this->validate([
                    "prenom_et_nom_sport.$i" => 'required',
                    "date_de_naissance_sport.$i" => 'required|date', // Vous pouvez ajuster la validation en fonction de vos besoins.
                    "age_sport.$i" => 'required|numeric',
                    "sexe_sport.$i" => 'required|in:m,f', // Assurez-vous que les valeurs sont "m" ou "f".
                    "profession_sport.$i" => 'required',
                ]);
            }
        }
        if ($this->superficie_developpee >= 0 && $this->superficie_developpee <= 25) {
            $prime_de_base=45000;
        } elseif ($this->superficie_developpee >= 26 && $this->superficie_developpee <= 50) {
            $prime_de_base=47500;
        } elseif ($this->superficie_developpee >= 51 && $this->superficie_developpee <= 75) {
            $prime_de_base=50000;
        } elseif ($this->superficie_developpee >= 76 && $this->superficie_developpee <= 100) {
            $prime_de_base=52500;
        } elseif ($this->superficie_developpee >= 101 && $this->superficie_developpee <= 125) {
            $prime_de_base=55000;
        } elseif ($this->superficie_developpee >= 126 && $this->superficie_developpee <= 150) {
            $prime_de_base=57500;
        } elseif ($this->superficie_developpee >= 151 && $this->superficie_developpee <= 175) {
            $prime_de_base=60000;
        } elseif ($this->superficie_developpee >= 176 && $this->superficie_developpee <= 200) {
            $prime_de_base=62500;
        } elseif ($this->superficie_developpee >= 201 && $this->superficie_developpee <= 225) {
            $prime_de_base=65000;
        } 
        elseif ($this->superficie_developpee >= 226 && $this->superficie_developpee <= 250) {
            $prime_de_base=67500;
        } 
        elseif ($this->superficie_developpee >= 251 && $this->superficie_developpee <= 275) {
            $prime_de_base=70000;
        } 
        elseif ($this->superficie_developpee >= 276 && $this->superficie_developpee <= 300) {
            $prime_de_base=72500;
        } 
        elseif ($this->superficie_developpee >= 301 && $this->superficie_developpee <= 325) {
            $prime_de_base=75000;
        } 
        elseif ($this->superficie_developpee >= 326 && $this->superficie_developpee <= 350) {
            $prime_de_base=77500;
        } 
        elseif ($this->superficie_developpee >= 351 && $this->superficie_developpee <= 375) {
            $prime_de_base=80000;
        } 
        elseif ($this->superficie_developpee >= 376 && $this->superficie_developpee <= 400) {
            $prime_de_base=82500;
        } 
        elseif ($this->superficie_developpee >= 401 && $this->superficie_developpee <= 425) {
            $prime_de_base=85000;
        } 
        elseif ($this->superficie_developpee >= 426 && $this->superficie_developpee <= 450) {
            $prime_de_base=87500;
        } 
        elseif ($this->superficie_developpee >= 451 && $this->superficie_developpee <= 475) {
            $prime_de_base=90000;
        } 
        elseif ($this->superficie_developpee >= 476 && $this->superficie_developpee <= 500) {
            $prime_de_base=92500;
        } 
        if($this->valeur_contenu <=2000000){
            
        }else{
        for ($i = 2000000; $i < 350000000; $i += 1000000) { 
            if ($this->valeur_contenu <= $i && $this->valeur_contenu >= $i - 1000000) {
                $prime_de_base = $prime_de_base;
                if($i!=2000000){
                    break;
                }
            } else {
                $prime_de_base += 5000;
            }
        }
    }
    if($this->assistance_a_domicile==1){
        $prime_nette_assistance_a_domicile=5000;
    }else{
        $prime_nette_assistance_a_domicile=0;
    }
    if($this->dommages_electrique==1){
        $prime_nette_dommages_electrique=10000;
    }else{
        $prime_nette_dommages_electrique=0;
    }
    if($this->vol_remplacement_serrures==1){
        $prime_nette_vol_remplacement_serrures=5000;
    }else{
        $prime_nette_vol_remplacement_serrures=0;
    }
    if($this->rc_sejour_voyage==1){
        $prime_nette_rc_sejour_voyage=5000;
    }else{
        $prime_nette_rc_sejour_voyage=0;
    }
    if($this->rc_chients==1){
        $prime_nette_rc_chients=5000*$this->effectif_rc_chients;
    }else{
        $prime_nette_rc_chients=0;
    }
    if($this->rc_sports==1){
        $prime_nette_rc_sports=5000*$this->effectif_rc_sports;
    }else{
        $prime_nette_rc_sports=0;
    }
    if($this->assurance_scolaire==1){
        $prime_nette_assurance_scolaire=1000*$this->effectif_assurance_scolaire;
    }else{
        $prime_nette_assurance_scolaire=0;
    }
    $accessoire=6000;
    $prime_nette_total=$prime_de_base+$prime_nette_assistance_a_domicile+$prime_nette_dommages_electrique+ $prime_nette_vol_remplacement_serrures
    +$prime_nette_rc_sejour_voyage+$prime_nette_rc_chients+$prime_nette_rc_sports+$prime_nette_assurance_scolaire;
    $taxe=(($prime_nette_total+$accessoire)/100)*7;
        session()->put('prime_nette_assistance_a_domicile_mrh', $prime_nette_assistance_a_domicile);
        session()->put('prime_nette_dommages_electrique_mrh', $prime_nette_dommages_electrique);
        session()->put('prime_nette_vol_remplacement_serrures_mrh', $prime_nette_vol_remplacement_serrures);
        session()->put('prime_nette_rc_sejour_voyage_mrh', $prime_nette_rc_sejour_voyage);
        session()->put('prime_nette_rc_chients_mrh', $prime_nette_rc_chients);
        session()->put('prime_nette_rc_sports_mrh', $prime_nette_rc_sports);
        session()->put('prime_nette_assurance_scolaire_mrh', $prime_nette_assurance_scolaire);
    //  prime nette de base + prime nete garanti facultative =prime nette total
    //     accessoire 60000
    //     7% de prime nette totale + accesoir 
       // dd($prime_de_base);
        // dd($this->superficie_developpee,$superficie);
        // dd($this->prenom_et_nom_scolaire,$this->date_de_naissance_scolaire,$this->age_scolaire,$this->sexe_scolaire);
        session()->put('accessoire_mrh', $accessoire);
        session()->put('prime_de_base_mrh', $prime_de_base);
        session()->put('prime_nette_total_mrh', $prime_nette_total);
        session()->put('taxe_mrh', $taxe);
        session()->put('adresse_mrh', $this->adresse);
        session()->put('genre_de_construction_mrh', $this->genre_de_construction);
        session()->put('type_de_residence_mrh', $this->type_de_residence);
        session()->put('superficie_developpee_mrh', $this->superficie_developpee);
        session()->put('nombre_piece_principale_mrh', $this->nombre_piece_principale);
        session()->put('valeur_contenu_mrh', $this->valeur_contenu);
        session()->put('valeur_du_batiment_mrh', $this->valeur_du_batiment);
        session()->put('appartement_dans_un_immeuble_mrh', $this->appartement_dans_un_immeuble);

        session()->put('garantie_de_base_mrh', $this->garantie_de_base);
        session()->put('assistance_a_domicile_mrh', $this->assistance_a_domicile);
        session()->put('dommages_electrique_mrh', $this->dommages_electrique);
        session()->put('vol_remplacement_serrures_mrh', $this->vol_remplacement_serrures);
        session()->put('rc_sejour_voyage_mrh', $this->rc_sejour_voyage);
        session()->put('rc_chients_mrh', $this->rc_chients);
        session()->put('rc_sports_mrh', $this->rc_sports);
        session()->put('assurance_scolaire_mrh', $this->assurance_scolaire);


        session()->put('prenom_mrh', $this->prenom);
        session()->put('nom_mrh', $this->nom);
        session()->put('age_mrh', $this->age);
        session()->put('qualite_mrh', $this->qualite);
        session()->put('telephone_mrh', $this->telephone);
        session()->put('email_mrh', $this->email);
        session()->put('numero_client_mrh', $this->numero_client);
        session()->put('date_effet_mrh', $this->date_effet);
        session()->put('date_echeance_mrh', $this->date_echeance);
        session()->put('duree_mrh', $this->duree);
        session()->put('avenant_mrh', $this->avenant);
        session()->put('numero_police_mrh', $this->numero_police);
        session()->put('profession_mrh', $this->profession);
        session()->put('effectif_rc_chients_mrh', $this->effectif_rc_chients);
        session()->put('effectif_rc_sports_mrh', $this->effectif_rc_sports);
        session()->put('effectif_assurance_scolaire_mrh', $this->effectif_assurance_scolaire);

        session()->put('prenom_et_nom_scolaire_mrh', json_encode($this->prenom_et_nom_scolaire));
        session()->put('date_de_naissance_scolaire_mrh', json_encode($this->date_de_naissance_scolaire));
        session()->put('age_scolaire_mrh', json_encode($this->age_scolaire));
        session()->put('sexe_scolaire_mrh', json_encode($this->sexe_scolaire));
        session()->put('etablissement_scolaire_mrh', json_encode($this->etablissement_scolaire));
        session()->put('niveau_etude_scolaire_mrh', json_encode($this->niveau_etude_scolaire));
        session()->put('race_mrh', json_encode($this->race));
        session()->put('vaccin_mrh', json_encode($this->vaccin));
        session()->put('date_derniere_vaccination_mrh', json_encode($this->date_derniere_vaccination));
        session()->put('prenom_et_nom_sport_mrh', json_encode($this->prenom_et_nom_sport));
        session()->put('date_de_naissance_sport_mrh', json_encode($this->date_de_naissance_sport));
        session()->put('age_sport_mrh', json_encode($this->age_sport));
        session()->put('sexe_sport_mrh', json_encode($this->sexe_sport));
        session()->put('profession_sport_mrh', json_encode($this->profession_sport));

        session()->put('prime_ttc_axa_mrh', $prime_nette_total+$accessoire+$taxe); 
        session()->put('prime_ttc_cnart_mrh', $prime_de_base); 
        session()->put('prime_ttc_wafa_mrh', $prime_de_base); 
        session()->put('prime_ttc_amsa_mrh', $prime_de_base); 
        session()->put('prime_ttc_allianz_mrh', $prime_de_base); 
        session()->put('prime_ttc_nsia_mrh', $prime_de_base); 
        session()->put('prime_ttc_askia_mrh', $prime_de_base); 
     //dd(session()->get('prenom_et_nom_sport_mrh'),session()->get('date_derniere_vaccination_mrh'));
        session(['id_apporter_mrh' => Auth::user()->id]);

        return redirect()->route('calcule_assurance_mrh');
    }
}
    public function render()
    {
        return view('livewire.formulaire-mrh');
    }
}
