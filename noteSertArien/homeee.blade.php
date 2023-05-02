<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleHome.css')}}">
</head>
<body>
    <div class="sidebar">
        <a href="{{ url('/') }}">Accueil</a>
        <a href="#">À propos</a>
        <a href="#">Contact</a>
        <form method="POST" class="nav-link pl-0" action="{{ route('logout') }}">
            @csrf
            <button class="sub_btn" type="submit">Logout</button>
        </form>
    </div>
    <header>
        <div class="logo">
            <img src="{{asset('img/logo1.png')}}" alt="Logo">
        </div>
        <div class="label">
            <h1>TransEra Legend</h1>
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="box">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Hi, ') }} {{ Auth::user()->name }}
                    </div>
                    <div class="box">Calendar</div>
                    <div class="box">Annoncement</div>
                    <div class="box">Info calendar</div>
                </div>
            </div>
        </div>
    </div>
</body>
