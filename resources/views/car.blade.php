@extends('layouts.app')

@section('css')
<!--=============== REMIX ICONS ===============-->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<!--=============== SWIPER CSS ===============-->
<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
<!--=============== CSS ===============-->
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@endsection

@section('script')
<!--=============== SCROLL REVEAL ===============-->
<script src="{{asset('js/scrollreveal.min.js')}}"></script>
<!--=============== SWIPER JS ===============-->
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<!--=============== MIXITUP JS ===============-->
<script src="{{asset('js/mixitup.min.js')}}"></script>
<!--=============== MAIN JS ===============-->
<script src="{{asset('js/main.js')}}"></script>
@endsection

@section('content')
@if(!empty($car))  
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <div class="home__data">
            <h1 class="home__title">
                Here, The {{ $car->model }}
            </h1>
        </div>
    </section>

    <!--==================== OFFER ====================-->
    <section class="offer section" id="offer">
        <div class="offer__container container grid">
            <img src="{{asset('img/bg3.png')}}" alt="" class="offer__bg">
            <div class="popular__container container swiper">
                <div class="swiper-wrapper">
                    <article class="popular__card2 swiper-slide">
                        <img src="{{asset('img/'. $car->imgExt )}}" alt="" class="popular__img2">
                    </article>
    
                    <article class="popular__card2 swiper-slide">
                        <img src="{{asset('img/'. $car->imgExtSec )}}" alt="" class="popular__img2">
                    </article>
    
                    <article class="popular__card2 swiper-slide">
                        <img src="{{asset('img/'. $car->imgIntSec )}}" alt="" class="popular__img2">
                    </article>

                    <article class="popular__card2 swiper-slide">
                        <img src="{{asset('img/'. $car->imgExtThi )}}" alt="" class="popular__img2">
                    </article>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <img src="{{asset('img/'. $car->imgSemiSide )}}"" alt="" class="offer__img">
        </div>
    </section>

    <!--==================== FEATURES ====================-->
    <section class="features section" id="features">
        <div class="about__container container grid">
            <div class="about__group">
                <img src="{{asset('img/'. $car->imgInt )}}" alt"" class="about__img">

                <div class="about__card">
                    <h3 class="about__card-title">Focus On</h3>
                    <p class="about__card-desciption">
                        {{ $car->feature }}
                    </p>
                </div>
            </div>

            <div class="about__data">
                <h2 class="section__title about__title">
                    Powerful Car with <br> Luxury Options
                </h2>

                <p class="about__description">
                    {{ $car->description }}
                </p>
                @if(Auth::check())
                    <a href="{{ url('/reservation') }}" class="button">My reservation</a>
                @else
                    <a href="{{ route('home') }}" class="button">Connexion</a>
                @endif
            </div>
        </div>
    </section>

    <!--==================== FEATURED ====================-->
    <section class="featured section" id="featured">
        <div class="featured__content grid">
            <div class="home__car">
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-temp-cold-line"></i>
                    </div>
                    <h2 class="home__car-number">{{ $car->power }}</h2>
                    <h3 class="home__car-name">Power (CH)</h3>
                </div>
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-dashboard-3-line"></i>
                    </div>
                    <h2 class="home__car-number">345</h2>
                    <h3 class="home__car-name">Torque (Nm)</h3>
                </div>
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-flashlight-fill"></i>
                    </div>
                    <h2 class="home__car-number">{{ $car->fuelType }}</h2>
                    <h3 class="home__car-name">Type de Carburant</h3>
                </div>
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-flashlight-fill"></i>
                    </div>
                    <h2 class="home__car-number">433</h2>
                    <h3 class="home__car-name">autonomy (km)</h3>
                </div>
            </div>
        </div>
    </section>

    <!--==================== FEATURED ====================-->
    <section class="featured section" id="featured">
        <div class="featured__content grid">
            <div class="home__car">
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-number-1"></i>
                    </div>
                    <h2 class="home__car-number">{{ $car->price }}€</h2>
                    <h3 class="home__car-name">per day</h3>
                </div>
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-number-3"></i>
                    </div>
                    <h2 class="home__car-number">{{ $car->priceWeekEnd }}€</h2>
                    <h3 class="home__car-name">Friday to monday</h3>
                </div>
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-number-7"></i>
                    </div>
                    <h2 class="home__car-number">{{ $car->priceWeek }}€</h2>
                    <h3 class="home__car-name">per week</h3>
                </div>
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-number-3"></i><i class="ri-number-0"></i>
                    </div>
                    <h2 class="home__car-number">{{ $car->priceMonth }}€</h2>
                    <h3 class="home__car-name">per month</h3>
                </div>
            </div>
        </div>
    </section>

    
    <!--==================== ABOUT ====================-->
    @if(Auth::check())  
    <section class="about section" id="about">
        <div id="calender"></div>
        <input type="date" id="start" name="start_date">
        <input type="date" id="end" name="end_date">
    </section>
    @else
    <section class="features section" id="features">
        <div class="about__container container grid">
            <div class="about__group">
            </div>

            <div class="about__data">
                <a href="{{ route('home') }}" class="button">Connexion</a>
            </div>
        </div>
    </section>
    @endif
