<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <title>Login</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    {{-- <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"> --}}
    <!-- Link Swiper's CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> --}}

    {{-- css fonts--}}
    {{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css"> --}}
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    @vite(['resources/css/index.css', 'resources/js/turshilt.js'])


</head>
<body>

    <div id="app">

        <nav class="navbar">
            <ul class="nav-links">
                <li class="nav-link">
                    <a href="#">Home</a>
                </li>
                <li class="nav-link services">
                    <a href="{{url('frontend/introduce')}}">Artists</a>
                </li>
                <li class="nav-link services">
                    <a href="#">Tickets
                        <span class="material-icons dropdown-icon">
                          <i class="bi bi-ticket-detailed"></i>
                        </span>
                    </a>
                    <ul class="drop-down">
                        <a href="#"><li>Metro Boomin</li></a>
                        <a href="#"><li>CAS</li></a>
                        <a href="#"><li>Billie Eilish</li></a>
                    </ul>
                </li>
                <li class="nav-link services">
                    <a href="login.php">Sign In
                        <span class="material-icons dropdown-icon">
                          <i class="bi bi-box-arrow-in-right"></i>
                        </span>

                    </a>
                    <!-- <ul class="drop-down">
                        <li>Service 1</li>
                        <li>Service 2</li>
                        <li>Service 3</li>
                    </ul> -->
                </li>
            </ul>
        </nav>



        <main>
            {{-- @yield('content') --}}
             <div class="cont">
                <div class="slider"></div>
                <ul class="nav">
            </div>
            <div data-target='right' class="side-nav side-nav--right"></div>
            <div data-target='left' class="side-nav side-nav--left"></div>
        </main>
    </div>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="turshilt.js"></script>

    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
    </script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" rel="stylesheet"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>





    <!-- Js Plugins -->
    {{-- <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/js/mixitup.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script> --}}
</body>
</html>
