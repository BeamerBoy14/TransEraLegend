<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    
        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/styleLogin.css')}}">
    </head>

    <body>
        <div class="shape shape__big"></div>
        <div class="shape shape__small"></div>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('/') }}" class="nav__link1">TransEra Legend</a>
                        <h3>{{ __('Login') }}</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <input id="email" type="email" type="text" placeholder="{{ __('Email Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>

                            <div class="d-flex justify-content-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                <button type="submit" class="btn float-right login_btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center links">
                                Don't have an account ? 
                            </div>
                            <a href="{{ url('/register') }}" class="nav__link">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