</main>

<!--==================== FOOTER ====================-->
<footer class="footer section" id="end">

    <div class="footer__container container grid">
        <div class="shape shape__small"></div>
        <div class="footer__content">
            <a href="#" class="footer__logo">
                <i class="ri-steering-line"></i> TrandEra Legend
            </a>
            <p class="footer__description">
                Unleash the extraordinary with our exotic car rentals. Dive into 
                elegance, power, and exhilaration behind the wheel for 
                unforgettable moments.
            </p>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">
                Company
            </h3>

            <ul class="footer__links">
                <li>
                    <a href="#" class="footer__link">About</a>
                </li>
                <li>
                    <a href="#featured" class="footer__link">Cars</a>
                </li>
                <li>
                    <a href="#" class="footer__link">History</a>
                </li>
            </ul>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">
                Information
            </h3>

            <ul class="footer__links">
                <li>
                    <a href="#" class="footer__link">Contact us</a>
                </li>
                <li>
                    <a href="#" class="footer__link">Services</a>
                </li>
            </ul>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">
                Network
            </h3>

            <ul class="footer__social">
                <!--<a href="UrlFB" target="_blank" class="footer__social-link">
                    <i class="ri-facebook-fill"></i>
                </a>-->
                <a href="https://www.instagram.com/transera_legend/" target="_blank" class="footer__social-link">
                    <i class="ri-instagram-fill"></i>
                </a>
                <!--<a href="UrlTT" target="_blank" class="footer__social-link">
                    <i class="ri-twitter-fill"></i>
                </a>-->
            </ul>
        </div>
    </div>

    <span class="footer__copy">
        &#169; TransEra. All rights reserved
    </span>
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>
</footer>
@else
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__data">
                <h1 class="home__title">
                    Aucune voiture n'a été trouvée.
                </h1>
            </div>
        </section>
        <!--==================== OFFER ====================-->
        <section class="featured section" id="featured">
            <div class="featured__content grid">
            </div>
        </div>
    </section>
    </main>
    
    <!--==================== FOOTER ====================-->
    <footer class="footer section" id="end">
    
        <div class="footer__container container grid">
            <div class="shape shape__small"></div>
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="ri-steering-line"></i> TrandEra Legend
                </a>
                <p class="footer__description">
                    Unleash the extraordinary with our exotic car rentals. Dive into 
                    elegance, power, and exhilaration behind the wheel for 
                    unforgettable moments.
                </p>
            </div>
    
            <div class="footer__content">
                <h3 class="footer__title">
                    Company
                </h3>
    
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">About</a>
                    </li>
                    <li>
                        <a href="#featured" class="footer__link">Cars</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">History</a>
                    </li>
                </ul>
            </div>
    
            <div class="footer__content">
                <h3 class="footer__title">
                    Information
                </h3>
    
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Contact us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Services</a>
                    </li>
                </ul>
            </div>
    
            <div class="footer__content">
                <h3 class="footer__title">
                    Network
                </h3>
    
                <ul class="footer__social">
                    <!--<a href="UrlFB" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-fill"></i>
                    </a>-->
                    <a href="https://www.instagram.com/transera_legend/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <!--<a href="UrlTT" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>-->
                </ul>
            </div>
        </div>
    
        <span class="footer__copy">
            &#169; TransEra. All rights reserved
        </span>
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>
    </footer>
@endif
@endsection