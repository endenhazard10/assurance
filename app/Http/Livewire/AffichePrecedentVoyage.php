<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AffichePrecedentVoyage extends Component
{
    public $accepter = false;
    public function previousStep()
    {
        return redirect()->route('calcule_assurance_voyage');
    }
    public function retourFormulaire()
    {
        return redirect()->route('cotation_apporter_voyage');
    }
    public function retourApporter()
    {
        return redirect()->route('dashboard_apporter');
    }
    public function accepter()
    {
        $this->accepter = true;
        session(['accepter_voyage' => $this->accepter]);
        return redirect()->route('cotation_apporter_document_axa_voyage');
    }
    public function render()
    {
        return view('livewire.affiche-precedent-voyage');
    }
}
