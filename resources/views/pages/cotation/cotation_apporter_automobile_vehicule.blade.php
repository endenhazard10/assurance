@extends('layouts.default', ['title' => 'Home apporter automobile'])
@section('content')
    <br>
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-content-between" style="margin-left: 50px !important">
            <a href="{{ route('cotation_apporter_automobile_vehicule') }}">
                <button class="btn btn-info btn-lg">
                    Formulaire Vehicule
                </button>
            </a>
            <!-- Le contenu de votre étape actuelle -->
        </div>
        {{-- @if (session()->get('accepter_tpv') == true)  --}}
        <div class="d-flex justify-content-between" style="margin-left: 50px !important">
            <a href="{{ route('cotation_apporter_automobile_tpv') }}">
                <button class="btn btn-info btn-lg" {{ route('cotation_apporter_automobile_tpv') }}>
                    Formulaire Tpv
                </button>
            </a>
            <!-- Le contenu de votre étape actuelle -->
        </div>
        <div class="d-flex justify-content-between" style="margin-left: 50px !important">
            <a href="{{ route('cotation_apporter_automobile_deux_roues') }}">
                <button class="btn btn-info btn-lg" {{ route('cotation_apporter_automobile_deux_roues') }}>
                    Formulaire Deux Roues
                </button>
            </a>
            <!-- Le contenu de votre étape actuelle -->
        </div>
        {{-- @endif --}}
    </div>
    <div class="col-md-12">
        <div class="row" style="margin-top:50px">
            <div class="col-md-6 offset-md-3">
                <h3 style="color: #077b8a; font-weight : bold;text-align: center;text-transform: uppercase;">Formulaire souscription assurance
                    véhicule
                </h3>
                <hr>
                @livewire('formulaire-apporter')
            </div>
        </div>
    </div>
@stop
