<?php

namespace App\Http\Livewire;

use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormulaireAporterTpv extends Component
{
    use WithFileUploads;

    public $marque;
    public $modele;
    public $puissance;
    public $energie;
    public $categorie;
    public $nombre_de_places;
    public $numero_client;
    public $prenom;
    public $nom;
    public $adresse;
    public $profession;
    public $numero_avenant;
    public $nom_sur_la_carte_grise;
    public $numero_police;
    public $date_effet;
    public $date_echeance;
    public $duree;
    public $valeur_neuve;
    public $valeur_venale;
    public $responsabilite_civile;
    public $thierce_complete = 0;
    public $thierce_collision = 0;
    public $incendie = 'non';
    public $bris_de_glace = 'non';
    public $vol = 'non';
    public $avance_sur_recours = 0;
    public $defence_et_recours = 0;
    public $personne_transportees = 0;
    public $telephone;
    public $date_de_naissance;
    public $immatriculation;
    public $mise_en_circulation;

    public $prime_net_rc_axa;
    public $accessoir_axa;
    public $taxe_axa;
    public $rga_axa;
    public $prime_ttc_axa;
    public $requete_axa;

    public $prime_net_rc_amsa;
    public $accessoir_amsa;
    public $taxe_amsa;
    public $rga_amsa;
    public $prime_ttc_amsa;
    public $requete_amsa;

    public $prime_net_rc_cnart;
    public $accessoir_cnart;
    public $taxe_cnart;
    public $rga_cnart;
    public $prime_ttc_cnart;
    public $requete_cnart;

    public $prime_net_rc_allianz;
    public $accessoir_allianz;
    public $taxe_allianz;
    public $rga_allianz;
    public $prime_ttc_allianz;
    public $requete_allianz;

    public $prime_net_rc_wafa;
    public $accessoir_wafa;
    public $taxe_wafa;
    public $rga_wafa;
    public $prime_ttc_wafa;
    public $requete_wafa;

    public $prime_net_rc_nsia;
    public $accessoir_nsia;
    public $taxe_nsia;
    public $rga_nsia;
    public $prime_ttc_nsia;
    public $requete_nsia;

    public $prime_net_rc_askia;
    public $accessoir_askia;
    public $taxe_askia;
    public $rga_askia;
    public $prime_ttc_askia;
    public $requete_askia;

    public $bonus_rc;
    public $reduction_thierce_collision;
    public $reduction_thierce_complete;
    public $reduction_avance_sur_recours;
    public $reduction_defense_et_recours;
    public $reduction_brise_de_glace;
    public $reduction_incendie;
    public $reduction_vol;
    public $reduction_personne_transportees;

    public function __construct()
    {
        $latestAssurance = DB::table('assurances')
            ->latest('id')
            ->first();
        if ($latestAssurance) {
            $newId = $latestAssurance->id + 1;
            while (true) {
                $exists = DB::table('assurances')
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

        session(['numero_client_tpv' => $lastInsertedId]);
        if (session()->has('numero_client_tpv')) {$this->numero_client = session('numero_client_tpv');}
        if (session()->has('prenom_tpv')) {$this->prenom = session('prenom_tpv');}
        if (session()->has('nom_tpv')) {$this->nom = session('nom_tpv');}
        if (session()->has('adresse_tpv')) {$this->adresse = session('adresse_tpv');}
        if (session()->has('profession_client_tpv')) {$this->profession = session('profession_client_tpv');}
        if (session()->has('telephone_tpv')) {$this->telephone = session('telephone_tpv');}
        if (session()->has('date_de_naissance_tpv')) {$this->date_de_naissance = session('date_de_naissance_tpv');}
        if (session()->has('marque_tpv')) {$this->marque = session('marque_tpv');}
        if (session()->has('modele_tpv')) {$this->modele = session('modele_tpv');}
        if (session()->has('puissance_tpv')) {$this->puissance = session('puissance_tpv');}
        if (session()->has('energie_tpv')) {$this->energie = session('energie_tpv');}
        if (session()->has('categorie_tpv')) {$this->categorie = session('categorie_tpv');}
        if (session()->has('nombre_de_places_tpv')) {$this->nombre_de_places = session('nombre_de_places_tpv');}
        if (session()->has('immatriculation_tpv')) {$this->immatriculation = session('immatriculation_tpv');}
        if (session()->has('mise_en_circulation_tpv')) {$this->mise_en_circulation = session('mise_en_circulation_tpv');}
        if (session()->has('valeur_neuve_tpv')) {$this->valeur_neuve = session('valeur_neuve_tpv');}
        if (session()->has('valeur_venale_tpv')) {$this->valeur_venale = session('valeur_venale_tpv');}
        if (session()->has('nom_carte_grise_tpv')) {$this->nom_sur_la_carte_grise = session('nom_carte_grise_tpv');}
        if (session()->has('numero_police_tpv')) {$this->numero_police = session('numero_police_tpv');}
        if (session()->has('date_effet_tpv')) {$this->date_effet = session('date_effet_tpv');}
        if (session()->has('date_echeance_tpv')) {$this->date_echeance = session('date_echeance_tpv');}
        if (session()->has('duree_tpv')) {$this->duree = session('duree_tpv');}
        if (session()->has('numero_avenant_tpv')) {$this->numero_avenant = session('numero_avenant_tpv');}
    }

    public $totalSteps = 4;
    public $currentStep = 1;
    public function goToStep($newStep)
    {
        $this->currentStep = $newStep;
    }
    public function mount()
    {
        $this->currentStep = 1;
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
                'adresse' => 'required',
                'profession' => 'required',
                'telephone' => 'required',
                'date_de_naissance' => 'required',
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'marque' => 'required',
                'modele' => 'required',
                'puissance' => 'required',
                'energie' => 'required',
                'categorie' => 'required',
                'nombre_de_places' => 'required',
                'valeur_neuve' => 'required',
                'valeur_venale' => 'required',
                'nom_sur_la_carte_grise' => 'required',
                'immatriculation' => 'required',
                'mise_en_circulation' => 'required',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'numero_police' => 'required',
                'date_effet' => 'required',
                'date_echeance' => 'required',
                'duree' => 'required',
                'numero_avenant' => 'required',
            ]);
        }
    }
    public function calcule()
    {
        $this->resetErrorBag();
        if ($this->currentStep == 4) {
            $this->validate([
                'bris_de_glace' => 'required',
                'avance_sur_recours' => 'required',
                'defence_et_recours' => 'required',
                'personne_transportees' => 'required',
            ]);
        }
        $avance_sur_recours_capital_garanti = 0;
        $defence_et_recours_capital_garanti = 0;
        if ($this->defence_et_recours == 4000) {$defence_et_recours_capital_garanti = 250000;}
        if ($this->defence_et_recours == 7500) {$defence_et_recours_capital_garanti = 400000;}

        if ($this->avance_sur_recours == 15000) {$avance_sur_recours_capital_garanti = 500000;}
        if ($this->avance_sur_recours == 30000) {$avance_sur_recours_capital_garanti = 1000000;}
        if ($this->avance_sur_recours == 45000) {$avance_sur_recours_capital_garanti = 1500000;}
        if ($this->avance_sur_recours == 60000) {$avance_sur_recours_capital_garanti = 2000000;}

        if ($this->bonus_rc == null) {$this->bonus_rc = 0;}

        $this->requete_axa = DB::table('tarif_rc_automobiles')->where('energie', '=', $this->energie)->where('puissance', '=', $this->puissance)->where('categories', '=', $this->categorie)->get('axa');
        $this->prime_net_rc_axa = $this->requete_axa['0']->axa;
        $bonus_rc_axa = ($this->prime_net_rc_axa / 100) * $this->bonus_rc;
        $this->prime_net_rc_axa = $this->prime_net_rc_axa - $bonus_rc_axa;
        $this->requete_amsa = DB::table('tarif_rc_automobiles')->where('energie', '=', $this->energie)->where('puissance', '=', $this->puissance)->where('categories', '=', $this->categorie)->get('amsa');
        $this->prime_net_rc_amsa = $this->requete_amsa['0']->amsa;
        $bonus_rc_amsa = ($this->prime_net_rc_amsa / 100) * $this->bonus_rc;
        $this->prime_net_rc_amsa = $this->prime_net_rc_amsa - $bonus_rc_amsa;
        $this->requete_cnart = DB::table('tarif_rc_automobiles')->where('energie', '=', $this->energie)->where('puissance', '=', $this->puissance)->where('categories', '=', $this->categorie)->get('cnart');
        $this->prime_net_rc_cnart = $this->requete_cnart['0']->cnart;
        $bonus_rc_cnart = ($this->prime_net_rc_cnart / 100) * $this->bonus_rc;
        $this->prime_net_rc_cnart = $this->prime_net_rc_cnart - $bonus_rc_cnart;
        $this->requete_wafa = DB::table('tarif_rc_automobiles')->where('energie', '=', $this->energie)->where('puissance', '=', $this->puissance)->where('categories', '=', $this->categorie)->get('wafa');
        $this->prime_net_rc_wafa = $this->requete_wafa['0']->wafa;
        $bonus_rc_wafa = ($this->prime_net_rc_wafa / 100) * $this->bonus_rc;
        $this->prime_net_rc_wafa = $this->prime_net_rc_wafa - $bonus_rc_wafa;
        $this->requete_allianz = DB::table('tarif_rc_automobiles')->where('energie', '=', $this->energie)->where('puissance', '=', $this->puissance)->where('categories', '=', $this->categorie)->get('allianz');
        $this->prime_net_rc_allianz = $this->requete_allianz['0']->allianz;
        $bonus_rc_allianz = ($this->prime_net_rc_allianz / 100) * $this->bonus_rc;
        $this->prime_net_rc_allianz = $this->prime_net_rc_allianz - $bonus_rc_allianz;
        $this->requete_nsia = DB::table('tarif_rc_automobiles')->where('energie', '=', $this->energie)->where('puissance', '=', $this->puissance)->where('categories', '=', $this->categorie)->get('nsia');
        $this->prime_net_rc_nsia = $this->requete_nsia['0']->nsia;
        $bonus_rc_nsia = ($this->prime_net_rc_nsia / 100) * $this->bonus_rc;
        $this->prime_net_rc_nsia = $this->prime_net_rc_nsia - $bonus_rc_nsia;
        $this->requete_askia = DB::table('tarif_rc_automobiles')->where('energie', '=', $this->energie)->where('puissance', '=', $this->puissance)->where('categories', '=', $this->categorie)->get('askia');
        $this->prime_net_rc_askia = $this->requete_askia['0']->askia;
        $bonus_rc_askia = ($this->prime_net_rc_askia / 100) * $this->bonus_rc;
        $this->prime_net_rc_askia = $this->prime_net_rc_askia - $bonus_rc_askia;

        switch ($this->duree) {
            case '1':
                $this->prime_net_rc_axa = $this->prime_net_rc_axa * 0.0875;
                $this->prime_net_rc_amsa = $this->prime_net_rc_amsa * 0.0875;
                $this->prime_net_rc_cnart = $this->prime_net_rc_cnart * 0.0875;
                $this->prime_net_rc_wafa = $this->prime_net_rc_wafa * 0.0875;
                $this->prime_net_rc_allianz = $this->prime_net_rc_allianz * 0.0875;
                $this->prime_net_rc_askia = $this->prime_net_rc_askia * 0.0875;
                $this->prime_net_rc_nsia = $this->prime_net_rc_nsia * 0.0875;
                break;
            case '2':
                $this->prime_net_rc_axa = $this->prime_net_rc_axa * 0.175;
                $this->prime_net_rc_amsa = $this->prime_net_rc_amsa * 0.175;
                $this->prime_net_rc_cnart = $this->prime_net_rc_cnart * 0.175;
                $this->prime_net_rc_wafa = $this->prime_net_rc_wafa * 0.175;
                $this->prime_net_rc_allianz = $this->prime_net_rc_allianz * 0.175;
                $this->prime_net_rc_nsia = $this->prime_net_rc_nsia * 0.175;
                $this->prime_net_rc_askia = $this->prime_net_rc_askia * 0.175;
                break;
            case '3':
                $this->prime_net_rc_axa = $this->prime_net_rc_axa * 0.2625;
                $this->prime_net_rc_amsa = $this->prime_net_rc_amsa * 0.2625;
                $this->prime_net_rc_cnart = $this->prime_net_rc_cnart * 0.2625;
                $this->prime_net_rc_wafa = $this->prime_net_rc_wafa * 0.2625;
                $this->prime_net_rc_allianz = $this->prime_net_rc_allianz * 0.2625;
                $this->prime_net_rc_nsia = $this->prime_net_rc_nsia * 0.2625;
                $this->prime_net_rc_askia = $this->prime_net_rc_askia * 0.2625;
                break;
            case '4':
                $this->prime_net_rc_axa = $this->prime_net_rc_axa * 0.35;
                $this->prime_net_rc_amsa = $this->prime_net_rc_amsa * 0.35;
                $this->prime_net_rc_cnart = $this->prime_net_rc_cnart * 0.35;
                $this->prime_net_rc_wafa = $this->prime_net_rc_wafa * 0.35;
                $this->prime_net_rc_allianz = $this->prime_net_rc_allianz * 0.35;
                $this->prime_net_rc_nsia = $this->prime_net_rc_nsia * 0.35;
                $this->prime_net_rc_askia = $this->prime_net_rc_askia * 0.35;
                break;
            case '5':
                $this->prime_net_rc_axa = $this->prime_net_rc_axa * 0.4375;
                $this->prime_net_rc_amsa = $this->prime_net_rc_amsa * 0.4375;
                $this->prime_net_rc_cnart = $this->prime_net_rc_cnart * 0.4375;
                $this->prime_net_rc_wafa = $this->prime_net_rc_wafa * 0.4375;
                $this->prime_net_rc_allianz = $this->prime_net_rc_allianz * 0.4375;
                $this->prime_net_rc_nsia = $this->prime_net_rc_nsia * 0.4375;
                $this->prime_net_rc_askia = $this->prime_net_rc_askia * 0.4375;
                break;
            case '6':
                $this->prime_net_rc_axa = $this->prime_net_rc_axa * 0.525;
                $this->prime_net_rc_amsa = $this->prime_net_rc_amsa * 0.525;
                $this->prime_net_rc_cnart = $this->prime_net_rc_cnart * 0.525;
                $this->prime_net_rc_wafa = $this->prime_net_rc_wafa * 0.525;
                $this->prime_net_rc_allianz = $this->prime_net_rc_allianz * 0.525;
                $this->prime_net_rc_nsia = $this->prime_net_rc_nsia * 0.525;
                $this->prime_net_rc_askia = $this->prime_net_rc_askia * 0.525;
                break;
            case '7':
                $this->prime_net_rc_axa = $this->prime_net_rc_axa * 0.6125;
                $this->prime_net_rc_amsa = $this->prime_net_rc_amsa * 0.6125;
                $this->prime_net_rc_cnart = $this->prime_net_rc_cnart * 0.6125;
                $this->prime_net_rc_wafa = $this->prime_net_rc_wafa * 0.6125;
                $this->prime_net_rc_allianz = $this->prime_net_rc_allianz * 0.6125;
                $this->prime_net_rc_nsia = $this->prime_net_rc_nsia * 0.6125;
                $this->prime_net_rc_askia = $this->prime_net_rc_askia * 0.6125;
                break;
            case '8':
                $this->prime_net_rc_axa = $this->prime_net_rc_axa * 0.7;
                $this->prime_net_rc_amsa = $this->prime_net_rc_amsa * 0.7;
                $this->prime_net_rc_cnart = $this->prime_net_rc_cnart * 0.7;
                $this->prime_net_rc_wafa = $this->prime_net_rc_wafa * 0.7;
                $this->prime_net_rc_allianz = $this->prime_net_rc_allianz * 0.7;
                $this->prime_net_rc_nsia = $this->prime_net_rc_nsia * 0.7;
                $this->prime_net_rc_askia = $this->prime_net_rc_askia * 0.7;
                break;
            case '9':
                $this->prime_net_rc_axa = $this->prime_net_rc_axa * 0.7875;
                $this->prime_net_rc_amsa = $this->prime_net_rc_amsa * 0.7875;
                $this->prime_net_rc_cnart = $this->prime_net_rc_cnart * 0.7875;
                $this->prime_net_rc_wafa = $this->prime_net_rc_wafa * 0.7875;
                $this->prime_net_rc_allianz = $this->prime_net_rc_allianz * 0.7875;
                $this->prime_net_rc_nsia = $this->prime_net_rc_nsia * 0.7875;
                $this->prime_net_rc_askia = $this->prime_net_rc_askia * 0.7875;
                break;
        }
        session()->put('prime_net_axa_rc_tpv', $this->prime_net_rc_axa);
        session()->put('prime_net_amsa_rc_tpv', $this->prime_net_rc_amsa);
        session()->put('prime_net_cnart_rc_tpv', $this->prime_net_rc_cnart);
        session()->put('prime_net_wafa_rc_tpv', $this->prime_net_rc_wafa);
        session()->put('prime_net_allianz_rc_tpv', $this->prime_net_rc_allianz);
        session()->put('prime_net_nsia_rc_tpv', $this->prime_net_rc_nsia);
        session()->put('prime_net_askia_rctpv', $this->prime_net_rc_askia);
//----------------------------------------------------autres garanties-------------------------
        $thierce_complete_total = 0;
        if ($this->thierce_complete != 0) {
            if ($this->categorie == 1) {
                //$req_franchise=DB::table('thierce_complete_automobiles')->where('franchise','=',$this->thierce_complete)->get('franchise');
                $req_taux = DB::table('thierce_complete_automobiles')->where('franchise', '=', $this->thierce_complete)->get('categorie1');
                $taux = $req_taux[0]->categorie1;
                $thierce_complete_total = ($taux / 100) * $this->valeur_neuve;
                //$franchise=$req_franchise[0]->franchise;
                // dd();
            }
            if ($this->categorie == 20 or $this->categorie == 21 or $this->categorie == 22) {
                //$req_franchise=DB::table('thierce_complete_automobiles')->where('franchise','=',$this->thierce_complete)->get('franchise');
                $req_taux = DB::table('thierce_complete_automobiles')->where('franchise', '=', $this->thierce_complete)->get('categorie2');
                $taux = $req_taux[0]->categorie2;
                $thierce_complete_total = ($taux / 100) * $this->valeur_neuve;
                //$franchise=$req_franchise[0]->franchise;
                //dd($thierce_complete_total);
            }
        }
        $thierce_collision_total = 0;
        if ($this->thierce_collision != 0) {
            if ($this->categorie == 1) {
                //$req_franchise=DB::table('thierce_complete_automobiles')->where('franchise','=',$this->thierce_complete)->get('franchise');
                $req_taux = DB::table('thierce_collision_automobiles')->where('franchise', '=', $this->thierce_collision)->get('categorie1');
                $taux_collision = $req_taux[0]->categorie1;
                $thierce_collision_total = ($taux_collision / 100) * $this->valeur_neuve;
                //$franchise=$req_franchise[0]->franchise;
                //dd($taux_collision,$thierce_collision_total);
            }
            if (($this->categorie == 20 or $this->categorie == 21 or $this->categorie == 22) and $this->puissance < 9) {
                //$req_franchise=DB::table('thierce_complete_automobiles')->where('franchise','=',$this->thierce_complete)->get('franchise');
                $req_taux = DB::table('thierce_collision_automobiles')->where('franchise', '=', $this->thierce_collision)->get('categorie2_moins_9_cv');
                $taux = $req_taux[0]->categorie2_moins_9_cv;
                $thierce_collision_total = ($taux / 100) * $this->valeur_neuve;
                //$franchise=$req_franchise[0]->franchise;
                //dd($taux,$thierce_collision_total);
            }
            if (($this->categorie == 20 or $this->categorie == 21 or $this->categorie == 22) and $this->puissance > 9) {
                //$req_franchise=DB::table('thierce_complete_automobiles')->where('franchise','=',$this->thierce_complete)->get('franchise');
                $req_taux = DB::table('thierce_collision_automobiles')->where('franchise', '=', $this->thierce_collision)->get('categorie2_plus_9_cv');
                $taux = $req_taux[0]->categorie2_plus_9_cv;
                $thierce_collision_total = ($taux / 100) * $this->valeur_neuve;
                //$franchise=$req_franchise[0]->franchise;
                // dd($taux,$thierce_collision_total);
            }
            if ($this->categorie == 30 or $this->categorie == 31) {
                //$req_franchise=DB::table('thierce_complete_automobiles')->where('franchise','=',$this->thierce_complete)->get('franchise');
                $req_taux = DB::table('thierce_collision_automobiles')->where('franchise', '=', $this->thierce_collision)->get('categorie3_4');
                $taux = $req_taux[0]->categorie3_4;
                $thierce_collision_total = ($taux / 100) * $this->valeur_neuve;
                //$franchise=$req_franchise[0]->franchise;
                //dd($taux,$thierce_collision_total);
            }
        }
        if ($this->incendie == 'oui') {
            $incendie = $this->valeur_venale * 0.5;
            if ($incendie < 5000) {
                $incendie = 5000;
            }
        } else {
            $incendie = 0;
        }

        if ($this->vol == 'oui') {
            $vol = $this->valeur_venale * 0.3;
            if ($vol < 3000) {
                $vol = 3000;
            }
        } else {
            $vol = 0;
        }
        if ($this->nombre_de_places > 5 and $this->personne_transportees == 6500) {
            $place = $this->nombre_de_places - 5;
            $prime_nombre_de_place = $this->personne_transportees + ($place * 1500);
        }
        if ($this->nombre_de_places > 5 and $this->personne_transportees == 13000) {
            $place = $this->nombre_de_places - 5;
            $prime_nombre_de_place = $this->personne_transportees + ($place * 3000);
        }
        if ($this->nombre_de_places > 5 and $this->personne_transportees == 20000) {
            $place = $this->nombre_de_places - 5;
            $prime_nombre_de_place = $this->personne_transportees + ($place * 4500);
        }
        if (!isset($prime_nombre_de_place)) {
            $prime_nombre_de_place = $this->personne_transportees;
        }
        if ($this->bris_de_glace == 'oui' and $this->puissance <= 10) {
            $prime_bris_de_glace = 25000;
        }
        if ($this->bris_de_glace == 'oui' and $this->puissance <= 14 and $this->puissance > 10) {
            $prime_bris_de_glace = 40000;
        }
        if ($this->bris_de_glace == 'oui' and $this->puissance < 23 and $this->puissance > 14) {
            $prime_bris_de_glace = 50000;
        }
        if ($this->bris_de_glace == 'oui' and $this->puissance == 24) {
            $prime_bris_de_glace = 60000;
        }
        if ($this->bris_de_glace == 'non') {
            $prime_bris_de_glace = 0;
        }
//--------------------------------------axa----------------------------------------------------------
        $prime_net_total_axa = $thierce_complete_total + $this->prime_net_rc_axa + $thierce_collision_total + $incendie + $vol + $this->avance_sur_recours + $this->defence_et_recours + $prime_nombre_de_place + $prime_bris_de_glace;
        if ($prime_net_total_axa < 50000) {
            $this->accessoir_axa = 3000;
        }
        if ($prime_net_total_axa > 50000 and $prime_net_total_axa < 100000) {
            $this->accessoir_axa = 5000;
        }
        if ($prime_net_total_axa > 100000 and $prime_net_total_axa < 150000) {
            $this->accessoir_axa = 10000;
        }
        if ($prime_net_total_axa > 150000) {
            $this->accessoir_axa = 15000;
        }
        $this->taxe_axa = ($prime_net_total_axa + $this->accessoir_axa) * 0.1;
        $this->rga_axa = $this->prime_net_rc_axa * 0.025;
        $this->prime_ttc_axa = $prime_net_total_axa + $this->accessoir_axa + $this->taxe_axa + $this->rga_axa;
//---------------------------------------------------amsa-------------------------------------------
        $prime_net_total_amsa = $thierce_complete_total + $this->prime_net_rc_amsa + $thierce_collision_total + $incendie + $vol + $this->avance_sur_recours + $this->defence_et_recours + $prime_nombre_de_place + $prime_bris_de_glace;
        if ($prime_net_total_amsa < 50000) {
            $this->accessoir_amsa = 3000;
        }
        if ($prime_net_total_amsa > 50000 and $prime_net_total_amsa < 100000) {
            $this->accessoir_amsa = 5000;
        }
        if ($prime_net_total_amsa > 100000 and $prime_net_total_amsa < 150000) {
            $this->accessoir_amsa = 10000;
        }
        if ($prime_net_total_amsa > 150000) {
            $this->accessoir_amsa = 15000;
        }
        $this->taxe_amsa = ($prime_net_total_amsa + $this->accessoir_amsa) * 0.1;
        $this->rga_amsa = $this->prime_net_rc_amsa * 0.025;
        $this->prime_ttc_amsa = $prime_net_total_amsa + $this->accessoir_amsa + $this->taxe_amsa + $this->rga_amsa;
//---------------------------------------------------cnart-------------------------------------------
        $prime_net_total_cnart = $thierce_complete_total + $this->prime_net_rc_cnart + $thierce_collision_total + $incendie + $vol + $this->avance_sur_recours + $this->defence_et_recours + $prime_nombre_de_place + $prime_bris_de_glace;
        if ($prime_net_total_cnart < 50000) {
            $this->accessoir_cnart = 3000;
        }
        if ($prime_net_total_cnart > 50000 and $prime_net_total_cnart < 100000) {
            $this->accessoir_cnart = 5000;
        }
        if ($prime_net_total_cnart > 100000 and $prime_net_total_cnart < 150000) {
            $this->accessoir_cnart = 10000;
        }
        if ($prime_net_total_cnart > 150000) {
            $this->accessoir_cnart = 15000;
        }
        $this->taxe_cnart = ($prime_net_total_cnart + $this->accessoir_cnart) * 0.1;
        $this->rga_cnart = $this->prime_net_rc_cnart * 0.025;
        $this->prime_ttc_cnart = $prime_net_total_cnart + $this->accessoir_cnart + $this->taxe_cnart + $this->rga_cnart;
//---------------------------------------------------wafa-------------------------------------------
        $prime_net_total_wafa = $thierce_complete_total + $this->prime_net_rc_wafa + $thierce_collision_total + $incendie + $vol + $this->avance_sur_recours + $this->defence_et_recours + $prime_nombre_de_place + $prime_bris_de_glace;
        if ($prime_net_total_wafa < 50000) {
            $this->accessoir_wafa = 3000;
        }
        if ($prime_net_total_wafa > 50000 and $prime_net_total_wafa < 100000) {
            $this->accessoir_wafa = 5000;
        }
        if ($prime_net_total_wafa > 100000 and $prime_net_total_wafa < 150000) {
            $this->accessoir_wafa = 10000;
        }
        if ($prime_net_total_wafa > 150000) {
            $this->accessoir_wafa = 15000;
        }
        $this->taxe_wafa = ($prime_net_total_wafa + $this->accessoir_wafa) * 0.1;
        $this->rga_wafa = $this->prime_net_rc_wafa * 0.025;
        $this->prime_ttc_wafa = $prime_net_total_wafa + $this->accessoir_wafa + $this->taxe_wafa + $this->rga_wafa;
//---------------------------------------------------allianz-------------------------------------------
        $prime_net_total_allianz = $thierce_complete_total + $this->prime_net_rc_allianz + $thierce_collision_total + $incendie + $vol + $this->avance_sur_recours + $this->defence_et_recours + $prime_nombre_de_place + $prime_bris_de_glace;
        if ($prime_net_total_allianz < 50000) {
            $this->accessoir_allianz = 3000;
        }
        if ($prime_net_total_allianz > 50000 and $prime_net_total_allianz < 100000) {
            $this->accessoir_allianz = 5000;
        }
        if ($prime_net_total_allianz > 100000 and $prime_net_total_allianz < 150000) {
            $this->accessoir_allianz = 10000;
        }
        if ($prime_net_total_allianz > 150000) {
            $this->accessoir_wafa = 15000;
        }
        $this->taxe_allianz = ($prime_net_total_allianz + $this->accessoir_allianz) * 0.1;
        $this->rga_allianz = $this->prime_net_rc_allianz * 0.025;
        $this->prime_ttc_allianz = $prime_net_total_allianz + $this->accessoir_allianz + $this->taxe_allianz + $this->rga_allianz;
//---------------------------------------------------nsia-------------------------------------------
        $prime_net_total_nsia = $thierce_complete_total + $this->prime_net_rc_nsia + $thierce_collision_total + $incendie + $vol + $this->avance_sur_recours + $this->defence_et_recours + $prime_nombre_de_place + $prime_bris_de_glace;
        if ($prime_net_total_nsia < 50000) {
            $this->accessoir_nsia = 3000;
        }
        if ($prime_net_total_nsia > 50000 and $prime_net_total_nsia < 100000) {
            $this->accessoir_nsia = 5000;
        }
        if ($prime_net_total_nsia > 100000 and $prime_net_total_nsia < 150000) {
            $this->accessoir_nsia = 10000;
        }
        if ($prime_net_total_nsia > 150000) {
            $this->accessoir_nsia = 15000;
        }
        $this->taxe_nsia = ($prime_net_total_nsia + $this->accessoir_nsia) * 0.1;
        $this->rga_nsia = $this->prime_net_rc_nsia * 0.025;
        $this->prime_ttc_nsia = $prime_net_total_nsia + $this->accessoir_nsia + $this->taxe_nsia + $this->rga_nsia;
//---------------------------------------------------askia-------------------------------------------
        $prime_net_total_askia = $thierce_complete_total + $this->prime_net_rc_askia + $thierce_collision_total + $incendie + $vol + $this->avance_sur_recours + $this->defence_et_recours + $prime_nombre_de_place + $prime_bris_de_glace;
        if ($prime_net_total_askia < 50000) {
            $this->accessoir_askia = 3000;
        }
        if ($prime_net_total_askia > 50000 and $prime_net_total_askia < 100000) {
            $this->accessoir_askia = 5000;
        }
        if ($prime_net_total_askia > 100000 and $prime_net_total_askia < 150000) {
            $this->accessoir_askia = 10000;
        }
        if ($prime_net_total_askia > 150000) {
            $this->accessoir_askia = 15000;
        }
        $this->taxe_askia = ($prime_net_total_askia + $this->accessoir_askia) * 0.1;
        $this->rga_askia = $this->prime_net_rc_askia * 0.025;
        $this->prime_ttc_askia = $prime_net_total_askia + $this->accessoir_askia + $this->taxe_askia + $this->rga_askia;

        session(['prenom_tpv' => $this->prenom]);
        session(['nom_tpv' => $this->nom]);
        session(['adresse_tpv' => $this->adresse]);
        session(['profession_tpv' => $this->profession]);
        session(['telephone_tpv' => $this->telephone]);
        session(['date_de_naissance_tpv' => $this->date_de_naissance]);
        session(['marque_tpv' => $this->marque]);
        session(['modele_tpv' => $this->modele]);
        session(['puissance_tpv' => $this->puissance]);
        session(['energie_tpv' => $this->energie]);
        session(['categorie_tpv' => $this->categorie]);
        session(['nombre_de_places_tpv' => $this->nombre_de_places]);
        session(['immatriculation_tpv' => $this->immatriculation]);
        session(['mise_en_circulation_tpv' => $this->mise_en_circulation]);
        session(['valeur_neuve_tpv' => $this->valeur_neuve]);
        session(['valeur_venale_tpv' => $this->valeur_venale]);
        session(['nom_carte_grise_tpv' => $this->nom_sur_la_carte_grise]);
        session(['numero_police_tpv' => $this->numero_police]);
        session(['date_effet_tpv' => $this->date_effet]);
        session(['date_echeance_tpv' => $this->date_echeance]);
        session(['duree_tpv' => $this->duree]);
        session(['numero_avenant_tpv' => $this->numero_avenant]);
        session(['bonus_rc_tpv' => $this->bonus_rc]);
        session(['thierce_complete_tpv' => $thierce_complete_total]);
        session(['thierce_collision_tpv' => $thierce_collision_total]);
        session(['vol_tpv' => $vol]);
        session(['incendie_tpv' => $incendie]);
        session(['bris_de_glace_tpv' => $prime_bris_de_glace]);
        session(['defence_et_recours_tpv' => $this->defence_et_recours]);
        session(['avance_sur_recours_tpv' => $this->avance_sur_recours]);
        session(['personnes_transportees_tpv' => $this->personne_transportees]);
        session(['thierce_complete_franchise_tpv' => $this->thierce_complete]);
        session(['thierce_collision_franchise_tpv' => $this->thierce_collision]);
        session(['vol_franchise_tpv' => "30000"]);
        session(['incendie_franchise_tpv' => "30000"]);
        session(['defence_et_recours_capital_garanti_tpv' => $defence_et_recours_capital_garanti]);
        session(['avance_sur_recours_capital_garanti_tpv' => $avance_sur_recours_capital_garanti]);
        session(['id_apporter_tpv' => Auth::user()->id]);
        //dd(session()->get('bris_de_glace_tpv'));
        // $article = Assurance::create(['numero_client' => $this->numero_client,'prenom' => $this->prenom
        //     ,'nom' => $this->nom,'profession' => $this->profession,'adresse' => $this->adresse
        //     ,'marque' => $this->marque,'modele' => $this->modele,'puissance' => $this->puissance
        //     ,'energie' => $this->energie,'categorie' => $this->categorie,'nombre_de_place' => $this->nombre_de_places
        //     ,'valeur_neuve' => $this->valeur_neuve,'valeur_venale' => $this->valeur_venale
        //     ,'nom_sur_la_carte_grise' => $this->nom_sur_la_carte_grise,'numero_police' => $this->numero_police
        //     ,'date_effet' => $this->date_effet,'date_echeance' => $this->date_echeance
        //     ,'dure' => $this->duree,'numero_avenant' => $this->numero_avenant,'niveau' => 'tpv','bonus_rc' => $this->bonus_rc
        //     ,'thierce_complete' => $thierce_complete_total,'thierce_collision' => $thierce_collision_total
        //     ,'telephone' => $this->telephone,'immatriculation' => $this->immatriculation,'date_de_naissance' =>$this->date_de_naissance
        //     ,'mise_en_circulation' => $this->mise_en_circulation,'vol' => $vol,'incendie' => $incendie,'bris_de_glace' => $prime_bris_de_glace,
        //     'defence_et_recours' => $this->defence_et_recours,'avance_sur_recours' => $this->avance_sur_recours,
        //     'personnes_transportees' => $this->personne_transportees,'thierce_complete_franchise' => $this->thierce_complete,'thierce_collision_franchise' => $this->thierce_collision,
        //     'vol_franchise' => "30000",'defence_et_recours_capital_garanti' => $defence_et_recours_capital_garanti,'avance_sur_recours_capital_garanti' => $avance_sur_recours_capital_garanti

        //     ,'id_apporter' => Auth::user()->id]);
        // session()->put('id_tpv', $article->id);

        session()->put('prime_net_axa_tpv', $prime_net_total_axa);
        session()->put('prime_net_amsa_tpv', $prime_net_total_amsa);
        session()->put('prime_net_cnart_tpv', $prime_net_total_cnart);
        session()->put('prime_net_wafa_tpv', $prime_net_total_wafa);
        session()->put('prime_net_allianz_tpv', $prime_net_total_allianz);
        session()->put('prime_net_nsia_tpv', $prime_net_total_nsia);
        session()->put('prime_net_askia_tpv', $prime_net_total_askia);

        session()->put('accessoir_axa_tpv', $this->accessoir_axa);
        session()->put('accessoir_amsa_tpv', $this->accessoir_amsa);
        session()->put('accessoir_cnart_tpv', $this->accessoir_cnart);
        session()->put('accessoir_wafa_tpv', $this->accessoir_wafa);
        session()->put('accessoir_allianz_tpv', $this->accessoir_allianz);
        session()->put('accessoir_nsia_tpv', $this->accessoir_nsia);
        session()->put('accessoir_askia_tpv', $this->accessoir_askia);

        session()->put('taxe_axa_tpv', $this->taxe_axa);
        session()->put('taxe_amsa_tpv', $this->taxe_amsa);
        session()->put('taxe_cnart_tpv', $this->taxe_cnart);
        session()->put('taxe_wafa_tpv', $this->taxe_wafa);
        session()->put('taxe_allianz_tpv', $this->taxe_allianz);
        session()->put('taxe_nsia_tpv', $this->taxe_nsia);
        session()->put('taxe_askia_tpv', $this->taxe_askia);

        session()->put('rga_axa_tpv', $this->rga_axa);
        session()->put('rga_amsa_tpv', $this->rga_amsa);
        session()->put('rga_cnart_tpv', $this->rga_cnart);
        session()->put('rga_wafa_tpv', $this->rga_wafa);
        session()->put('rga_allianz_tpv', $this->rga_allianz);
        session()->put('rga_nsia_tpv', $this->rga_nsia);
        session()->put('rga_askia_tpv', $this->rga_askia);

        session()->put('prime_ttc_axa_tpv', $this->prime_ttc_axa);
        session()->put('prime_ttc_amsa_tpv', $this->prime_ttc_amsa);
        session()->put('prime_ttc_cnart_tpv', $this->prime_ttc_cnart);
        session()->put('prime_ttc_wafa_tpv', $this->prime_ttc_wafa);
        session()->put('prime_ttc_allianz_tpv', $this->prime_ttc_allianz);
        session()->put('prime_ttc_nsia_tpv', $this->prime_ttc_nsia);
        session()->put('prime_ttc_askia_tpv', $this->prime_ttc_askia);
        session()->put('duree_tpv', $this->duree);
        return redirect()->route('calcule_assurance_tpv');
    }
    public function render()
    {
        return view('livewire.formulaire-aporter-tpv');
    }
}
