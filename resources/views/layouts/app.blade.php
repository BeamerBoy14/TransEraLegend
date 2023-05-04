<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="ressources/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap.css')}}">
    @yield('css')
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i class="ri-steering-line"></i>
                TransEra Legend
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#popular" class="nav__link">Available</a>
                    </li>
                    <li class="nav__item">
                        <a href="#features" class="nav__link">Features</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Featured</a>
                    </li>
                    <li class="nav__item">
                        <a href="#offer" class="nav__link">Offers</a>
                    </li>
                    <!--<li class="nav__item">
                        <a href="#end" class="nav__link">Bottom</a>
                    </li>-->
                    @if(Auth::check())
                        <li class="nav__item">
                            <a href="{{ route('home') }}" class="nav__link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>                    
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>  
        </nav>
    </header>
    @yield('content')
    @yield('script')
</body>
</html>
