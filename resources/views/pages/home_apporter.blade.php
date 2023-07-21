@extends('layouts.default',['title'=>'Home_apporter'])
@section('content')
<!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
<span style="color: #288BA8; font-weight : bold; font-size: 25px;text-transform: uppercase;">Bienvenue {{ Auth::user()->name}}</span> 
                </div>
            </div>
            <div class="row">
                
                <div class="col-12 col-md-6 mb-6">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter')}}">
                            <img src="{{asset('images/cotation.jpg')}}" class="card-img-top img-a" alt="..." >
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter')}}" class=" text-decoration-none text-dark font-weight-bold">Cotation</a>
                            <p class="card-text">
                               
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-6">
                    <div class="card h-100">
                        <a href="{{route('dashboard_apporter')}}">
                            <img src="{{asset('images/dashboard.webp')}}" class="card-img-top img-a" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('dashboard_apporter')}}" class=" text-decoration-none text-dark font-weight-bold">Tableau de bord</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop