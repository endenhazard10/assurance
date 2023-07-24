@extends('layouts.admin_lte',['title'=>'Home apporter dashboard tpv'])
@section('content')
<br>
<div style="display: flex;">
<div style="width: 83% !important;">
<table style="line-height: 50px;">
  <tr>
    <td>Mois : {{$moisActuel}} 2023</td>
  </tr>
  <tr>
    <td>Du : {{$premierJour}}</td>
  </tr>
    <tr>
      <td>Au : {{$dernierJour}}</td>
    </tr>
    <tr>
      <td>Branche : Automobile</td>
    </tr>
</table>
</div>
<div style="">
<table style="line-height: 50px;">
  <tr>
    <td>Apporter : {{ucfirst($apporter[0]->prenom)}} {{ucfirst($apporter[0]->name)}} </td>
  </tr>
  <tr>
    <td>Adresse : {{$apporter[0]->adresse}}</td>
  </tr>
    <tr>
      <td>Code apporter : {{$apporter[0]->code_apporter}}</td>
    </tr>
    <tr>
      <td>N Bordereau : 01-23-22101846</td>
    </tr>
</table>
</div>
</div>
<br>
<h3 style="text-align: left;color:#00008F;font-weight:bold">Assurances Tpv</h3>
@if(count($requete)==0)
IL n y a pas de données à afficher.
@else
<div style="max-height: 400px;overflow: auto;">
<table class="table table-bordered">
  <thead>
  <tr>
  <th>#</th>
  <th style="font-size: 12px;min-width:200px;">Numero police</th> 
  <th style="font-size: 12px;min-width:200px;">Prénom & Nom</th> 
  <th style="font-size: 12px;min-width:200px;">Date effet</th> 
  <th style="font-size: 12px;min-width:200px;">Date échéance</th> 
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
  @foreach($requete as $event)
  <tbody>
  <tr>
  <td style="font-size: 12px;min-width:200px;">{{ $loop->index + 1 }}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->numero_police}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->prenom}} {{$event->nom}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->date_effet}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->date_echeance}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->prime_nette}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->accessoires}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->taxes}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->prime_ttc}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->commissions_apporteur}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->commissions_accessoires}}</td>
  <td style="font-size: 12px;min-width:200px;">{{$event->commissions_accessoires+$event->commissions_apporteur}}</td>
  <td><button class="btn btn-primary">imprimer</button></td>
  </tr>
  </tbody> 
  @endforeach
  </table>
@endif
</div>
<div class="d-flex justify-content-center mt-4">
  {{ $requete->links() }}
</div>
@stop