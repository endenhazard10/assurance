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
   

    public $garantie_de_base;
    public $assistance_a_domicile;
    public $dommages_electriaque;
    public $vol_remplacement_serrures;
    public $rc_sejour_voyage;
    public $rc_chiens;
    public $rc_sports;
    public $assurance_scolaire;
    
    public $prenom_et_nom;
    public $profession;
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

    public $totalSteps = 5;
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
    public $showFields = false;

    public function toggleFields()
    {
        $this->showFields = !$this->showFields;
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
                 'adresse'=>'required',
                 'genre_de_construction'=>'required',
                 'type_de_residence'=>'required',
                 'superficie_developpee'=>'required',
                 'nombre_piece_principale'=>'required',
                 'valeur_contenu'=>'required',
                 'valeur_du_batiment'=>'required',
                 'appartement_dans_un_immeuble'=>'required',
              ]);
        }
        elseif($this->currentStep == 2){
              
        }
        elseif($this->currentStep == 3){
              $this->validate([
                'prenom_et_nom'=>'required',
                'profession'=>'required',
                'age'=>'required',
                'qualite'=>'required',
                'telephone'=>'required',
                'email'=>'required',
              ]);
        }
        elseif($this->currentStep == 4){
            $this->validate([
              'prenom_et_nom'=>'required',
              'profession'=>'required',
              'age'=>'required',
              'qualite'=>'required',
              'telephone'=>'required',
              'email'=>'required',
            ]);
      }
    }
    public function calcule(){
          $this->resetErrorBag();
          if($this->currentStep == 5){
            
          }
          dd('jjj');
        return redirect()->route('calcule_assurance_tpv');
    }
     public function render()
    {
        return view('livewire.formulaire-mrh');
    }
}

