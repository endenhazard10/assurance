@extends('layouts.default', ['title' => 'Home apporter cotation'])
@section('content')
    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <span style="text-transform: uppercase;color: #288BA8; font-weight : bold; font-size: 25px;">Bienvenue
                        {{ Auth::user()->name }}</span>
                </div>
            </div>
            <div class="row">

                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('cotation_apporter_automobile') }}">
                            <img src="{{ asset('images/automobile.jpg') }}" class="card-img-top img-b" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{ route('cotation_apporter_automobile') }}"
                                class=" text-decoration-none text-dark font-weight-bold">Automobile</a>
                            <p class="card-text">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('cotation_apporter_voyage') }}">
                            <img src="{{ asset('images/voyage.jpg') }}" class="card-img-top img-b" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{ route('cotation_apporter_voyage') }}"
                                class=" text-decoration-none text-dark font-weight-bold">Voyage</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('cotation_apporter_habitation') }}">
                            <img src="{{ asset('images/habitation.png') }}" class="card-img-top img-b" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{ route('cotation_apporter_habitation') }}"
                                class=" text-decoration-none text-dark font-weight-bold">Habitation</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop
