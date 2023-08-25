<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResultatAssuranceVoyage extends Component
{
    public function previousStep()
    {
        return redirect()->route('cotation_apporter_voyage');
    }
    public function render()
    {
        return view('livewire.resultat-assurance-voyage');
    }
}
