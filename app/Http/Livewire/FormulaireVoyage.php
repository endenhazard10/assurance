<?php

namespace App\Http\Livewire;

use App\Models\AssuranceVoyage;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Livewire\WithFileUploads;

class FormulaireVoyage extends Component
{
    use WithFileUploads;

    public $numero_passeport;
    public $prenom;
    public $nom;
    public $adresse;
    public $profession;
    public $motif;
    public $date_validite;
    public $age;
    public $date_de_naissance;
    public $numero_police;

    public $formule;
    public $destination;
    public $date_depart;
    public $date_retour;
    public $duree;
    public $age_requete;
    public $destination_requete;
    public $duree_requete;
    public $numero_client;
    

    public $totalSteps = 2;
    public $currentStep = 1;

    public function __construct()
    {
        $latestAssurance = DB::table('assurance_voyages')
        ->latest('id')
        ->first();
    if ($latestAssurance) {
        $newId = $latestAssurance->id + 1;
        while (true) {
            $exists = DB::table('assurance_voyages')
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
        session(['numero_client_voyage' => $lastInsertedId]);
        if (session()->has('numero_client_voyage')) {$this->numero_client = session('numero_client_voyage');}
        if (session()->has('numero_passeport_voyage')) {$this->numero_passeport = session('numero_passeport_voyage');}
        if (session()->has('prenom_voyage')) {$this->prenom = session('prenom_voyage');}
        if (session()->has('nom_voyage')) {$this->nom = session('nom_voyage');}
        if (session()->has('adresse_voyage')) {$this->adresse = session('adresse_voyage');}
        if (session()->has('profession_voyage')) {$this->profession = session('profession_voyage');}
        if (session()->has('motif_voyage')) {$this->motif = session('motif_voyage');}
        if (session()->has('date_validite_voyage')) {$this->date_validite = session('date_validite_voyage');}
        if (session()->has('age_voyage')) {$this->age = session('age_voyage');}
        if (session()->has('date_de_naissance_voyage')) {$this->date_de_naissance = session('date_de_naissance_voyage');}
        if (session()->has('numero_police_voyage')) {$this->numero_police = session('numero_police_voyage');}
        if (session()->has('formule_voyage')) {$this->formule = session('formule_voyage');}
        if (session()->has('destination_voyage')) {$this->destination = session('destination_voyage');}
        if (session()->has('date_depart_voyage')) {$this->date_depart = session('date_depart_voyage');}
        if (session()->has('date_retour_voyage')) {$this->date_retour = session('date_retour_voyage');}
        if (session()->has('duree_voyage')) {$this->duree = session('duree_voyage');}
    }

    public function goToStep($newStep)
    {
        if($newStep > $this->currentStep){
            $this->validateData();
        }
        $this->currentStep = $newStep;
    }


    public function mount()
    {
        $this->currentStep = 1;
    }
    public function updatedDateDepart()
    {
        if ($this->date_depart != null and $this->date_retour != null) {
            $date_depart = Carbon::parse($this->date_depart);
            $date_retour = Carbon::parse($this->date_retour);
            $resultat_duree = $date_depart->diffInDays($date_retour);
            $this->duree=$resultat_duree+1;
            //dd($this->duree);
            //dd($this->date_echeance);
        }
    }
    
    public function updatedDateRetour()
    {
        if ($this->date_depart != null and $this->date_retour != null) {
            $date_depart = Carbon::parse($this->date_depart);
            $date_retour = Carbon::parse($this->date_retour);
            $resultat_duree = $date_depart->diffInDays($date_retour);
            $this->duree=$resultat_duree+1;
            //dd($this->duree);
            //$this->date_echeance=$date;
            //dd($this->date_echeance);
        }
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
    public function validateData()
    {

        if ($this->currentStep == 1) {
            $this->validate([
                'prenom' => 'required',
                'nom' => 'required',
                'adresse' => 'required',
                'profession' => 'required',
                'numero_passeport' => 'required',
                'motif' => 'required',
                'date_validite' => 'required',
                'age' => 'required',
                'date_de_naissance' => 'required',
            ]);
        }
    }
    public function vider_le_formulaire(){
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
        return redirect()->route('cotation_apporter_voyage');
    }
    public function calcule()
    {
        $this->resetErrorBag();
        if ($this->currentStep == 2) {
            $this->validate([
                'formule' => 'required',
                'destination' => 'required',
                'date_depart' => 'required',
                'date_retour' => 'required',
                'duree' => 'required',
                'numero_police' => 'required',
            ]);
        }
        if ($this->age >= 0 and $this->age <= 18) {$this->age_requete = "a1";}
        if ($this->age >= 19 and $this->age < 70) {$this->age_requete = "a2";}
        if ($this->age >= 70) {$this->age_requete = "a3";}

        if ($this->destination == "monde entier") {$this->destination_requete = "z2";} else { $this->destination_requete = "z1";}

        if ($this->duree >= 1 and $this->duree <= 7) {$this->duree_requete = "d1";}
        if ($this->duree >= 8 and $this->duree <= 10) {$this->duree_requete = "d2";}
        if ($this->duree >= 11 and $this->duree <= 15) {$this->duree_requete = "d3";}
        if ($this->duree >= 16 and $this->duree <= 21) {$this->duree_requete = "d4";}
        if ($this->duree >= 22 and $this->duree <= 32) {$this->duree_requete = "d5";}
        if ($this->duree >= 33 and $this->duree <= 62) {$this->duree_requete = "d6";}
        if ($this->duree >= 63 and $this->duree <= 93) {$this->duree_requete = "d7";}
        if ($this->duree >= 64 and $this->duree <= 180) {$this->duree_requete = "mv1";}
        if ($this->duree >= 181 and $this->duree <= 365) {$this->duree_requete = "mv2";}
        $requete_axa = DB::table('voyage_prime_t_t_c_s')->where('zone_destination', '=', $this->destination_requete)->where('age', '=', $this->age_requete)->where('duree', '=', $this->duree_requete)->get();
        
        //dd($requete_axa[0]->prime_ttc);
        session(['numero_passeport_voyage' => $this->numero_passeport]);
        session(['prenom_voyage' => $this->prenom]);
        session(['nom_voyage' => $this->nom]);
        session(['adresse_voyage' => $this->adresse]);
        session(['profession_voyage' => $this->profession]);
        session(['motif_voyage' => $this->motif]);
        session(['date_validite_voyage' => $this->date_validite]);
        session(['age_voyage' => $this->age]);
        session(['date_de_naissance_voyage' => $this->date_de_naissance]);
        session(['numero_police_voyage' => $this->numero_police]);
        session(['formule_voyage' => $this->formule]);
        session(['destination_voyage' => $this->destination]);
        session(['date_depart_voyage' => $this->date_depart]);
        session(['date_retour_voyage' => $this->date_retour]);
        session(['duree_voyage' => $this->duree]);
        session(['id_apporter' => Auth::user()->id]);

        // $article = AssuranceVoyage::create(['prenom' => $this->prenom
        //     , 'nom' => $this->nom, 'profession' => $this->profession, 'adresse' => $this->adresse, 'numero_police' => $this->numero_police
        //     , 'numero_passport' => $this->numero_passeport, 'date_validite_passeport' => $this->date_validite, 'motif_voyage' => $this->motif
        //     , 'pays' => $this->destination, 'formule' => $this->formule, 'date_depart' => $this->date_depart, 'age' => $this->age
        //     , 'date_retour' => $this->date_retour, 'duree' => $this->duree, 'date_de_naissance' => $this->date_de_naissance
        //     , 'id_apporter' => Auth::user()->id]);

        // session()->put('id_voyage', $article->id);

        session()->put('prime_ttc_axa_voyage', $requete_axa[0]->prime_ttc);
        session()->put('prime_nette_axa_voyage', $requete_axa[0]->prime_nette);
        session()->put('taxe_axa_voyage', $requete_axa[0]->taxes);
        session()->put('accessoire_axa_voyage', $requete_axa[0]->accessoires);
        session()->put('duree_voyage', $this->duree);
        return redirect()->route('calcule_assurance_voyage');
        //dd($this->duree_requete,$this->age_requete,$this->destination_requete);
        //dd($this->numero_passeport,$this->nom,$this->prenom,$this->profession,$this->age,$this->adresse,$this->date_validite,$this->motif,$this->formule,$this->destination,$this->date_depart,$this->date_retour,$this->duree);
    }
    public function render()
    {
        return view('livewire.formulaire-voyage');
    }
}
