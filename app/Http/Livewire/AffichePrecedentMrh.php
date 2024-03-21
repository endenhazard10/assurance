<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AffichePrecedentMrh extends Component
{
    public $accepter = false;
    public function previousStep()
    {
        return redirect()->route('calcule_assurance_mrh');
    }
    public function retourFormulaire()
    {
        return redirect()->route('cotation_apporter_habitation');
    }
    public function retourApporter()
    {
        return redirect()->route('dashboard_apporter');
    }
    public function accepter()
    {
        $this->accepter = true;
        session(['accepter_mrh' => $this->accepter]);
        return redirect()->route('cotation_apporter_document_axa_mrh');
    }
    public function render()
    {
        return view('livewire.affiche-precedent-mrh');
    }
}
