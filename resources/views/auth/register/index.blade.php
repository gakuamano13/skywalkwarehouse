<html lang="{{ app()->getLocale() }}">
    <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/owl.carousel.min.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    </head>
    <body>

    <div class="d-lg-flex half">

        <div class="bg order-1 order-md-1" style="background-image: url('{{ asset('images/login.jpg') }}');"></div>
        <div class="contents order-2 order-md-2">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">

                    <div class="mb-4">
                        <h3 class="text-center mb-4">REGISTER</h3>
                        <p class="mb-4"></p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group first">
                            <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">

                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group last mb-3">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                        </div>

                    <input type="submit" value="Regiser" class="btn btn-block btn-primary">

                    {{-- <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span> --}}

                    {{-- <div class="social-login mt-5">
                        <a href="#" class="facebook btn d-flex justify-content-center align-items-center mt-4">
                        <span class="mr-3"><i class="fab fa-facebook-f"></i></span> Login with Facebook
                        </a>
                        <a href="#" class="twitter btn d-flex justify-content-center align-items-center mt-4">
                        <span class="mr-3"><i class="fab fa-twitter"></i></span> Login with  Twitter
                        </a>
                        <a href="#" class="google btn d-flex justify-content-center align-items-center mt-4">
                        <span class="mr-3"><i class="fab fa-google"></i></span> Login with  Google
                        </a>
                    </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="divimage dzsparallaxer--target" style="height: 130%; background-image: url('{{ asset('images/about.jpg') }}');"></div>


  </div>

    <script src="{{ asset('js/auth/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/auth/popper.min.js') }}"></script>
    <script src="{{ asset('js/auth/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/auth/main.js') }}"></script>

  </body>
</html>
