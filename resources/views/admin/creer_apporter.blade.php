@extends('admin.master', ['title' => 'Detail apporter'])
@section('content')
    <div class="col-md-12 ml-0">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="text-center" style="font-weight: bolder;text-transform:capitalize;">Formulaire de création d'un apporter</h3>
                                    </div>
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('enregistrer_apporter') }}">
                                        @csrf
                                        <div class="card-body container">
                                            <div class="form-group">
                                                <label for="1">Nom</label>
                                                <input type="text" name="nom" class="form-control"
                                                    value="{{ old('nom') }}" id="1"
                                                    placeholder="Entrer le nom">
                                                <span class="text-danger">
                                                    @error('nom')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="2">Prenom</label>
                                                <input type="text" name="prenom" class="form-control"
                                                    value="{{ old('prenom') }}" id="2"
                                                    placeholder="Entrer le prenom">
                                                <span class="text-danger">
                                                    @error('prenom')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="3">Telephone</label>
                                                <input type="number" name="telephone" value="{{ old('telephone') }}"
                                                    class="form-control" id="3"
                                                    placeholder="Entrer le Telephone">
                                                <span class="text-danger">
                                                    @error('telephone')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="4">Adresse</label>
                                                <input type="text" name="adresse" value="{{ old('adresse') }}"
                                                    class="form-control" id="4"
                                                    placeholder="Entrer l'adresse">
                                                <span class="text-danger">
                                                    @error('adresse')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="5">Code Apporter</label>
                                                <input type="text" name="code_apporter"
                                                    value="{{ old('code_apporter') }}" class="form-control"
                                                    id="5" placeholder="Entrer le nom">
                                                <span class="text-danger">
                                                    @error('code_apporter')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="6">Email address</label>
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    class="form-control" id="6" placeholder="Enter email">
                                                <span class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="7">Password</label>
                                                <input type="password" name="password" value="{{ old('password') }}"
                                                    class="form-control" id="7"
                                                    placeholder="Entrer le mot de passe">
                                                <span class="text-danger">
                                                    @error('password')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    
@stop


