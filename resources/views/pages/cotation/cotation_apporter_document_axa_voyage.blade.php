@extends('layouts.default',['title'=>'Home apporter automobile'])
@section('content')
<div class="container" style="margin-top: 100px;margin-bottom:100px">
    <div class="row">
        <div class="col-12 col-md-4 mb-4">
            <div class="card h-100">
                <a href="{{route('contrat_assurance_voyage')}}">
                    <img src="{{asset('images/contrat.jpg')}}" class="card-img-top img-b" alt="..." >
                </a>
                <div class="card-body centrer-text">
                    <a href="{{route('contrat_assurance_voyage')}}" class=" text-decoration-none text-dark font-weight-bold">Imprimer le contrat voyage</a>
                    <p class="card-text">
                      
                    </p>
                </div>
            </div>
        </div>
    </div>    
</div>
@stop