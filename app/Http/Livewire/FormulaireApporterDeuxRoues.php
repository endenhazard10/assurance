<?php
namespace App\Http\Livewire;
use DateTime;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\TarifRcAutomobile;
use App\Models\Assurance;
use App\Models\ThierceCompleteAutomobile;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class FormulaireApporterDeuxRoues extends Component
{
    use WithFileUploads;

    public $marque;
    public $modele;
    public $puissance;
    public $energie;
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
    public $responsabilite_civile;
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


    public $totalSteps = 4;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }
    public function updatedDateEffet()
    {
        if ($this->date_effet!=null and $this->duree!=null) {
            $date = Carbon::parse($this->date_effet);
            $this->date_echeance=$date->addMonths($this->duree)->subDays(1)->format('d/m/Y');
            //$this->date_echeance=$date;
            //dd($this->date_echeance);
        }
    }

    public function updatedDuree()
    {
        if ($this->date_effet!=null and $this->duree!=null) {
            $date = Carbon::parse($this->date_effet);
            $this->date_echeance=$date->addMonths($this->duree)->subDays(1)->format('d/m/Y');
            //$this->date_echeance=$date;
            //dd($this->date_echeance);
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                 'numero_client'=>'required',
                 'prenom'=>'required',
                 'nom'=>'required',
                 'adresse'=>'required',
                 'profession'=>'required',
                 'telephone'=>'required',
                 'date_de_naissance'=>'required',
              ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                'marque'=>'required',
                'modele'=>'required',
                'puissance'=>'required',
                'energie'=>'required',
                'nom_sur_la_carte_grise'=>'required',
                'immatriculation'=>'required',
                'mise_en_circulation'=>'required',
            ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                'numero_police'=>'required',
                'date_effet'=>'required',
                'date_echeance'=>'required',
                'duree'=>'required',
                'numero_avenant'=>'required',
              ]);
        }
    }
    public function calcule(){
          $this->resetErrorBag();

          if($this->bonus_rc==null){$this->bonus_rc=0;}
          
        $this->requete_axa=DB::table('tarif2_roues')->where('type','=',$this->puissance)->get('axa');
        $this->prime_net_rc_axa=$this->requete_axa['0']->axa;
        $bonus_rc_axa=($this->prime_net_rc_axa/100)*$this->bonus_rc;
        $this->prime_net_rc_axa=$this->prime_net_rc_axa-$bonus_rc_axa;
        $this->requete_amsa=DB::table('tarif2_roues')->where('type','=',$this->puissance)->get('amsa');
        $this->prime_net_rc_amsa=$this->requete_amsa['0']->amsa;
        $bonus_rc_amsa=($this->prime_net_rc_amsa/100)*$this->bonus_rc;
        $this->prime_net_rc_amsa=$this->prime_net_rc_amsa-$bonus_rc_amsa;
        $this->requete_cnart=DB::table('tarif2_roues')->where('type','=',$this->puissance)->get('cnart');
        $this->prime_net_rc_cnart=$this->requete_cnart['0']->cnart;
        $bonus_rc_cnart=($this->prime_net_rc_cnart/100)*$this->bonus_rc;
        $this->prime_net_rc_cnart=$this->prime_net_rc_cnart-$bonus_rc_cnart;
        $this->requete_wafa=DB::table('tarif2_roues')->where('type','=',$this->puissance)->get('wafa');
        $this->prime_net_rc_wafa=$this->requete_wafa['0']->wafa;
        $bonus_rc_wafa=($this->prime_net_rc_wafa/100)*$this->bonus_rc;
        $this->prime_net_rc_wafa=$this->prime_net_rc_wafa-$bonus_rc_wafa;
        $this->requete_allianz=DB::table('tarif2_roues')->where('type','=',$this->puissance)->get('allianz');
        $this->prime_net_rc_allianz=$this->requete_allianz['0']->allianz;
        $bonus_rc_allianz=($this->prime_net_rc_allianz/100)*$this->bonus_rc;
        $this->prime_net_rc_allianz=$this->prime_net_rc_allianz-$bonus_rc_allianz;
        $this->requete_nsia=DB::table('tarif2_roues')->where('type','=',$this->puissance)->get('nsia');
        $this->prime_net_rc_nsia=$this->requete_nsia['0']->nsia;
        $bonus_rc_nsia=($this->prime_net_rc_nsia/100)*$this->bonus_rc;
        $this->prime_net_rc_nsia=$this->prime_net_rc_nsia-$bonus_rc_nsia;
        $this->requete_askia=DB::table('tarif2_roues')->where('type','=',$this->puissance)->get('askia');
        $this->prime_net_rc_askia=$this->requete_askia['0']->askia;
        $bonus_rc_askia=($this->prime_net_rc_askia/100)*$this->bonus_rc;
        $this->prime_net_rc_askia=$this->prime_net_rc_askia-$bonus_rc_askia;
        
        switch ($this->duree) {
            case '1':
                $this->prime_net_rc_axa=$this->prime_net_rc_axa*0.0875;
                $this->prime_net_rc_amsa=$this->prime_net_rc_amsa*0.0875;
                $this->prime_net_rc_cnart=$this->prime_net_rc_cnart*0.0875;
                $this->prime_net_rc_wafa=$this->prime_net_rc_wafa*0.0875;
                $this->prime_net_rc_allianz=$this->prime_net_rc_allianz*0.0875;
                $this->prime_net_rc_askia=$this->prime_net_rc_askia*0.0875;
                $this->prime_net_rc_nsia=$this->prime_net_rc_nsia*0.0875;
                break;
            case '2':
                $this->prime_net_rc_axa=$this->prime_net_rc_axa*0.175;
                $this->prime_net_rc_amsa=$this->prime_net_rc_amsa*0.175;
                $this->prime_net_rc_cnart=$this->prime_net_rc_cnart*0.175;
                $this->prime_net_rc_wafa=$this->prime_net_rc_wafa*0.175;
                $this->prime_net_rc_allianz=$this->prime_net_rc_allianz*0.175;
                $this->prime_net_rc_nsia=$this->prime_net_rc_nsia*0.175;
                $this->prime_net_rc_askia=$this->prime_net_rc_askia*0.175;
                break;
            case '3':
                $this->prime_net_rc_axa=$this->prime_net_rc_axa*0.2625;
                $this->prime_net_rc_amsa=$this->prime_net_rc_amsa*0.2625;
                $this->prime_net_rc_cnart=$this->prime_net_rc_cnart*0.2625;
                $this->prime_net_rc_wafa=$this->prime_net_rc_wafa*0.2625;
                $this->prime_net_rc_allianz=$this->prime_net_rc_allianz*0.2625;
                $this->prime_net_rc_nsia=$this->prime_net_rc_nsia*0.2625;
                $this->prime_net_rc_askia=$this->prime_net_rc_askia*0.2625;
                break;
            case '4':
                $this->prime_net_rc_axa=$this->prime_net_rc_axa*0.35;
                $this->prime_net_rc_amsa=$this->prime_net_rc_amsa*0.35;
                $this->prime_net_rc_cnart=$this->prime_net_rc_cnart*0.35;
                $this->prime_net_rc_wafa=$this->prime_net_rc_wafa*0.35;
                $this->prime_net_rc_allianz=$this->prime_net_rc_allianz*0.35;
                $this->prime_net_rc_nsia=$this->prime_net_rc_nsia*0.35;
                $this->prime_net_rc_askia=$this->prime_net_rc_askia*0.35;
                break;
            case '5':
                $this->prime_net_rc_axa=$this->prime_net_rc_axa*0.4375;
                $this->prime_net_rc_amsa=$this->prime_net_rc_amsa*0.4375;
                $this->prime_net_rc_cnart=$this->prime_net_rc_cnart*0.4375;
                $this->prime_net_rc_wafa=$this->prime_net_rc_wafa*0.4375;
                $this->prime_net_rc_allianz=$this->prime_net_rc_allianz*0.4375;
                $this->prime_net_rc_nsia=$this->prime_net_rc_nsia*0.4375;
                $this->prime_net_rc_askia=$this->prime_net_rc_askia*0.4375;
                break;
            case '6':
                $this->prime_net_rc_axa=$this->prime_net_rc_axa*0.525;
                $this->prime_net_rc_amsa=$this->prime_net_rc_amsa*0.525;
                $this->prime_net_rc_cnart=$this->prime_net_rc_cnart*0.525;
                $this->prime_net_rc_wafa=$this->prime_net_rc_wafa*0.525;
                $this->prime_net_rc_allianz=$this->prime_net_rc_allianz*0.525;
                $this->prime_net_rc_nsia=$this->prime_net_rc_nsia*0.525;
                $this->prime_net_rc_askia=$this->prime_net_rc_askia*0.525;
                break;
            case '7':
                $this->prime_net_rc_axa=$this->prime_net_rc_axa*0.6125;
                $this->prime_net_rc_amsa=$this->prime_net_rc_amsa*0.6125;
                $this->prime_net_rc_cnart=$this->prime_net_rc_cnart*0.6125;
                $this->prime_net_rc_wafa=$this->prime_net_rc_wafa*0.6125;
                $this->prime_net_rc_allianz=$this->prime_net_rc_allianz*0.6125;
                $this->prime_net_rc_nsia=$this->prime_net_rc_nsia*0.6125;
                $this->prime_net_rc_askia=$this->prime_net_rc_askia*0.6125;
                break;
            case '8':
                $this->prime_net_rc_axa=$this->prime_net_rc_axa*0.7;
                $this->prime_net_rc_amsa=$this->prime_net_rc_amsa*0.7;
                $this->prime_net_rc_cnart=$this->prime_net_rc_cnart*0.7;
                $this->prime_net_rc_wafa=$this->prime_net_rc_wafa*0.7;
                $this->prime_net_rc_allianz=$this->prime_net_rc_allianz*0.7;
                $this->prime_net_rc_nsia=$this->prime_net_rc_nsia*0.7;
                $this->prime_net_rc_askia=$this->prime_net_rc_askia*0.7;
                break;
            case '9':
                $this->prime_net_rc_axa=$this->prime_net_rc_axa*0.7875;
                $this->prime_net_rc_amsa=$this->prime_net_rc_amsa*0.7875;
                $this->prime_net_rc_cnart=$this->prime_net_rc_cnart*0.7875;
                $this->prime_net_rc_wafa=$this->prime_net_rc_wafa*0.7875;
                $this->prime_net_rc_allianz=$this->prime_net_rc_allianz*0.7875;
                $this->prime_net_rc_nsia=$this->prime_net_rc_nsia*0.7875;
                $this->prime_net_rc_askia=$this->prime_net_rc_askia*0.7875;
                break;
        }
        session()->put('prime_net_axa_rc_deux_roues', $this->prime_net_rc_axa);
        session()->put('prime_net_amsa_rc_deux_roues', $this->prime_net_rc_amsa);
        session()->put('prime_net_cnart_rc_deux_roues', $this->prime_net_rc_cnart);
        session()->put('prime_net_wafa_rc_deux_roues', $this->prime_net_rc_wafa);
        session()->put('prime_net_allianz_rc_deux_roues', $this->prime_net_rc_allianz);
        session()->put('prime_net_nsia_rc_deux_roues', $this->prime_net_rc_nsia);
        session()->put('prime_net_askia_rc_deux_roues', $this->prime_net_rc_askia);

//--------------------------------------axa----------------------------------------------------------
        $prime_net_total_axa=$this->prime_net_rc_axa;
        if ($prime_net_total_axa<50000) {
            $this->accessoir_axa=3000;
        }
        if ($prime_net_total_axa>50000 and $prime_net_total_axa<100000) {
            $this->accessoir_axa=5000;
        }
        if ($prime_net_total_axa>100000 and $prime_net_total_axa<150000) {
            $this->accessoir_axa=10000;
        }
        if ($prime_net_total_axa>150000) {
            $this->accessoir_axa=15000;
        }
        $this->taxe_axa=($prime_net_total_axa+$this->accessoir_axa)*0.1;
        $this->rga_axa=$this->prime_net_rc_axa*0.025;
        $this->prime_ttc_axa=$prime_net_total_axa+$this->accessoir_axa+$this->taxe_axa+$this->rga_axa;
//---------------------------------------------------amsa-------------------------------------------
        $prime_net_total_amsa=$this->prime_net_rc_amsa;
         if ($prime_net_total_amsa<50000) {
            $this->accessoir_amsa=3000;
        }
        if ($prime_net_total_amsa>50000 and $prime_net_total_amsa<100000) {
            $this->accessoir_amsa=5000;
        }
        if ($prime_net_total_amsa>100000 and $prime_net_total_amsa<150000) {
            $this->accessoir_amsa=10000;
        }
        if ($prime_net_total_amsa>150000) {
            $this->accessoir_amsa=15000;
        }
        $this->taxe_amsa=($prime_net_total_amsa+$this->accessoir_amsa)*0.1;
        $this->rga_amsa=$this->prime_net_rc_amsa*0.025;
        $this->prime_ttc_amsa=$prime_net_total_amsa+$this->accessoir_amsa+$this->taxe_amsa+$this->rga_amsa;
//---------------------------------------------------cnart-------------------------------------------
        $prime_net_total_cnart=$this->prime_net_rc_cnart;
         if ($prime_net_total_cnart<50000) {
            $this->accessoir_cnart=3000;
        }
        if ($prime_net_total_cnart>50000 and $prime_net_total_cnart<100000) {
            $this->accessoir_cnart=5000;
        }
        if ($prime_net_total_cnart>100000 and $prime_net_total_cnart<150000) {
            $this->accessoir_cnart=10000;
        }
        if ($prime_net_total_cnart>150000) {
            $this->accessoir_cnart=15000;
        }
        $this->taxe_cnart=($prime_net_total_cnart+$this->accessoir_cnart)*0.1;
        $this->rga_cnart=$this->prime_net_rc_cnart*0.025;
        $this->prime_ttc_cnart=$prime_net_total_cnart+$this->accessoir_cnart+$this->taxe_cnart+$this->rga_cnart;
//---------------------------------------------------wafa-------------------------------------------
        $prime_net_total_wafa=$this->prime_net_rc_wafa;
         if ($prime_net_total_wafa<50000) {
            $this->accessoir_wafa=3000;
        }
        if ($prime_net_total_wafa>50000 and $prime_net_total_wafa<100000) {
            $this->accessoir_wafa=5000;
        }
        if ($prime_net_total_wafa>100000 and $prime_net_total_wafa<150000) {
            $this->accessoir_wafa=10000;
        }
        if ($prime_net_total_wafa>150000) {
            $this->accessoir_wafa=15000;
        }
        $this->taxe_wafa=($prime_net_total_wafa+$this->accessoir_wafa)*0.1;
        $this->rga_wafa=$this->prime_net_rc_wafa*0.025;
        $this->prime_ttc_wafa=$prime_net_total_wafa+$this->accessoir_wafa+$this->taxe_wafa+$this->rga_wafa;
//---------------------------------------------------allianz-------------------------------------------
        $prime_net_total_allianz=$this->prime_net_rc_allianz;
         if ($prime_net_total_allianz<50000) {
            $this->accessoir_allianz=3000;
        }
        if ($prime_net_total_allianz>50000 and $prime_net_total_allianz<100000) {
            $this->accessoir_allianz=5000;
        }
        if ($prime_net_total_allianz>100000 and $prime_net_total_allianz<150000) {
            $this->accessoir_allianz=10000;
        }
        if ($prime_net_total_allianz>150000) {
            $this->accessoir_wafa=15000;
        }
        $this->taxe_allianz=($prime_net_total_allianz+$this->accessoir_allianz)*0.1;
        $this->rga_allianz=$this->prime_net_rc_allianz*0.025;
        $this->prime_ttc_allianz=$prime_net_total_allianz+$this->accessoir_allianz+$this->taxe_allianz+$this->rga_allianz;
//---------------------------------------------------nsia-------------------------------------------
        $prime_net_total_nsia=$this->prime_net_rc_nsia;
         if ($prime_net_total_nsia<50000) {
            $this->accessoir_nsia=3000;
        }
        if ($prime_net_total_nsia>50000 and $prime_net_total_nsia<100000) {
            $this->accessoir_nsia=5000;
        }
        if ($prime_net_total_nsia>100000 and $prime_net_total_nsia<150000) {
            $this->accessoir_nsia=10000;
        }
        if ($prime_net_total_nsia>150000) {
            $this->accessoir_nsia=15000;
        }
        $this->taxe_nsia=($prime_net_total_nsia+$this->accessoir_nsia)*0.1;
        $this->rga_nsia=$this->prime_net_rc_nsia*0.025;
        $this->prime_ttc_nsia=$prime_net_total_nsia+$this->accessoir_nsia+$this->taxe_nsia+$this->rga_nsia;
//---------------------------------------------------askia-------------------------------------------
        $prime_net_total_askia=$this->prime_net_rc_askia;
         if ($prime_net_total_askia<50000) {
            $this->accessoir_askia=3000;
        }
        if ($prime_net_total_askia>50000 and $prime_net_total_askia<100000) {
            $this->accessoir_askia=5000;
        }
        if ($prime_net_total_askia>100000 and $prime_net_total_askia<150000) {
            $this->accessoir_askia=10000;
        }
        if ($prime_net_total_askia>150000) {
            $this->accessoir_askia=15000;
        }
        $this->taxe_askia=($prime_net_total_askia+$this->accessoir_askia)*0.1;
        $this->rga_askia=$this->prime_net_rc_askia*0.025;
        $this->prime_ttc_askia=$prime_net_total_askia+$this->accessoir_askia+$this->taxe_askia+$this->rga_askia;
        
             
        $article = Assurance::create(['numero_client' => $this->numero_client,'prenom' => $this->prenom
            ,'nom' => $this->nom,'profession' => $this->profession,'adresse' => $this->adresse
            ,'marque' => $this->marque,'modele' => $this->modele,'puissance' => $this->puissance
            ,'energie' => $this->energie,'categorie' => 'null','nombre_de_place'=>0,'valeur_neuve'=>0,'valeur_venale'=>0
            ,'nom_sur_la_carte_grise' => $this->nom_sur_la_carte_grise,'numero_police' => $this->numero_police
            ,'date_effet' => $this->date_effet,'date_echeance' => $this->date_echeance,'bonus_rc' => $this->bonus_rc
            ,'dure' => $this->duree,'numero_avenant' => $this->numero_avenant,'niveau' => 'deux roues'
            ,'telephone' => $this->telephone,'immatriculation' => $this->immatriculation,'date_de_naissance' =>$this->date_de_naissance 
            ,'mise_en_circulation' => $this->mise_en_circulation
            ,'id_apporter' => Auth::user()->id]);  
        session()->put('id_deux_roues', $article->id);
        
        session()->put('prime_net_axa_deux_roues', $prime_net_total_axa);
        session()->put('prime_net_amsa_deux_roues', $prime_net_total_amsa);
        session()->put('prime_net_cnart_deux_roues', $prime_net_total_cnart);
        session()->put('prime_net_wafa_deux_roues', $prime_net_total_wafa);
        session()->put('prime_net_allianz_deux_roues', $prime_net_total_allianz);
        session()->put('prime_net_nsia_deux_roues', $prime_net_total_nsia);
        session()->put('prime_net_askia_deux_roues', $prime_net_total_askia);

        session()->put('accessoir_axa_deux_roues', $this->accessoir_axa);
        session()->put('accessoir_amsa_deux_roues', $this->accessoir_amsa);
        session()->put('accessoir_cnart_deux_roues', $this->accessoir_cnart);
        session()->put('accessoir_wafa_deux_roues', $this->accessoir_wafa);
        session()->put('accessoir_allianz_deux_roues', $this->accessoir_allianz);
        session()->put('accessoir_nsia_deux_roues', $this->accessoir_nsia);
        session()->put('accessoir_askia_deux_roues', $this->accessoir_askia);

        session()->put('taxe_axa_deux_roues', $this->taxe_axa);
        session()->put('taxe_amsa_deux_roues', $this->taxe_amsa);
        session()->put('taxe_cnart_deux_roues', $this->taxe_cnart);
        session()->put('taxe_wafa_deux_roues', $this->taxe_wafa);
        session()->put('taxe_allianz', $this->taxe_allianz);
        session()->put('taxe_nsia_deux_roues', $this->taxe_nsia);
        session()->put('taxe_askia_deux_roues', $this->taxe_askia);

        session()->put('rga_axa_deux_roues',  $this->rga_axa);
        session()->put('rga_amsa_deux_roues',  $this->rga_amsa);
        session()->put('rga_cnart_deux_roues', $this->rga_cnart);
        session()->put('rga_wafa_deux_roues', $this->rga_wafa);
        session()->put('rga_allianz_deux_roues', $this->rga_allianz);
        session()->put('rga_nsia_deux_roues', $this->rga_nsia);
        session()->put('rga_askia_deux_roues', $this->rga_askia);

        session()->put('prime_ttc_axa_deux_roues', $this->prime_ttc_axa);
        session()->put('prime_ttc_amsa_deux_roues', $this->prime_ttc_amsa);
        session()->put('prime_ttc_cnart_deux_roues', $this->prime_ttc_cnart);
        session()->put('prime_ttc_wafa_deux_roues', $this->prime_ttc_wafa);
        session()->put('prime_ttc_allianz_deux_roues', $this->prime_ttc_allianz);
        session()->put('prime_ttc_nsia_deux_roues', $this->prime_ttc_nsia);
        session()->put('prime_ttc_askia_deux_roues', $this->prime_ttc_askia);
        session()->put('duree_deux_roues', $this->duree);
        return redirect()->route('calcule_assurance_deux_roues');
    }
     public function render()
    {
        return view('livewire.formulaire-apporter-deux-roues');
    }
}




    
    