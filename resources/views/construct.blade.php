<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>TransEra - Page In Construction</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('dashboard/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

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
                        <h3 class="text-primary"></i>Construction</h3>
                    </a>
                    <div class="navbar-nav w-100">
                        <a href="{{ url('/construct') }}" class="nav-item nav-link active"><i class="fa fa-quote-right me-2"></i>Construction</a>
                        <a href="{{ url('/') }}" class="nav-item nav-link"><i class="fa fa-fast-backward me-2"></i>Home</a>
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->

            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <div class="navbar-nav align-items-center ms-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->

                <!-- 404 Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                        <div class="col-md-6 text-center p-4">
                            <i class="bi bi-cone-striped display-1 text-primary"></i>
                            <h1 class="display-1 fw-bold">503</h1>
                            <h1 class="mb-4">Page in construction</h1>
                            <p class="mb-4">This page is under construction. We are working hard to provide you with an exceptional experience soon. Thank you for your patience !</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ url('/') }}">Go Back To Home</a>
                        </div>
                    </div>
                </div>
                <!-- 404 End -->

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
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/dashboard/lib/chart/chart.min.js')}}"></script>
        <script src="{{asset('/dashboard/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('/dashboard/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('/dashboard/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/dashboard/lib/tempusdominus/js/moment.min.js')}}"></script>
        <script src="{{asset('/dashboard/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
        <script src="{{asset('/dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('/dashboard/js/main.js')}}"></script>
    </body>

</html>