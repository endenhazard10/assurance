<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tableau de bord apporteur</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xjBGCsY4PB5rqk9LlVgZXe6D9QJyzU9bqFiA/70QFip6w2/b44tXFGq8dMofm9O3f/uhhzlGIpFUhjt6W/7imnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            max-height: 400px;
            /* Hauteur fixe de la div, ajustez cette valeur selon vos besoins */
            overflow: auto;
            /* Afficher la barre de défilement si nécessaire */
        }

        body {
            user-select: none;
        }
        .custom-bg-info {
            background-color: #d9138a !important; /* Remplacez cette couleur par celle que vous souhaitez utiliser */
        }
        .custom-bg-primary {
            background-color: #1F2039 !important; /* Remplacez cette couleur par celle que vous souhaitez utiliser */
        }
    </style>
    @livewireStyles
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
                        {{-- <a href="#" class="d-block">{{ Auth::user()->name }}</a> --}}
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
                    <div class="row mb-2" style="background-color: ; color: #336699;">
                        <div class="col-sm-12">
                            <h1 class=" p-3 mb-2 bg-primary text-white" style="box-shadow: 15px 15px 20px #646464;text-align: center;font-weight: bold !important;font-size:24px;text-transform: uppercase;">Page d'administration</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
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


    <footer class="main-footer" style="background-color: #343A40;color: #fff">

        <div class="float-right d-none d-sm-inline" style="color: #fff">
            Anything you want
        </div>

        <strong style="color: #fff">Copyright &copy; 2014-2021</strong> All rights
        reserved.
    </footer>
    </div>
    @livewireScripts
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
