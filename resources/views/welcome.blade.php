@extends('layouts.default',['title'=>'Home'])
@section('content')
@include('layouts.partials.carou')

    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="display-1" style="color: #288BA8; font-weight : bold;">Bienvenue</h1>
                    <span class="" style="color: #822013;font-weight : bold; font-size: 20px;">Connexion pour l'administrateur et l'apporter</span>
                </div>
            </div>
            <div class="row">
                
                <div class="col-12 col-md-6 mb-6">
                    <div class="card h-100">
                        <a href="{{route('connexion_admin')}}">
                            <img src="{{asset('images/admin.webp')}}" class="card-img-top img-a" alt="..." >
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('connexion_admin')}}" class=" text-decoration-none text-dark font-weight-bold">Admistrateur</a>
                            <p class="card-text">
                               
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-6">
                    <div class="card h-100">
                        <a href="{{route('connexion_apporter')}}">
                            <img src="{{asset('images/apporter.jpg')}}" class="card-img-top img-a" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('login')}}" class=" text-decoration-none text-dark font-weight-bold">Apporter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

@stop