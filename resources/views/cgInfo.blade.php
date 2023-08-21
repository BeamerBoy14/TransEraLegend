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
<main class="main">

    <!--==================== OFFER ====================-->
    <section class="offer section" id="offer">
        <div class="offer__container container grid">
            <img src="{{asset('img/bg7.png')}}" alt="" class="offer__bg">
            <div class="offer__data">
                <h2 class="section__title offer__title">
                    The place to be for more information about rent rules
                </h2>
                <p class="info">
                    A lease agreement is a vital document that plays a crucial role in the relationship between the lessor and the lessee. It provides legal protection to both parties by clearly establishing the terms and conditions of the lease.
                    <br><br>
                    Firstly, for the lessor, the lease agreement helps safeguard their rights by specifying the rental rules. This includes details of the leased property, the duration of the lease, payment terms, and the lessee's responsibilities. In case of any disputes, the contract serves as a reliable reference to resolve them fairly.
                    <br><br>
                    Secondly, for the lessee, the lease agreement offers security by outlining their rights and obligations. Having a written document ensures that the agreed-upon conditions are adhered to by the lessor. This avoids misunderstandings and provides the lessee with the assurance of fair treatment throughout the lease period.
                    <br><br>
                    Lastly, the lease agreement facilitates better communication between the lessor and the lessee. By putting all the lease terms in writing, both parties have a clear understanding of their respective commitments. This fosters a professional and transparent relationship, where expectations are well-defined and upheld.
                    <br><br>
                    In conclusion, a lease agreement is a valuable tool for both lessors and lessees. It establishes a strong foundation for a harmonious business relationship by protecting rights and clarifying responsibilities for each party. With a well-drafted lease agreement in place, the risks of disputes are minimized, and both parties can focus on a successful leasing experience.
                </p>
            </div>
        </div>
    </section>

    <!--==================== FEATURES ====================-->
    <section class="features section" id="features">
        <div class="about__container container grid">
            <h2 class="section__title offer__title">
                PART 1 - THE LESSEE
            </h2>
            <p class="info">
                The lessee will be responsible for the vehicle and must pay before the rental.
                he cannot transfer the vehicle to anyone else; otherwise, he must reimburse it in case of issues, as the insurance won't cover it.
                <br><br>
                The lessee's name will be written in the contract, giving them the sole right to drive the car.
                he must have a valid license and present it before collecting the vehicle.
                In case of damages caused by an unidentified third party, theft, damage to the vehicle above or below, tires, rims, scratches, dents, burns, dirt, tears, the lessee will be responsible through the deposit.
                Before the rental, the lessee must report any noticed elements.
                Non-compliance will lead to contract termination without reimbursement.
                he must use the anti-theft device at each stop and lock the vehicle securely.
                he must keep the vehicle keys and papers in a safe place.
                <br><br>
                The lessee must not lend the vehicle to anyone else.
                he will be responsible for any fines or violations of laws, regulations, the traffic code, and must pay any related penalties.
                he must refrain from using prohibited substances while driving; otherwise, the deposit will be retained.
                <br><br>
                The lessee must review the insurance policy.
                he must protect the lessor's and company's interests in case of an accident.
                If the insurer refuses coverage, the lessee must reimburse based on the expert's assessment.
                he must return the vehicle in its initial condition; otherwise, fees will apply.
                In case of damage, he must inform the lessor and cannot repair without authorization.
                he must provide a written statement within 24 hours of an accident, including the details.
                In case of theft or fire, he must immediately inform the lessor with written proof.
                <br><br>
                The lessee is liable and responsible towards the lessor.
                he are responsible for rental expenses and legal fees if the contract is breached.
                he cannot assign, pledge, sublet, or dispose of the contracted vehicle.
                If a third party claims the vehicle, he must promptly notify the lessor to avoid issues with restitution.
            </p>
        </div>
    </section>

    <!--==================== FEATURES ====================-->
    <section class="features section" id="features">
        <div class="about__container container grid">
            <h2 class="section__title offer__title">
                PART 2 - The Vehicle.
            </h2>
            <p class="info">
                The vehicle will be specified in the contract with its identification details. Contract includes a vehicle description 
                sheet and a duplicate of exterior condition signed by both parties. Rental is personal and non-transferable. Vehicle 
                usable within 5 countries: France, Germany, Switzerland, Belgium, Luxembourg. Other countries need lessor's approval in 
                advance. <br><br> Daily rental rate and deposit amount vary per vehicle, stated in the contract. Specific kilometers stated in the 
                contract, must be followed. To calculate mileage, subtract before and after rental kilometers. Additional charge of 0.75 
                cents per km if lessee exceeds agreed mileage limit. Vehicle must be returned in initial condition before lease. <br><br> 
                For personal/professional use only; excludes rental, driving school, ambulance, inflammable/hazardous liquid transport, 
                exceeding passenger limit, illicit purposes, or towing. Deductible in the contract for damages and collisions, adjusted 
                as needed. Late return charged at daily rate plus 40%. <br><br> Lessee returns vehicle; lessor may charge retrieval 
                expenses. Vehicle must be returned on agreed date and time. VEI classification automatically terminates lease. Vehicle 
                remains lessor's property; plates/inscriptions cannot be removed.
            </p>
            <!--<img src="{{asset('img/offer.png')}}" alt="" class="offer__img">-->
        </div>
    </section>

    <!--==================== OFFER ====================-->
    <section class="offer section" id="offer">
        <div class="offer__container container grid">
            <img src="{{asset('img/bg6.png')}}" alt="" class="offer__bg">
            <div class="offer__data">
            <h2 class="section__title offer__title">
                PART 3 - The Lessor
            </h2>
            <p class="info">
                The lessor provides the specified vehicle throughout the rental. Vehicle is inspected and maintained by the lessor for 
                readiness. Accessories and spare wheel supplied if possible. Pre and post-rental vehicle inspection with agreed details. <br><br>
                Lessors must provide insurance covering the vehicle in Europe. All necessary documents given by lessor for smooth rental. Insurance covers 
                damages against third parties as per regulations. Up to one hour delay authorized by the lessor without charges. Exceeding one-hour
                delay incurs extra daily charge, contract-dependent. <br><br> Extensions allowed with 24-hour notice and advanced payment. Lessor 
                may charge for unreturned documents.Security deposit prevents lessee breaches, amount varies per contract. Deposit returned 
                promptly, can be paid in cash, card, or transfer. <br><br> Excess damages over deposit have 15-day resolution period. Non-payment 
                or one-day delay incurs 20% penalty. Contract termination possible for non-compliance or default. Lessor sends formal notice for 
                contract termination. Lessee refusing to return vehicle faces daily compensation. Disputes without amicable resolution resolved by 
                Polish courts.
            </p>
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
                    <a href="{{ url('/#featured') }}" class="footer__link">Cars</a>
                </li>
                <li>
                    <a href="{{ url('/cgInfo') }}" class="footer__link">general condition</a>
                </li>
                <li>
                    <a href="{{ url('/construct') }}" class="footer__link">additional pricing</a>
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
@endsection