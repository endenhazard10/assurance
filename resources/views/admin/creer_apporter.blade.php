<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tableau de bord apporteur</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        .table-container {
            max-height: 400px;
            /* Hauteur fixe de la div, ajustez cette valeur selon vos besoins */
            overflow: auto;
            /* Afficher la barre de défilement si nécessaire */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                @guest
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>

            <ul class="navbar-nav ml-auto">


            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <p>
                                    Home Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('creer_apporter') }}" class="nav-link">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <p>
                                    Creer apporter
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0" style="text-align: center">Créer Un Apporter</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Formulaire de création</h3>
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


        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</body>

</html>
