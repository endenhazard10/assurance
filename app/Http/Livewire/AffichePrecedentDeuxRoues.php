<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AffichePrecedentDeuxRoues extends Component
{
    public $accepter = false;
    public function previousStep()
    {
        return redirect()->route('calcule_assurance_deux_roues');
    }
    public function retourFormulaire()
    {
        return redirect()->route('cotation_apporter_automobile_deux_roues');
    }
    public function retourApporter()
    {
        return redirect()->route('dashboard_apporter');
    }
    public function accepter()
    {
        $this->accepter = true;
        session(['accepter_deux_roues' => $this->accepter]);
        return redirect()->route('cotation_apporter_document_axa_deux_roues');
    }
    public function render()
    {
        return view('livewire.affiche-precedent-deux-roues');
    }
}
