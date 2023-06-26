<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome - 404 Page - Lost In Space</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./script.js"></script>
    <link rel="stylesheet" href="landingPage/style.css">
    <script>
    //javascript
    window.addEventListener('load', function() {
        var pageLoader = document.querySelector('.page-loader');
        pageLoader.classList.add('hidden');
    });
    </script>
    <style>
    .page-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: transparent;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        opacity: 1;
        transition: opacity 5s ease, backdrop-filter 7s ease;
        backdrop-filter: blur(8px);
    }

    .page-loader.hidden {
        opacity: 0;
        pointer-events: none;
        filter: blur(3.5px);
    }

    .page-loader img {
        width: 250px;
        height: 250px;
    }
    </style>
</head>
<!-- partial:index.partial.html -->

<body class="bg-salmon">
    <div class="page-loader">
        <img src="{{ url('images/Infinity-loading.gif') }}" alt="Logo" class="logo">
    </div>
    <div class="stars">
        <div class="custom-navbar">
            <div class="navbar-links">
                <ul>
                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                        <li><a href=" {{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400
                                    dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm
                                    focus:outline-red-500">
                                Home</a>
                        </li>
                        @else
                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900
                                    dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm
                                    focus:outline-red-500">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900
                                    dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm
                                    focus:outline-red-500">Register</a>
                        </li>
                        @endif
                        @endauth
                    </div>
                    @endif
                </ul>
            </div>
        </div>
        <div class="central-body">
            <img class="image-404" src="{{ url('images/welcome-page.jpg') }}" width="450px">
            <a href="{{ url('home') }}" class="btn-go-home" target="_blank">GO BACK HOME</a>
        </div>
        <div class="objects">
            <img class="object_rocket" src="http://salehriaz.com/404Page/img/rocket.svg" width="40px">
            <div class="earth-moon">
                <img class="object_earth" src="http://salehriaz.com/404Page/img/earth.svg" width="100px">
                <img class="object_moon" src="http://salehriaz.com/404Page/img/moon.svg" width="80px">
            </div>
            <div class="box_astronaut">
                <img class="object_astronaut" src="https://assets.codepen.io/1538474/astronaut.svg" width="200px">
                <img class="object_astronaut2" src="https://assets.codepen.io/1538474/astronaut.svg" width="140px">
            </div>
        </div>
        <div class="glowing_stars">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>
    </div>
</body>
<!-- partial -->


</html>
