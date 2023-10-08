<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TransEra - Reservation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('dashboard/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init("AvFicreFz2FouqW0L");
        })();
    </script>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{ url('/home') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>Reservation</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('img/user.png')}}""" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        @if(Auth::user()->admLaw== 1)
                            <span>Admin</span>
                        @else
                            <span>Customer</span>
                        @endif
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('/home') }}"        class="nav-item nav-link">          <i class="fa fa-tachometer-alt me-2">   </i>Dashboard</a>
                    <a href="{{ url('/construct') }}"   class="nav-item nav-link">          <i class="fa fa-address-card me-2">     </i>My Profile</a>
                    <a href="{{ url('/reservation') }}" class="nav-item nav-link active">   <i class="fa fa-calendar me-2">         </i>My Reservation</a>
                    <a href="{{ url('/construct') }}"   class="nav-item nav-link">          <i class="fa fa-quote-right me-2">      </i>Contest</a>
                    <a href="{{ url('/#featured') }}"   class="nav-item nav-link">          <i class="fa fa-car me-2">              </i>Cars</a>
                    <a href="{{ url('/cgInfo') }}"      class="nav-item nav-link">          <i class="fa fa-balance-scale me-2">    </i>General Condition</a>
                    <a href="{{ url('/construct') }}"   class="nav-item nav-link">          <i class="fa fa-plus-square me-2">      </i>Additional Pricing</a>
                    <a href="{{ url('/contact') }}"   class="nav-item nav-link">          <i class="fa fa-comments me-2">         </i>Contact Us</a>
                    <a href="{{ url('/construct') }}"   class="nav-item nav-link">          <i class="fa fa-bars me-2">             </i>Services</a>
                    <a href="{{ url('/') }}"            class="nav-item nav-link">          <i class="fa fa-fast-backward me-2">    </i>Home</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="{{ url('/home') }}"" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('img/user.png')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ url('/construct') }}" class="dropdown-item">Profile</a>
                            <a href="{{ url('/reservation') }}" class="dropdown-item">Reservation</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link">Déconnexion</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <div class="container-fluid pt-4 px-4">
                <div class="row vh-1000 bg-secondary rounded mx-0">
                    <div class="col-md-15 text-center">
                        <h1 class="mt-3"> Reservation </h1>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Calendar</h6>
                        </div>
                        <div id="calender"></div>
                    </div>
                    <div class="col-md-15 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Reservation list</h6>
                            </div>
                            @forelse ($reservations as $reservation)
                                @php
                                    $car = App\Models\Car::getById($reservation->car_id);
                                @endphp
                                <div class="d-flex align-items-center border-bottom py-3">
                                    <img class="rounded-circle flex-shrink-0" src="{{ asset('img/'. $car->imgSemiSide) }}" alt="" style="width: 50px; height: 40px;">
                                    <div class="w-100 ms-3">
                                        @php
                                            $startDate = Illuminate\Support\Carbon::parse($reservation->startDate);
                                            $endDate = Illuminate\Support\Carbon::parse($reservation->endDate);
                                            $formattedStartDate = $startDate->format('j M Y');
                                            $formattedEndDate = $endDate->format('j M Y');
                                        @endphp
                                        <div class="d-flex w-100 justify-content-between date-info"
                                            data-startDate="{{ $startDate->format('j M Y') }}"
                                            data-endDate="{{ $endDate->format('j M Y') }}"
                                            >
                                            <small> {{ $formattedStartDate }} to {{ $formattedEndDate }} </small>
                                        </div>
                                        <span>Car reserved: {{ $car->brandName() }}  {{ $car->model }}  </span>
                                        <form action="{{ route('delete.reservation', ['id' => $reservation->id]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button  class="btn btn-outline-danger w-100 m-2" type="submit" onclick="return confirm('Are you sure you want to delete this reservation n°{{ $reservation->id }} ?')">Delete</button >
                                        </form>
                                    </div>
                                </div>
                            @empty
                                No reservations
                            @endforelse
                        </div>
                    </div>
                    <div class="col-md-15 col-md-6 col-xl-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Car available to rent</h6>
                            <ul class="list-group list-group-flush">
                                @foreach ($cars as $car)
                                <li class="list-group-item bg-transparent" onclick="clickCar({{ $car->id }})">
                                    <img src="{{ asset('img/'. $car->imgSemiSide) }}" style="width: 50px; height: 40px;">
                                    {{ $car->brandName() }}  {{ $car->model }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-15 col-md-6 col-xl-4">
                        <div class="bg-secondary rounded h-100 p-4">
                            <form action="{{ route('create.reservation') }}" method="post">
                                @csrf
                                <h6 class="mb-4">Your next reservation - Date</h6>
                                <select class="form-select" id="floatingSelect" name="car_id" aria-label="Floating label select example">
                                        <option selected>Select your car</option>
                                        @foreach ($cars as $car)
                                            <option value="{{ $car->id }}">{{ $car->brandName() }} - {{ $car->model }}</option>
                                        @endforeach
                                </select>
                                @error('car_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="end" class="clickable-label">
                                    select date: (click on right side)
                                    <input type="date" id="start" name="start_date" class="form-control">
                                    <input type="date" id="end" name="end_date" class="form-control">
                                </label>
                                <input type="hidden" id="userId" name="user_id" value="{{ auth()->id() }}">
                                <input type="hidden" id="carId" name="car_id" value="">
                                <button class="btn btn-outline-light" type="submit" onclick="sendMail()">Create reservation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="{{ url('/') }}">TransEra Legend</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/dashboard/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('/dashboard/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('/dashboard/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('/dashboard/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/dashboard/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('/dashboard/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('/dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Calendar -->
    <script src="{{asset('js/calendar.js')}}"></script>
    <!-- Main Javascript -->
    <script src="{{asset('/dashboard/js/main.js')}}"></script>
</body>

</html>