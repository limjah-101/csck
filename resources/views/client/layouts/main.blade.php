<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->    
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;1,200&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid px-0">
            <a class="navbar-brand mr-lg-5" href="{{ route('home') }}">
                <img src="{{ asset('/assets/logo.jpg') }}" alt="logo image chalon-sur-saône kayak canoê" class="logo">
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
                        <a class="nav-link dropdown-toggle {{ Route::currentRouteNamed('about') ? 'nav-link dropdown-toggle active' : 'nav-link dropdown-toggle' }}"
                            href="#" 
                            id="navbarDropdown"
                            role="button" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false">Le club <i class="caret pull-right"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('presentation') }}">Présentation</a>
                            <a class="dropdown-item" href="{{ route('staff') }}">L'équipe</a>                            
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" 
                            href="#" 
                            id="navbarDropdown"
                            role="button" 
                            data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false">Activités <i class="caret pull-right"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('loan') }}">Nos préstations</a>
                            <a class="dropdown-item" href="{{ route('planning') }}">Séance de navigation</a>
                            <a class="dropdown-item" href="{{ route('join') }}">Adhérer</a>                            
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="{{ Route::currentRouteNamed('links') ? 'nav-link active' : 'nav-link' }}" href="{{route('dragon_ladies')}}">Pagaie santé</a>
                    </li>

                    <li class="nav-item ">
                        <a class="{{ Route::currentRouteNamed('news') ? 'nav-link active' : 'nav-link' }}" href="{{ route('news') }}">Actualités</a>
                    </li>

                    
                    <li class="nav-item ">
                        <a class="{{ Route::currentRouteNamed('contact') ? 'nav-link active' : 'nav-link' }}" href="{{route('contact')}}">contacts</a>
                    </li>
                   
                </ul>
            </div>
           <ul class="navbar-nav mr-auto social">
                <li class="nav-item">
                    <a href="#!" class="nav-link"><i class="fab fa-facebook fa-lg"></i></a>
                </li>               
                <li class="nav-item">
                    <a href="#!" class="nav-link"><i class="fab fa-twitter fa-lg"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}" title="Se Connecter"><i class="far fa-user-circle fa-lg"></i></span></a>
                </li>
           </ul>
        </div>
    </nav>

    <main class="container" style="min-height: 100vh;">
        @yield('content')
    </main>

    @include('client.layouts.footer')
    
</div>
</body>
</html>
