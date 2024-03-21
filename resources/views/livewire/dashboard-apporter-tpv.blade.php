<div>
    <br>
    <div style="display: flex;">
        <div style="width: 83% !important;margin-left:10%;">
            <table style="line-height: 50px;">
                <tr>
                    <td style="color: #00008F;font-weight:bold;font-size:12px;">Mois : {{ $moisActuel }} {{ $years }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;color: red;font-size:12px;">Du : {{ $premierJour }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;color: red;font-size:12px;">Au : {{ $dernierJour }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;font-size:12px;">Branche : Automobile</td>
                </tr>
            </table>
        </div>
        <div style="margin-left:-15%;">
            <table style="line-height: 50px;">
                <tr>
                    <td style="color: #00008F;font-weight:bold;font-size:12px;">Apporter : {{ ucfirst($apporter[0]->prenom) }} {{ ucfirst($apporter[0]->name) }} </td>
                </tr>
                <tr>
                    <td style="font-weight:bold;font-size:12px;">Adresse : {{ $apporter[0]->adresse }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;font-size:12px;">Code apporter : {{ $apporter[0]->code_apporter }}</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;font-size:12px;">N Bordereau : 01-23-22101846</td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="container">
  <div class="row">
    <div class="col-sm">
      <form wire:submit.prevent="calcule">
        @csrf
        <select class="form-control" wire:model="month" wire:change="calcule">
            <option value="1">Janvier</option>
            <option value="2">Février</option>
            <option value="3">Mars</option>
            <option value="4">Avril</option>
            <option value="5">Mai</option>
            <option value="6">Juin</option>
            <option value="7">Juillet</option>
            <option value="8">Août</option>
            <option value="9">Septembre</option>
            <option value="10">Octobre</option>
            <option value="11">Novembre</option>
            <option value="12">Décembre</option>
        </select>
    </form> 
    </div>
    <div class="col-sm">
            <select class="form-control" wire:model="annee" wire:change="calcule">
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
            </select>
        </form>
    </div>
  </div>
</div>
<div class="row mb-5 mt-5">
    <div class="col-md-6">
        <label for="query" class="sr-only">Rechercher</label>
        <input type="search" wire:model="query" id="query" class="form-control" placeholder="Rechercher par le prenom Ex: Momar">
    </div>
    <div  class="col-auto ml-auto">
        Afficher
        <select id="par_page" class="custom-select w-auto" wire:model.lazy="parPage">
            @for($i=5;$i<=25;$i+=5)
         <option value="{{$i}}">{{$i}}</option>  
         @endfor
         </select>
         <label for="par_page">Par page</label>
    </div>
</div>
    {{-- <h3 style="text-align: center;color:#00008F;font-weight:bold;text-transform:uppercase;">Assurances Tpv</h3> --}}
    <div class="container-fluid">
        <div class="row mb-2 d-flex justify-content-center" style="background-color: ; color: #336699;">
            <div class="col-sm-6">
                <h1 class="p-1 mb-2 bg-secondary text-white" style="box-shadow: 15px 15px 20px #646464;text-align: center;font-weight: bold !important;font-size:24px;text-transform: uppercase;">Assurances TPV</h1>
            </div>
        </div>
    </div>
    <br>
    @if (count($resultat) == 0)
        IL n y a pas de données à afficher.
    @else
        <div style="max-height: 1400px;overflow: auto;">
            <table class="table table-bordered">
                <thead class="bg-primary" class="bg-warning"> 
                    <tr>
                        <th>#</th>
                        <th style="font-size: 12px;min-width:200px;">Numero police</th>
                        <th style="font-size: 12px;min-width:200px;">Date effet</th>
                        <th style="font-size: 12px;min-width:200px;">Date échéance</th>
                        <th style="font-size: 12px;min-width:200px;">Prénom & Nom</th>
                        <th style="font-size: 12px;min-width:200px;">Prime Nette</th>
                        <th style="font-size: 12px;min-width:200px;">Accessoires</th>
                        <th style="font-size: 12px;min-width:200px;">Taxe</th>
                        <th style="font-size: 12px;min-width:200px;">Prime TTC</th>
                        <th style="font-size: 12px;min-width:200px;">Commission Apporteur FCFA</th>
                        <th style="font-size: 12px;min-width:200px;">Commission Accessoire FCFA</th>
                        <th style="font-size: 12px;min-width:200px;">Commission Total FCFA</th>
                        <th style="font-size: 12px;min-width:200px;">Imprimer contrat</th>
                    </tr>
                </thead>
                @foreach ($resultat as $event)
                    <tbody>
                        <tr>
                            <td style="font-size: 12px;min-width:200px;">{{ $loop->index + 1 }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->numero_police }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->date_effet }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->date_echeance }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->prenom }} {{ $event->nom }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->prime_nette }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->accessoires }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->taxes }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->prime_ttc }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->commissions_apporteur }}</td>
                            <td style="font-size: 12px;min-width:200px;">{{ $event->commissions_accessoires }}</td>
                            <td style="font-size: 12px;min-width:200px;">
                                {{ $event->commissions_accessoires + $event->commissions_apporteur }}</td>
                            <td><a class="btn btn-warning" href="{{ route('imprimer_contrat_tpv', ['id' => $event->numero_client]) }}"><i class="fas fa-print" style="width: 130px; color: #ffffff;"></i></a></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
    @endif
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $resultat->links() }}
    </div>
</div>
