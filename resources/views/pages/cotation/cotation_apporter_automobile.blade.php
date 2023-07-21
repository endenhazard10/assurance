@extends('layouts.default',['title'=>'Home apporter automobile'])
@section('content')
<!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
<span style="text-transform: uppercase;color: #288BA8; font-weight : bold; font-size: 25px;">Bienvenue {{ Auth::user()->name}}</span> 
                </div>
            </div>
            <div class="row">
                
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_automobile_vehicule')}}">
                            <img src="{{asset('images/vehicule.png')}}" class="card-img-top img-b" alt="..." >
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_automobile_vehicule')}}" class=" text-decoration-none text-dark font-weight-bold">Véhicule</a>
                            <p class="card-text">
                               
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_automobile_deux_roues')}}">
                            <img src="{{asset('images/deux_roues.png')}}" alt="..." class="card-img-top img-b">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_automobile_deux_roues')}}" class=" text-decoration-none text-dark font-weight-bold">2 roues</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_automobile_tpv')}}">
                            <img src="{{asset('images/tpv.png')}}" class="card-img-top img-b" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_automobile_tpv')}}" class=" text-decoration-none text-dark font-weight-bold">Tpv</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop