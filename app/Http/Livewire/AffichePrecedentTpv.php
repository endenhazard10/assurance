<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AffichePrecedentTpv extends Component
{
    public $accepter=false;
    public function previousStep(){
        return redirect()->route('calcule_assurance_tpv');
    }
    public function retourFormulaire(){
        return redirect()->route('cotation_apporter_automobile_tpv');
    } 
    public function retourApporter(){
        return redirect()->route('dashboard_apporter');
    }
    public function accepter(){
        $this->accepter=true;
        session(['accepter_tpv' => $this->accepter]);
        return redirect()->route('cotation_apporter_document_axa_tpv');
    }
    public function render()
    {
        return view('livewire.affiche-precedent-tpv');
    }
}
