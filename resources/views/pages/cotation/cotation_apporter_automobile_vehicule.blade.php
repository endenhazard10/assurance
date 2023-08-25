@extends('layouts.default', ['title' => 'Home apporter automobile'])
@section('content')
    <br>
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
