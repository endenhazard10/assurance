<div>
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
            </div>
            <div class="row">
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_document_axa')}}">
                            <img src="{{asset('images/axa.png')}}" class="card-img-top img-c" alt="..." >
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_document_axa')}}" class=" text-decoration-none text-dark font-weight-bold"><h6>PRIME TTC : {{session()->get('prime_ttc_axa')}} FCFA</h6></a>
                            <p class="card-text font-weight-bold">
                               <h6 style="color:#007BFF;">DUREE : {{session()->get('duree')}} mois</h6>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_automobile_deux_roues')}}">
                            <img src="{{asset('images/cnart.jpeg')}}" alt="..." class="card-img-top img-c">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_automobile_deux_roues')}}" class=" text-decoration-none text-dark font-weight-bold">
                                <h6>PRIME TTC : {{session()->get('prime_ttc_cnart')}} FCFA</h6>
                            </a>
                            <p class="card-text font-weight-bold">
                               <h6 style="color:#007BFF;">DUREE : {{session()->get('duree')}} mois</h6>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_automobile_tpv')}}">
                            <img src="{{asset('images/wafa.webp')}}" alt="..." class="card-img-top img-c">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_automobile_tpv')}}" class=" text-decoration-none text-dark font-weight-bold">
                                <h6>PRIME TTC : {{session()->get('prime_ttc_wafa')}} FCFA</h6>
                            </a>
                            <p class="card-text font-weight-bold">
                               <h6 style="color:#007BFF;">DUREE : {{session()->get('duree')}} mois</h6>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_automobile_vehicule')}}">
                            <img src="{{asset('images/amsa.jpeg')}}" class="card-img-top img-c" alt="..." >
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_automobile_vehicule')}}" class=" text-decoration-none text-dark font-weight-bold">
                                <h6>PRIME TTC : {{session()->get('prime_ttc_amsa')}} FCFA</h6>
                            </a>
                            <p class="card-text">
                               <h6 style="color:#007BFF;">DUREE : {{session()->get('duree')}} mois</h6>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                
                
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_automobile_deux_roues')}}">
                            <img src="{{asset('images/allianz.webp')}}" alt="..." class="card-img-top img-c">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_automobile_deux_roues')}}" class=" text-decoration-none text-dark font-weight-bold">
                                <h6>PRIME TTC : {{session()->get('prime_ttc_allianz')}} FCFA</h6>
                            </a>
                            <p class="card-text">
                               <h6 style="color:#007BFF;">DUREE : {{session()->get('duree')}} mois</h6>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_automobile_tpv')}}">
                            <img src="{{asset('images/nsia.jpg')}}" alt="..." class="card-img-top img-c">
                            
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_automobile_tpv')}}" class=" text-decoration-none text-dark font-weight-bold">
                                <h6>PRIME TTC : {{session()->get('prime_ttc_nsia')}} FCFA</h6>
                            </a>
                            <p class="card-text">
                               <h6 style="color:#007BFF;">DUREE : {{session()->get('duree')}} mois</h6>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{route('cotation_apporter_automobile_tpv')}}">
                            <img src="{{asset('images/askia.png')}}" alt="..." class="card-img-top img-c">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{route('cotation_apporter_automobile_tpv')}}" class=" text-decoration-none text-dark font-weight-bold">
                                <h6>PRIME TTC : {{session()->get('prime_ttc_askia')}} FCFA</h6>
                            </a>
                            <p class="card-text">
                               <h6 style="color:#007BFF;">DUREE : {{session()->get('duree')}} mois</h6>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
