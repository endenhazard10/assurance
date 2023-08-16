<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResultatAssurance extends Component
{
    public function previousStep(){
        return redirect()->route('cotation_apporter_automobile_vehicule');
    }
    public function render()
    {
        return view('livewire.resultat-assurance');
    }
}
