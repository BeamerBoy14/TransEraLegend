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
<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <div class="shape shape__big"></div>
        <div class="shape shape__small"></div>
        <div class="home__container container grid">
            <div class="home__data">
                <h1 class="home__title">
                    Latest acquisition at TransEra
                </h1>
                <h2 class="home__subtitle">
                    {{ $latestCar->model }}
                </h2>
                <h3 class="home__elec">
                    <i class="ri-roadster-line"></i> {{ $latestCar->feature }}
                </h3>
            </div>

            <img src="{{asset('img/home.png')}}" alt="" class="home__img">

            <div class="home__car">
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-temp-cold-line"></i>
                    </div>
                    <h2 class="home__car-number">{{ $latestCar->power }}</h2>
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
                        <i class="ri-money-euro-circle-line"></i>
                    </div>
                    <h2 class="home__car-number">{{ $latestCar->price }}</h2>
                    <h3 class="home__car-name">price per day</h3>
                </div>
            </div>
            <a href="#featured" class="home__button">START</a>
        </div>
    </section>

    <!--==================== POPULAR ====================-->
    <section class="popular section" id="popular">
        <h2 class="section__title">
            Car available now <br> in the fleet
        </h2>
            <div class="popular__container container swiper">
                <div class="swiper-wrapper">
                    @foreach ($availableCars as $car)
                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            <h1 class="popular__title">{{ $car->brandName() }}</h1>
                            <h3 class="popular__subtitle">{{ $car->model }}</h3>
        
                            <a href="{{ url('/car/' . $car->id)}}"><img src="{{ asset('img/'. $car->imgSemiSide) }}" alt="" class="popular__img"></a>
        
                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> {{ $car->acceleration }}
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> {{ $car->topSpeed }}
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> {{ $car->fuelType }}
                                </div>
                            </div>
        
                            <h3 class="popular__price">{{ $car->price }}€ / day</h3>
                        </article>
                    @endforeach
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--==================== FEATURED ====================-->
    <section class="featured section" id="featured">
        <h2 class="section__title">
            All our car fleet
        </h2>
        
        <div class="featured__container container">
            <ul class="featured__filters">
                <li>
                    <button class="featured__item active-featured" data-filter="all">
                        <span>All</span>
                    </button>
                </li>
                @forelse($brands as $brand)
                    <li>
                        <button class="featured__item" data-filter=".{{ $brand->name }}">
                            <img src="{{asset('img/'. $brand->imglogowhite )}}" alt="">
                        </button>
                    </li>
                @empty
                    Empty list
                @endforelse
            </ul>
            <div class="featured__content grid">
                @foreach ($cars as $car)
                    <article class="featured__card mix {{ strtolower($car->brandName()) }}">
                    <div class="shape shape__smaller"></div>
                    <h1 class="featured__title">{{ $car->brandName() }}</h1>
                    <h3 class="featured__subtitle">{{ $car->model }}</h3>
                    <a href="{{ url('/car/' . $car->id)}}"><img src="{{ asset('img/'. $car->imgSemiSide ) }}" alt="" class="featured__img"></a>
                    <h3 class="featured__price">{{ $car->price }}€ / day</h3>
                    </article>
                @endforeach
                @if(Auth::check())
                    @if(Auth::user()->admLaw== 1)
                        <article class="featured__card mix plus">
                            <div class="shape shape__smaller"></div>
                            <h1 class="featured__title">More</h1>
                            <h3 class="featured__subtitle">Next time...</h3>
                            <a href="{{ url('/add') }}"><img src="{{asset('img/pluss.png')}}" alt="" class="featured__img"/></a>
                            <h3 class="featured__price"></h3>
                        </article>
                    @endif
                @endif
                
            </div>
        </div>
    </section>

    <!--==================== OFFER ====================-->
    <section class="offer section" id="offer">
        <div class="offer__container container grid">
            <img src="{{asset('img/offer-bg.png')}}" alt="" class="offer__bg">
            <div class="offer__data">
                <h2 class="section__title offer__title">
                    Do You Want To Receive <br> Special Offers ?
                </h2>
                <p class="offer__description">
                    Be the first to receive all the information about our
                    products, contest and new cars by email by subcribing to our 
                    mailing list.
                </p>
                <a href="{{ url('/contest') }}" class="button">
                    Information
                </a>
            </div>
            <img src="{{asset('img/offer.png')}}" alt="" class="offer__img">
        </div>
    </section>

    <!--==================== LOGOS ====================-->
    <section class="logos section">
        <div class="logos__container container grid">
            @forelse($brands as $brand)
                <div class="logos__content">
                    <img src="{{asset('img/'. $brand->imglogowhite )}}" alt="" class="logos__img">
                </div>
            @empty
            @endforelse
        </div>
    </section>
</main>

<!--==================== FOOTER ====================-->
<footer class="footer section" id="end">
    <div class="shape__big"></div>
    <div class="shape__small"></div>

    <div class="footer__container container grid">
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
</footer>
<!--========== SCROLL UP ==========-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line"></i>
</a>
@endsection