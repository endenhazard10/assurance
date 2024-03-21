<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a href="{{route('home')}}"><img src="{{asset('images/logo1.png')}}" alt="" width="80px"></a>
        <a class="navbar-brand" href="{{route('home')}}">Sene Assurance</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}" wire:navigate>Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Connexion apporter</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.login')}}">Connexion admin</a></li>
                @guest          
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('cotation_apporter_automobile_vehicule') }}">Vehicule</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cotation_apporter_automobile_deux_roues') }}">Deux roues</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cotation_apporter_automobile_tpv') }}">Tpv</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
            </ul>
        </div>
    </div>
</nav>
