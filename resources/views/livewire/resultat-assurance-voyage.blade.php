<div>
    <section class="bg-light" style="margin-bottom: 100px;">
        <div class="container py-5">
            <div class="row text-center py-3">
            </div>
            <div class="row">
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{ route('cotation_apporter_document_axa_voyage') }}">
                            <img src="{{ asset('images/axa.png') }}" class="card-img-top img-c" alt="...">
                        </a>
                        <div class="card-body centrer-text">
                            <a href="{{ route('cotation_apporter_document_axa_voyage') }}"
                                class=" text-decoration-none text-dark font-weight-bold">
                                <h6>PRIME TTC : {{ session()->get('prime_ttc_axa_voyage') }} FCFA</h6>
                            </a>
                            <p class="card-text font-weight-bold">
                            <h6 style="color:#007BFF;">DUREE : {{ session()->get('duree_voyage') }} jours</h6>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
