<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tableau de bord apporteur</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        .table-container {
    max-height: 400px; /* Hauteur fixe de la div, ajustez cette valeur selon vos besoins */
    overflow: auto; /* Afficher la barre de défilement si nécessaire */
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
                    <a href="{{route('home')}}" class="nav-link">Home</a>
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
                        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('admin.dashboard')}}" class="nav-link">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <p>
                                     Home Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('creer_apporter')}}" class="nav-link">
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
                            <h1 class="m-0" style="text-align: center">Page d'administration</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body table-container">
                                    <h5 class="card-title"></h5>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                        <th style="font-size: 12px;min-width:80px;">#</th>
                                        <th style="font-size: 12px;min-width:250px;">Code Apporter</th>
                                        <th style="font-size: 12px;min-width:250px;">Branche</th>
                                        <th style="font-size: 12px;min-width:250px;">Compagnie</th>
                                        <th style="font-size: 12px;min-width:250px;">Prénom</th>
                                        <th style="font-size: 12px;min-width:250px;">Nom</th>
                                        <th style="font-size: 12px;min-width:250px;">Numéro police</th>
                                        <th style="font-size: 12px;min-width:250px;">Date d'effet</th>
                                        <th style="font-size: 12px;min-width:250px;">Date échéance</th>
                                        <th style="font-size: 12px;min-width:250px;">Prime NETTE</th>
                                        <th style="font-size: 12px;min-width:250px;">Date Accessoire</th>
                                        <th style="font-size: 12px;min-width:250px;">Prime TTC</th>
                                        <th style="font-size: 12px;min-width:250px;">Commission Apporter</th>
                                        <th style="font-size: 12px;min-width:250px;">Commission Accessoire</th>
                                        <th style="font-size: 12px;min-width:250px;">Commission Totale</th>
                                        </tr>
                                        </thead>
                                        @foreach($requete as $event)
                                        <tbody>
                                        <tr>
                                        <td style="font-size: 12px;">{{$loop->index+1}}</td>
                                        <td style="font-size: 12px;">--</td>
                                        <td style="font-size: 12px;">{{ucfirst($event->niveau)}}</td>
                                        <td style="font-size: 12px;">{{ucfirst($event->assurance_choisit)}}</td>
                                        <td style="font-size: 12px;">{{ucfirst($event->prenom)}}</td>
                                        <td style="font-size: 12px;">{{ucfirst($event->nom)}}</td>
                                        <td style="font-size: 12px;">{{$event->numero_police}}</td>
                                        <td style="font-size: 12px;">{{$event->date_effet}}</td>
                                        <td style="font-size: 12px;">{{$event->date_echeance}}</td>
                                        <td style="font-size: 12px;">{{$event->prime_nette}}</td>
                                        <td style="font-size: 12px;">{{$event->accessoires}}</td>
                                        <td style="font-size: 12px;">{{$event->prime_ttc}}</td>
                                        <td style="font-size: 12px;">{{$event->commissions_apporteur}}</td>
                                        <td style="font-size: 12px;">{{$event->commissions_accessoires}}</td>
                                        <td style="font-size: 12px;">{{$event->commissions_apporteur+$event->commissions_accessoires}}</td>
                                        </tr>
                                        </tbody> 
                                        @endforeach
                                        </table>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $requete->links() }}
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
