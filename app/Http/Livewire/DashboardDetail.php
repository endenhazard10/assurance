<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Assurance;

class DashboardDetail extends Component
{
    public $userId;

    public $mois;
    public $month;
    public $years;
    public $annee;
    public $parPage=5;
    public $query;
    public $parPageVoyage=5;
    public $queryVoyage;
    public $parPageMrh=5;
    public $queryMrh;
    public $assurancesPage = 1;
    public $voyagesPage = 1;
    public $mrhsPage = 1;
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $contratAuto;

    public function __construct()
    {
        $this->mois = now()->month;
        $this->month = $this->mois;
        $this->years = now()->year;
        $this->annee = $this->years;
    }

    public $selectedAssuranceId;
    public function redirection($id)
    {
        $this->selectedAssuranceId = $id;

        return redirect()->to(route('assurance_detail', [
            'id' => $this->selectedAssuranceId,
        ]));
    }                                                    
    public function calcule()
    {
        // dd($this->month);
        $this->years = $this->annee;
        $this->mois = $this->month;
        //dd($this->mois,$this->years);
    }
    public function updatingQuery(){$this->resetPage();}
    public function updatingQueryVoyage(){$this->resetPage();}
    public function updatingQueryMrh(){$this->resetPage();}
    public function mount($id,$years,$mois)
    {
        $this->userId = $id;
        $this->month = $mois;
        $this->annee = $years;
    }

   
    public function afficherContratAuto($id)
        {
            // Récupérez les données nécessaires en fonction de $eventId
            $contratAuto = Assurance::find($id);

            // Rendez les données disponibles pour la vue
            $this->emit('afficherContratAuto', $contratAuto);
        }

protected $listeners = ['afficherContratAuto' => 'chargerContratAuto'];

public function chargerContratAuto($contratAuto)
{
    $this->contratAuto = $contratAuto;
}


    public function render()
    {
        $resultat = DB::table('assurances')->where('prenom','like','%'.$this->query.'%')->whereMonth('created_at', $this->mois)->whereYear('created_at', $this->years)
        ->where('id_apporter', $this->userId)->orderBy('updated_at', 'desc')->paginate($this->parPage,['*'], 'assurancesPage', $this->assurancesPage);
        $voyage = DB::table('assurance_voyages')->where('prenom','like','%'.$this->queryVoyage.'%')->whereMonth('created_at', $this->mois)->whereYear('created_at', $this->years)
        ->where('id_apporter', $this->userId)->orderBy('updated_at', 'desc')->paginate($this->parPageVoyage,['*'],'voyagesPage', $this->voyagesPage);
        $mrh = DB::table('assurance_mrhs')->where('prenom','like','%'.$this->queryMrh.'%')->whereMonth('created_at', $this->mois)->whereYear('created_at', $this->years)
        ->where('id_apporter', $this->userId)->orderBy('updated_at', 'desc')->paginate($this->parPageMrh,['*'],'mrhsPage');;
        $apporter = DB::table('users')->where('id', $this->userId)->get();
        $moisActuel = Carbon::create(null, $this->mois, 1)->format('F');
        $premierJour = Carbon::create($this->years, $this->mois, 1)->startOfDay();
        $dernierJour = Carbon::create($this->years, $this->mois, 1)->endOfMonth();
        return view('livewire.dashboard-detail', [
            'resultat' => $resultat,
            'moisActuel' => $moisActuel,
            'premierJour' => $premierJour,
            'dernierJour' => $dernierJour,
            'apporter' => $apporter,
            'voyage' => $voyage,
            'mrh' => $mrh
        ]);
    }
}
