<?php
namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class DashboardAdmin extends Component
{
    public $mois;
    public $month;
    public $years;
    public $annee;
    public $admin; // Add this property
    use WithPagination;
    public $parPage=5;
    public $query;
    protected $paginationTheme='bootstrap';

    public function mount()
    {
        $this->mois = now()->month;
        $this->month = $this->mois;
        $this->years = now()->year;
        $this->annee = $this->years;

        // Fetch the authenticated user here
        $this->admin = Auth::user();
    }

    public function calcule()
    {
        $this->years = $this->annee;
        $this->mois = $this->month;
    }
    public $selectedUserId;
    public $selectedMois;
    public $selectedYears;

    public function redirection($userId, $mois, $years)
    {
        $this->selectedUserId = $userId;
        $this->selectedMois = $mois;
        $this->selectedYears = $years;

        return redirect()->to(route('user_detail', [
            'id' => $this->selectedUserId,
            'mois' => $this->selectedMois,
            'years' => $this->selectedYears,
        ]));
    }
    public function render()
    {
        $resultat = DB::table('users')
            ->leftJoin('assurances', 'users.id', '=', 'assurances.id_apporter')
            ->whereMonth('assurances.created_at', $this->mois)
            ->whereYear('assurances.created_at', $this->years)
            ->select('users.*', DB::raw('COUNT(assurances.id) as nombre_assurances'))
            ->groupBy('users.id')
            ->where('users.prenom','like','%'.$this->query.'%')
            ->paginate($this->parPage);

            // $resultat = DB::table('users')
            // ->leftJoin('assurances', 'users.id', '=', 'assurances.id_apporter')
            // ->whereMonth('assurances.created_at', $this->mois)
            // ->whereYear('assurances.created_at', $this->years)
            // ->select('users.*', DB::raw('COUNT(assurances.id) as nombre_assurances'))
            // ->groupBy('users.id')
            // ->where('users.prenom','like','%'.$this->query.'%')
            // ->paginate(1);

        $moisActuel = Carbon::create(null, $this->mois, 1)->format('F');
        $premierJour = Carbon::create($this->years, $this->mois, 1)->startOfDay();
        $dernierJour = Carbon::create($this->years, $this->mois, 1)->endOfMonth();

        return view('livewire.dashboard-admin', [
            'resultat' => $resultat,
            'moisActuel' => $moisActuel,
            'premierJour' => $premierJour,
            'dernierJour' => $dernierJour,
            'admin' => $this->admin // Pass the authenticated user to the view
        ]);
    }
}
