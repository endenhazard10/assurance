@extends('layouts.default', ['title' => 'Home apporter vehicule tpv'])
@section('content')
    <br>
    <div class="col-md-12">
        <div class="row" style="margin-top:50px">
            <div class="col-md-6 offset-md-3">
                <h3 style="color: #077b8a; font-weight : bold;text-align: center;text-transform: uppercase;">Formulaire souscription assurance
                    véhicule
                    tpv</h3>
                <hr>
                @livewire('formulaire-aporter-tpv')
            </div>
        </div>
    </div>
@stop
