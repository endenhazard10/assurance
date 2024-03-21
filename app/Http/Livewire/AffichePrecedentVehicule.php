<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AffichePrecedentVehicule extends Component
{
    public $accepter = false;
    public function previousStep()
    {
        return redirect()->route('calcule_assurance_vehicule');
    }
    public function retourFormulaire()
    {
        return redirect()->route('cotation_apporter_automobile_vehicule');
    }
    public function retourApporter()
    {
        return redirect()->route('dashboard_apporter');
    }
    // public function updated($field)
    // {
    //     $this->hasUnsavedChanges = true;
    // }
    public function accepter()
    {
        $this->hasUnsavedChanges = false;

        // Close the modal after confirmation
        //$this->dispatchBrowserEvent('closeConfirmationModal');
        $this->accepter = true;
        session(['accepter' => $this->accepter]);
        return redirect()->route('cotation_apporter_document_axa');
    }
    public function render()
    {
        return view('livewire.affiche-precedent-vehicule');
    }
}
