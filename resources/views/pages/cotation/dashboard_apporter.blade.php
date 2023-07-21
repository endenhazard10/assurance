@extends('layouts.admin_lte',['title'=>'Home apporter dashboard'])
@section('content')
<br>
<h3 style="text-align: left;color:#00008F;font-weight:bold">Assurances Automobiles</h3>
<table class="table table-bordered">
  <thead>
  <tr>
  <th>#</th>
  <th>Numero police</th> 
  <th>Date effet</th> 
  <th>Date échéance</th> 
  <th>Prime Nette</th>
  <th>Accessoires</th>
  <th>Taxe</th>
  <th>Prime TTC</th>
  <th>Commission PTTC</th>
  <th>Commission Acc</th>
  <th>Imprimer contrat</th>
  </tr>
  </thead>
  @foreach($requete as $event)
  <tbody>
  <tr>
  <td>{{ $loop->index + 1 }}</td>
  <td>{{$event->numero_police}}</td>
  <td>{{$event->date_effet}}</td>
  <td>{{$event->date_echeance}}</td>
  <td>{{$event->prime_nette}}</td>
  <td>{{$event->accessoires}}</td>
  <td>{{$event->taxes}}</td>
  <td>{{$event->prime_ttc}}</td>
  <td>--</td>
  <td>--</td>
  <td><button class="btn btn-primary">imprimer</button></td>
  </tr>
  </tbody>
  @endforeach
  </table>

  <br>
<h3 style="text-align: left;color:#00008F;font-weight:bold">Assurances Voyages</h3>
<table class="table table-bordered">
  <thead>
  <tr>
  <th>#</th> 
  <th>Numero police</th> 
  <th>Date depart</th> 
  <th>Date retour</th> 
  <th>Prime TTC</th>
  <th>Commission PTTC</th>
  <th>Commission Acc</th>
  <th>Imprimer contrat</th>
  </tr>
  </thead>
  @foreach($voyages as $event)
  <tbody>
  <tr>
  <td>{{ $loop->index + 1 }}</td>
  <td>{{$event->numero_police}}</td>
  <td>{{$event->date_depart}}</td>
  <td>{{$event->date_retour}}</td>
  <td>{{$event->prime_ttc}}</td>
  <td>--</td>
  <td>--</td>
  <td><button class="btn btn-primary">imprimer</button></td>
  </tr>
  </tbody>
  @endforeach
  </table>
@stop