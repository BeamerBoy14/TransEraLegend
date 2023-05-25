@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link href="{{asset('dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

@endsection
@section('script')

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('dashboard/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('dashboard/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('js/car.js')}}"></script>
<script src="{{asset('js/calendar.js')}}"></script>
@endsection

@section('content')

@if(!empty($car))
<div class="container mt-5">
    <div class="h1">Here, {{ $car->Model }}</div>
    <hr>
    <div class="image-grid">
        <div class="main-image">
            <img src="{{asset('img/b3.jpg')}}" alt="Large image">
        </div>
        <div class="small-images">
            <img src="{{asset('img/b1.jpg')}}" alt="Small image 1" class="gallery-image" onclick="zoomImage(this)">
            <img src="{{asset('img/b2.jpg')}}" alt="Small image 2" class="gallery-image" onclick="zoomImage(this)">
            <img src="{{asset('img/b4.jpg')}}" alt="Small image 3" class="gallery-image" onclick="zoomImage(this)">
            <img src="{{asset('img/b5.jpg')}}" alt="Small image 4" class="gallery-image" onclick="zoomImage(this)">
        </div>
    </div>
    <div class ="description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel erat in odio placerat vestibulum sed at massa. Donec sit amet sagittis lacus. Orci varius natoque 
        penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas 
        ultricies bibendum libero, consectetur mollis turpis cursus sed. Ut rutrum lectus vel fermentum egestas. Praesent eu bibendum neque.
    </div>
    <div class="barre-blanche2"></div>
    <div class="home__car">
        <div class="home__car-data">
            <div class="home__car-icon">
                <i class="ri-temp-cold-line"></i>
            </div>
            <h2 class="home__car-number">{{ $car->Power }}</h2>
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
            <h2 class="home__car-number">{{ $car->FuelType }}</h2>
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
    <div id="calender"></div>
    <input type="date" id="start" name="start_date">
    <input type="date" id="end" name="end_date">
</div>
@else
    <p>Aucune voiture n'a été trouvée.</p>
@endif

@endsection