<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResultatAssuranceDeuxRoues extends Component
{
    public function previousStep()
    {
        return redirect()->route('cotation_apporter_automobile_deux_roues');
    }
    public function render()
    {
        return view('livewire.resultat-assurance-deux-roues');
    }
}
