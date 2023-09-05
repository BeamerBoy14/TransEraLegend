<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TransEra Legend - Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('dashboard/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
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
                    <h3 class="text-primary"></i>Dashboard</h3>
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
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ url('/construct') }}" class="nav-item nav-link"><i class="fa fa-address-card me-2"></i>My Profile</a>
                    <a href="{{ url('/reservation') }}" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>My Reservation</a>
                    <a href="{{ url('/construct') }}" class="nav-item nav-link"><i class="fa fa-quote-right me-2"></i>Contest</a>
                    <a href="{{ url('/') }}" class="nav-item nav-link"><i class="fa fa-fast-backward me-2"></i>Home</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="{{ url('/') }}" class="navbar-brand d-flex d-lg-none me-4">
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
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">User information</h6>
                            <dl class="row mb-0">
                                <dt class="col-sm-4">Name</dt>
                                <dd class="col-sm-8">{{ Auth::user()->name }}</dd>

                                <dt class="col-sm-4">E-mail</dt>
                                <dd class="col-sm-8">{{ Auth::user()->email }}</dd>

                                @php
                                    $date = Illuminate\Support\Carbon::parse(Auth::user()->created_at);
                                    $formatteddate = $date->format('j M Y');
                                @endphp

                                <dt class="col-sm-4">Member since</dt>
                                <dd class="col-sm-8">{{ $formatteddate }}</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="owl-carousel testimonial-carousel">
                                    <div class="testimonial-item text-center">
                                        <img class="img-fluid rounded-circle mx-auto mb-4" src={{asset('img/concour.png')}} style="width: 100px; height: 100px;">
                                        <h5 class="mb-1">Contest</h5>
                                        <p>Each month</p>
                                        <p class="mb-0">You can take advantage of the contest to enjoy the luxury offered by our agency for FREE</p>
                                        <a href="{{ url('/construct') }}">Know more...</a>
                                    </div>
                                    @foreach($actuPromo as $promotion)
                                        <div class="testimonial-item text-center">
                                            <img class="img-fluid rounded-circle mx-auto mb-4" src="{{ asset('img/discount.png') }}" style="width: 100px; height: 100px;">
                                            <h5 class="mb-1">Promotion available today !</h5>
                                            <p>{{ $promotion->name }}</p>
                                            @php
                                                $startDate = Illuminate\Support\Carbon::parse($promotion->startDate);
                                                $endDate = Illuminate\Support\Carbon::parse($promotion->endDate);
                                                $formattedStartDate = $startDate->format('j M Y');
                                                $formattedEndDate = $endDate->format('j M Y');
                                            @endphp
                                            <p class="mb-0">
                                                come and take advantage of this promotion on our car of our selection which did not last forever, it started <br>
                                                {{ $formattedStartDate }} until {{ $formattedEndDate }}.
                                            </p>
                                            <a href="{{ url('/construct') }}">Know more...</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">My location calendar</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="owl-carousel testimonial-carousel">
                                    @forelse ($availableCars as $car)
                                    <div class="testimonial-item text-center">
                                        <img class="img-fluid rounded-circle mx-auto mb-4" src="{{ asset('img/'. $car->imgSemiSide) }}" style="width: 125px; height: 100px;">
                                        <h5 class="mb-1">{{ $car->brand }}</h5>
                                        <p>{{ $car->model }}</p>
                                        <p class="mb-0">{{ $car->feature }}</p>
                                        <a href="{{ url('/car/' . $car->id)}}">Rent Now !</a>
                                    </div>
                                    @empty
                                        <p>No car available</p>
                                    @endforelse
                                </div>
                            </div>
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

    <!-- JavaScript Libraries -->
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
    <!-- Template Javascript -->
    <script src="{{asset('/dashboard/js/main.js')}}"></script>
</body>

</html>