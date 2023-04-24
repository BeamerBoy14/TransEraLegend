<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-LyE9r7rluKLR0bp0kxbGJzTK1lyrxlC0KrkUWWm6dlmJQ9BP9XuQOQ/52edvL8WqKjN/VeN5fJGPyNkiOTWByQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
        <title>The legend</title>
        <link rel="stylesheet" href="{{asset('css/car.css')}}">
    </head>
    <body>
        <header>
            <h1>Car</h1>
        </header>
        <div class="container">
            <div class="carousel-container">
                <div class="carousel-wrapper">
                    <img src="{{asset('img/featured1.png')}}" alt="Image 1" class="carousel-image">
                    <img src="{{asset('img/featured2.png')}}" alt="Image 2" class="carousel-image">
                    <img src="{{asset('img/featured3.png')}}" alt="Image 3" class="carousel-image">
                </div>
                <button class="prev-button">Prev</button>
                <button class="next-button">Next</button>
            </div>
            <div class="barre-blanche"></div>
            <div class="information">
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting 
                    industry. Lorem Ipsum has been the industry's standard dummy text 
                    ever since the 1500s, when an unknown printer took a galley of type 
                    and scrambled it to make a type specimen book. It has survived not 
                    only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s 
                    with the release of Letraset sheets containing Lorem Ipsum passages,
                     and more recently with desktop publishing software like Aldus 
                    PageMaker including versions of Lorem Ipsum. </p>
            </div>
            <div class="barre-blanche"></div>
            <div class="calendar">
                <div class="month">
                    <ul>
                        <li class="prev"><i class="fas fa-chevron-left"></i></li>
                        <li class="next"><i class="fas fa-chevron-right"></i></li>
                        <li id="month"></li>
                    </ul>
                </div>
                <ul class="weekdays">
                    <li>Dim</li>
                    <li>Lun</li>
                    <li>Mar</li>
                    <li>Mer</li>
                    <li>Jeu</li>
                    <li>Ven</li>
                    <li>Sam</li>
                </ul>
                    <ul class="days">
                </ul>
            </div>
        </div>
        <script src="{{asset('js/carrousel.js')}}"></script> 
        <script src="{{asset('js/calendar.js')}}"></script> 
        <script src="{{asset('js/script.js')}}"></script> 
    </body> 
</html>
