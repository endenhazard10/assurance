@extends('layouts.default', ['title' => 'Home apporter automobile'])
@section('content')
    <div class="col-md-12">
        <div class="row" style="margin-top:50px">
            <div class="col-md-6 offset-md-3">
                <h3 style="color: #288BA8; font-weight : bold;text-align: center;">Formulaire souscription assurance véhicule
                </h3>
                <hr>
                @livewire('formulaire-apporter')
            </div>
        </div>
    </div>
@stop
