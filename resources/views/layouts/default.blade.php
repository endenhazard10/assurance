<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sene Assurance</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />
        <!-- Bootstrap Icons-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/style.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.partials.nav')
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Nous avons ce qu'il vous faut !</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Sene Assurance a tout ce dont vous avez besoin pour que votre assurance soit pret en un rien de temps ! </p>
                        <a class="btn btn-light btn-xl" href="#services">Commencer!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="" id="services">
            {{-- @include('layouts.partials.nav') --}}
            @yield('content')
            {{-- @include('layouts.partials.footer') --}}
            @livewireScripts 
        </section>
        @include('layouts.partials.footer')
        {{-- <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Company Name</div></div>
        </footer> --}}
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        @include('flashy::message')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

       
