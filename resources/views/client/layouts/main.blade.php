<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CSCK | {{ $title }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer async></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    
    <!--icofont-->
    <link rel="preload" as="style" onload="this.rel='stylesheet'" href="{{ asset('vendor/icofont/icofont.min.css') }}">
    
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    
    <!-- main styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/client/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <main class="main">                       
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand mr-lg-5" href="{{ route('home') }}">
                        <img src="{{ asset('/assets/new_logo.png') }}" alt="logo image chalon-sur-saône kayak canoê" class="logo">
                    </a>
                    <p class="mr-5">&nbsp;</p>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <!-- <span class="navbar-toggler-icon"></span> -->
                        <span><i class="fas fa-bars"></i></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav mx-auto small">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Route::currentRouteNamed('about') ? 'nav-link dropdown-toggle active' : 'nav-link dropdown-toggle' }}" href="#" id="about-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Le club <i class="caret pull-right"></i></a>
                                <div class="dropdown-menu" aria-labelledby="about-dropdown">
                                    <a class="dropdown-item" href="{{ route('presentation') }}">Présentation</a>
                                    <a class="dropdown-item" href="{{ route('staff') }}">L'équipe</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="activity-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activités <i class="caret pull-right"></i></a>
                                <div class="dropdown-menu" aria-labelledby="activity-dropdown">
                                    <a class="dropdown-item" href="{{ route('loan') }}">Nos préstations</a>
                                    <a class="dropdown-item" href="{{ route('planning') }}">Séance de navigation</a>
                                    <a class="dropdown-item" href="{{ route('join') }}">Adhérer</a>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="{{ Route::currentRouteNamed('dragon_ladies') ? 'nav-link active' : 'nav-link' }}" href="{{route('dragon_ladies')}}">Pagaie santé</a>
                            </li>

                            <li class="nav-item ">
                                <a class="{{ Route::currentRouteNamed('news') ? 'nav-link active' : 'nav-link' }}" href="{{ route('news') }}">Actualités</a>
                            </li>


                            <li class="nav-item ">
                                <a class="{{ Route::currentRouteNamed('contact') ? 'nav-link active' : 'nav-link' }}" href="{{route('contact')}}">contacts</a>
                            </li>

                        </ul>
                    </div>
                    
                    <ul class="navbar-nav mr-auto social-links">
                        <li class="nav-item">
                            <a href="https://www.facebook.com/groups/860575377387016/about" target="_blank" class="nav-link"><i class="fab fa-facebook fa-lg"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/CSCK_DL/media" target="_blank" class="nav-link"><i class="fab fa-twitter fa-lg"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}" title="Se Connecter">
                                <i class="far fa-user-circle fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>                            
            @yield('content')
        </main>

        
    </div>
</body>


<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
@stack('script')

</html>