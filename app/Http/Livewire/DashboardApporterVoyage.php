<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class DashboardApporterVoyage extends Component
{
    public $mois;
    public $month;
    public $years;
    public $annee;
    public $parPage=5;
    public $query;
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public function __construct()
    {
        $this->mois = now()->month;
        $this->month = $this->mois;
        $this->years = now()->year;
        $this->annee = $this->years;
    }
    public function calcule()
    {
        // dd($this->month);
        $this->years = $this->annee;
        $this->mois = $this->month;
        //dd($this->mois,$this->years);
    }
    public function updatingQuery()
    {
        $this->resetPage();
    }
    public function render()
    {
        // Fixer $mois au mois actuel
        $resultat = DB::table('assurance_voyages')->where('id_apporter',Auth::user()->id)->where('prenom','like','%'.$this->query.'%')->whereMonth('created_at', $this->mois)->whereYear('created_at', $this->years)->orderBy('updated_at', 'desc')->paginate($this->parPage);
        $apporter = DB::table('users')->where('id', Auth::user()->id)->get();
        $moisActuel = Carbon::create(null, $this->mois, 1)->format('F');
        $premierJour = Carbon::create($this->years, $this->mois, 1)->startOfDay();
        $dernierJour = Carbon::create($this->years, $this->mois, 1)->endOfMonth();

        return view('livewire.dashboard-apporter-voyage', [
            'resultat' => $resultat,
            'moisActuel' => $moisActuel,
            'premierJour' => $premierJour,
            'dernierJour' => $dernierJour,
            'apporter' => $apporter
        ]);
    }
}
