<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VB PASSION') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src=" {{ asset('img/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rallyes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="{{ route('rallye_anglaises') }}">Le rallye des anglaises</a>
                            <a class="nav-link" href="{{ route('rallye_carte') }}">Rallye à la carte</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('evenements') }}">Evenements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partenaires') }}">Partenaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('galerie') }}">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Location
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link" href="{{ route('car.create') }}">Mettre une voiture à louer</a>
                                <a class="nav-link" href="{{ route('show_owned_cars') }}">Mes voitures en location</a>
                                <div class="dropdown-divider"></div>
                                <a class="nav-link" href="{{ route('car.index') }}">Louer une voiture</a>
                            </div>
                        </li>
                    @endauth
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.show', Auth::id()) }}">Mon profil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2">
                            <img alt="logo footer" class="img-fluid" width="300" height="125" src="//res.cloudinary.com/hrscywv4p/image/upload/c_limit,fl_lossy,h_300,w_300,f_auto,q_auto/v1/1501348/vbp_Logo_o1g4y9.png" data-src="//res.cloudinary.com/hrscywv4p/image/upload/c_limit,fl_lossy,h_300,w_300,f_auto,q_auto/v1/1501348/vbp_Logo_o1g4y9.png">
                        </div>
                        <div class="col-lg-2 align-self-end">
                            <p><b>Pour nous contacter</b></p>
                        </div>
                        <div class="col-lg-2 align-self-end">
                            <p>Mail :</p>
                            <p>info@<wbr>vbpassion.com</p>
                        </div>
                        <div class="col-lg-2 align-self-end">
                            <p>Téléphone :</p>
                            <p>07.77.31.12.21</p>
                        </div>
                        <div class="col-lg-2 offset-lg-2 align-self-end">
                            <a class="s-social-icon s-social-icon-facebook" href="https://www.facebook.com/VBPassionAuto" target="_blank"><span class="fa fa-facebook"></span></a>
                            <a class="s-social-icon s-social-icon-linkedin" href="https://www.linkedin.com/company/vbpassion/" target="_blank"><span class="fa fa-linkedin"></span></a>
                            <a class="s-social-icon s-social-icon-instagram" href="https://www.instagram.com/vbpassionauto/" target="_blank"><span class="fa fa-instagram"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <hr>
                    <p>
                        <span class="s-text-color-black">VB PASSION © 2018 </span><a href="https://uploads.strikinglycdn.com/files/b37002ac-75fa-42ba-94fc-4d96b142ce59/Mentions légales Sites.pdf"><span class="s-text-color-custom1">Mentions Légales</span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('plugins/slick/slick.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
