<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sh384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
    nav {
        background: linear-gradient(#141e30, #243b55);
        font-size: larger;
    }

    .navbar-nav .nav-link {
        background: linear-gradient(#ffff, #FF007F);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
    }

    body {
        background: linear-gradient(#141e30, #243b55);
    }

    .nav-item.dropdown .dropdown-menu {
        background: linear-gradient(#ffff, #FF007F);
        border: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 0;
        transition: 0.3s;
        min-width: 10rem;
    }

    .nav-item.dropdown .dropdown-menu a {
        color: black;
        padding: 10px 20px;
        display: block;
        text-decoration: none;
        transition: 0.3s;
    }

    .nav-item.dropdown .dropdown-menu a:hover {
        background-color: linear-gradient(#141e30, #243b55);
    }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-white d-flex justify-content-center items-center">
            <div class="container bg-background: linear-gradient(#141e30, #243b55)">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('image/logo_joger.png') }}" width="70" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <a class="nav-link" href="{{ url('check-out') }}">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><strong>{{ __('Login') }}</strong></a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><strong>{{ __('Register') }}</strong></a>
                        </li>
                        @endif
                        @else
                        <!-- <li class="fa fa-shopping-cart"> </li> -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <strong>{{ Auth::user()->name }}</strong>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('profile') }}">
                                    <strong>Profile</strong>
                                </a>
                                <a class="dropdown-item" href="{{ url('history') }}">
                                    <strong>Riwayat Pemesanan</strong>
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <strong>{{ __('Logout') }}</strong>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="w-100 h-100">
                <div class="d-flex justify-content-center align-items-center">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>


</html>