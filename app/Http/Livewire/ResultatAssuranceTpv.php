<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResultatAssuranceTpv extends Component
{
    public function previousStep()
    {
        return redirect()->route('cotation_apporter_automobile_tpv');
    }
    public function render()
    {
        return view('livewire.resultat-assurance-tpv');
    }
}
