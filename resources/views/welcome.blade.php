<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="ressources/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
         <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    </head>
    <body>
        <!--==================== HEADER ====================-->
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
                            Porshe Taycan
                        </h2>
                        <h3 class="home__elec">
                            <i class="ri-flashlight-fill"></i> Car
                        </h3>
                    </div>

                    <img src="{{asset('img/home.png')}}" alt="" class="home__img">

                    <div class="home__car">
                        <div class="home__car-data">
                            <div class="home__car-icon">
                                <i class="ri-temp-cold-line"></i>
                            </div>
                            <h2 class="home__car-number">408</h2>
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
                            <h2 class="home__car-number">433</h2>
                            <h3 class="home__car-name">autonomy (km)</h3>
                        </div>
                    </div>
                    <a href="#featured" class="home__button">START</a>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__group">
                        <img src="{{asset('img/about.png')}}" alt"" class="about__img">

                        <div class="about__card">
                            <h3 class="about__card-title">2500+</h3>
                            <p class="about__card-desciption">
                                Supercharges placed along popular routes
                            </p>
                        </div>
                    </div>

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Machines with <br> Future Technology
                        </h2>

                        <p class="about__description">
                            See the future with high-performance cars produced by renowned brands.
                            They feature futuristic builds and designs with new and innovative platforms
                            that last a long time.
                        </p>
                        <a href="#" class="button">Know more</a>
                    </div>
                </div>
            </section>

            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <h2 class="section__title">
                    Car available now <br> in the fleet
                </h2>

                <div class="popular__container container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            <h1 class="popular__title">Porsche</h1>
                            <h3 class="popular__subtitle">Turbo S</h3>

                            <img src="{{asset('img/popular1.png')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 3.7 sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 356 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Electronic
                                </div>
                            </div>

                            <h3 class="popular__price">$ 175,900</h3>

                            <button class="button popular__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>
                        </article>

                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            <h1 class="popular__title">Porsche</h1>
                            <h3 class="popular__subtitle">Taycan</h3>

                            <img src="{{asset('img/popular2.png')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 3.7 sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 356 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Electronic
                                </div>
                            </div>

                            <h3 class="popular__price">$ 114,900</h3>

                            <button class="button popular__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>
                        </article>

                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            <h1 class="popular__title">Porsche</h1>
                            <h3 class="popular__subtitle">Turbo S Cross</h3>

                            <img src="{{asset('img/popular3.png')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 3.7 sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 356 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Electronic
                                </div>
                            </div>

                            <h3 class="popular__price">$ 150,900</h3>

                            <button class="button popular__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>
                        </article>

                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            <h1 class="popular__title">Porsche</h1>
                            <h3 class="popular__subtitle">Boxster 718</h3>

                            <img src="{{asset('img/popular4.png')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 3.7 sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 356 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Electronic
                                </div>
                            </div>

                            <h3 class="popular__price">$125,900</h3>

                            <button class="button popular__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>
                        </article>

                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                            <h1 class="popular__title">Porsche</h1>
                            <h3 class="popular__subtitle">Cayman</h3>

                            <img src="{{asset('img/popular5.png')}}" alt="" class="popular__img">

                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-3-line"></i> 3.7 sec
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-funds-box-line"></i> 356 Km/h
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i> Electronic
                                </div>
                            </div>

                            <h3 class="popular__price">$128,900</h3>

                            <button class="button popular__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>
                        </article>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!--==================== FEATURES ====================-->
            <section class="features section" id="features">
                <h2 class="section__title">
                    TransEra Features
                </h2>

                <div class="feature__container container grid">
                    <div class="features__group">
                        <img src="{{asset('img/features.png')}}" alt="" class="features__img">

                        <div class="features__card features__card-1">
                            <h3 class="features__card-title">800v</h3>
                            <p class="features__card-description">Turbo <br> Chargin</p></p>
                        </div>
                        <div class="features__card features__card-2">
                            <h3 class="features__card-title">350</h3>
                            <p class="features__card-description">Km <br> Range</p></p>
                        </div>
                        <div class="features__card features__card-3">
                            <h3 class="features__card-title">480</h3>
                            <p class="features__card-description">Km <br> Travel</p></p>
                        </div>
                    </div>
                </div>

                <img src="{{asset('img/map.svg')}}" alt="" class="features__map">
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
                        <li>
                            <button class="featured__item" data-filter=".tesla">
                                <img src="{{asset('img/logo3.png')}}" alt="">
                            </button>
                        </li>
                        <li>
                            <button class="featured__item" data-filter=".audi">
                                <img src="{{asset('img/logo2.png')}}" alt="">
                            </button>
                        </li>
                        <li>
                            <button class="featured__item" data-filter=".porsche">
                                <img src="{{asset('img/logo1.png')}}" alt="">
                            </button>
                        </li>
                        <li>
                            <button class="featured__item" data-filter=".bmw">
                                <img src="{{asset('img/logo5.png')}}" alt="">
                            </button>
                        </li>
                    </ul>
                    <div class="featured__content grid">
                        <article class="featured__card mix tesla">
                            <div class="shape shape__smaller"></div>
                            <h1 class="featured__title">Tesla</h1>
                            <h3 class="featured__subtitle">Model X</h3>
                            <img src="{{asset('img/featured1.png')}}" alt="" class="featured__img">
                            <h3 class="featured__price">$98,900</h3>
                        </article>
                        <article class="featured__card mix tesla">
                            <div class="shape shape__smaller"></div>
                            <h1 class="featured__title">Tesla</h1>
                            <h3 class="featured__subtitle">Model 3</h3>
                            <img src="{{asset('img/featured2.png')}}" alt="" class="featured__img">
                            <h3 class="featured__price">$45,900</h3>
                        </article>
                        <article class="featured__card mix audi">
                            <div class="shape shape__smaller"></div>
                            <h1 class="featured__title">Audi</h1>
                            <h3 class="featured__subtitle">E-tron</h3>
                            <img src="{{asset('img/featured3.png')}}" alt="" class="featured__img">
                            <h3 class="featured__price">$175,900</h3>
                        </article>
                        <article class="featured__card mix porsche">
                            <div class="shape shape__smaller"></div>
                            <h1 class="featured__title">Porsche</h1>
                            <h3 class="featured__subtitle">Boxster 987</h3>
                            <a href={{ url('/cars/1') }}><img src="{{asset('img/featured4.png')}}" alt="" class="featured__img"/></a>
                            <h3 class="featured__price">$126,900</h3>
                        </article>
                        <article class="featured__card mix porsche">
                            <div class="shape shape__smaller"></div>
                            <h1 class="featured__title">Porsche</h1>
                            <h3 class="featured__subtitle">Panamera</h3>
                            <a href={{ url('/cars/3') }}><img src="{{asset('img/featured5.png')}}" alt="" class="featured__img"/></a>
                            <h3 class="featured__price">$126,900</h3>
                        </article>
                        <article class="featured__card mix bmw">
                            <div class="shape shape__smaller"></div>
                            <h1 class="featured__title">Bmw</h1>
                            <h3 class="featured__subtitle">M6 competition</h3>
                            <a href={{ url('/cars/2') }}><img src="{{asset('img/featured6.png')}}" alt="" class="featured__img"/></a>
                            <h3 class="featured__price">$156,900</h3>
                        </article>
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
                            products and new cars by email by subcribing to our 
                            mailing list.
                        </p>
                        <a href="#" class="button">
                            Subscribe Now
                        </a>
                    </div>
                    <img src="{{asset('img/offer.png')}}" alt="" class="offer__img">
                </div>
            </section>

            <!--==================== LOGOS ====================-->
            <section class="logos section">
                <div class="logos__container container grid">
                    <div class="logos__content">
                        <img src="{{asset('img/logo1.png')}}" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="{{asset('img/logo2.png')}}"  alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="{{asset('img/logo3.png')}}"  alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="{{asset('img/logo4.png')}}"  alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="{{asset('img/logo5.png')}}"  alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="{{asset('img/logo6.png')}}"  alt="" class="logos__img">
                    </div>
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
                        The company who can help you... <br>
                        To find the true road pleasure and<br>
                        make simplify your life, about car
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

        <!--=============== SCROLL REVEAL ===============-->
        <script src="{{asset('js/scrollreveal.min.js')}}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{asset('js/swiper-bundle.min.js')}}"></script>

        <!--=============== MIXITUP JS ===============-->
        <script src="{{asset('js/mixitup.min.js')}}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>