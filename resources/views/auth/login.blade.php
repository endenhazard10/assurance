@extends('layouts.default', ['title' => 'Connexion apporter'])
@section('content')
    {{-- @include('layouts.partials.carou') --}}
    <br>
    <section class="text-center">
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- to get an API token!-->
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Connexion apporter</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ce formulaire permet à l'apporter de se connecter !</p>
                    </div>
                </div>
                <form id="contactForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="Entrer votre email"
                            name="email" value="{{ old('email') }}" data-sb-validations="required,email" />
                        <label for="email">Entrer Votre adresse email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">L'email est requis.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">L'email est non valide.</div>
                    </div>
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="password" required placeholder="Entrer votre mot de passe"
                            type="text" data-sb-validations="required" />
                        <label for="name">Entrer votre mot de passe</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Valider</button></div>

                </form>
            </div>
        </div>
        @if (Session::get('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            </div>
            <div class="col-md-12">
                <div class="alert alert-danger">Adresse Mail ou mot de passe incorrect</div>
            </div>
        @endif
    </section>
    <br>
@endsection
