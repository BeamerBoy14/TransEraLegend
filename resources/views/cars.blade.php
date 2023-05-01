<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-LyE9r7rluKLR0bp0kxbGJzTK1lyrxlC0KrkUWWm6dlmJQ9BP9XuQOQ/52edvL8WqKjN/VeN5fJGPyNkiOTWByQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
        <title>The legend</title>
        <link rel="stylesheet" href="{{asset('css/styleCar.css')}}">
    </head>
    <body>
    @if(!empty($car))
        <div class="shape shape__big"></div>
        <div class="shape shape__small"></div>
        <header>
            <div class="label">
                <h1>TransEra</h1>
            </div>
            <div class="logo">
                <img src="{{asset('img/logo5.png')}}" alt="Logo">
            </div>
        </header>
        <div class="titleh1">Here, {{ $car->Model }}</div>
        <div class="barre-blanche"></div>
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
        <div class="barre-blanche1"></div>
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
        <div class="barre-blanche3"></div>
    @else
        <p>Aucune voiture n'a été trouvée.</p>
    @endif
    </body>
    <script src="{{asset('js/car.js')}}"></script>
</html>