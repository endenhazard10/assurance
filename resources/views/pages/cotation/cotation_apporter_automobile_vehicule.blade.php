@extends('layouts.default', ['title' => 'Home apporter automobile'])
@section('content')
    <br>
    <div class="col-md-12">
        <div class="row" style="margin-top:50px">
            <div class="col-md-6 offset-md-3">
                <div class="row mb-2" style="background-color: ; color: #336699;">
                    <div class="col-sm-12">
                        <h1 class=" p-3 mb-2 bg-primary text-white" style="box-shadow: 15px 15px 20px #646464;text-align: center;font-weight: bold !important;font-size:20px;text-transform: uppercase;">Formulaire souscription assurance véhicule</h1>
                    </div>
                </div>
                {{-- <h3 style="color: #077b8a; font-weight : bold;text-align: center;text-transform: uppercase;">Formulaire souscription assurance
                    véhicule
                </h3> --}}
                <hr>
                @livewire('formulaire-apporter')
            </div>
        </div>
    </div>
@stop
