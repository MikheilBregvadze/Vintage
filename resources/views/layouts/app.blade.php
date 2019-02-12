<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navigation" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="navigation-circle nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <div class="top">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="bottom">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <p class="">{{ Auth::user()->name }} <span class="caret"></span></p>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li><a class="link" href="/home">OUTLAW</a></li>
                            <li><a class="link" href="/cruz">CRUZ</a></li>
                            {{-- <li><a class="link" href="javascript:void(0)">TRAKER</a></li> --}}
                            <li><a class="link" href="/scrambler">SCRAMBLER</a></li>
                            <li><a class="link" href="/cafe">CAFE</a></li>
                        </ul>
                        <div class="logo">
                            <a href=""><div class="logoImg"></div></a>
                            <!-- <a href=""><img src="img/logo.png" alt="logo"></a> -->
                        </div>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav flex-row align-items-center ml-auto">
                            <li><a class="linkRight shopNow" href="javascript:void(0)">Shop Now</a></li>
                            <li><a class="linkRight zero" href="javascript:void(0)">0</a></li>
                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            @yield('content')
            
        </main>


    </div>
    <footer>
            <div class="container">
                <div class="footer-container d-flex justify-content-between">
                    <div class="footer-left">
                        <div class="links row">
                            <div class="col-sm-6 col-12">
                                <ul>
                                    <li><a href="javascript:void(0)">Home</a></li>
                                    <li><a href="javascript:void(0)">Terms of services</a></li>
                                    <li><a href="javascript:void(0)">About us</a></li>
                                    <li><a href="javascript:void(0)">Store</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-12">
                                <ul>
                                    <li><a href="javascript:void(0)">Home</a></li>
                                    <li><a href="javascript:void(0)">Terms of services</a></li>
                                    <li><a href="javascript:void(0)">About us</a></li>
                                    <li><a href="javascript:void(0)">Store</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
                    <div class="logo f-logo">
                        <a href=""><img src="/img/logo.png"></a>
                    </div>
        
                    <div class="footer-right d-flex justify-content-around">
                        <div class="footer-right_border d-flex justify-content-between">
                            <div class="footer-right_text m-auto">
                                <p class="bold bolder">Sing up for updates</p>
                                <p class="bold">Enter your email</p>
                            </div>
                            <div class="icons d-flex m-auto">
                                <a class="m-auto" href="javascript:void(0)"><img src="/img/f-raw.png"></a>
                            </div>
                        </div>
                        <div class="social">
                            <div class="facebook">
                            <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="facebook">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>
