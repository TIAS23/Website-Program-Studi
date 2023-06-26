<!DOCTYPE html>
@extends('layouts.app')
<style>
html {
    height: 100%;
}

body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(#141e30, #243b55);
}

.login-box {
    position: absolute;
    top: 55%;
    left: 50%;
    width: 450px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, .5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
    border-radius: 10px;
}

.login-box h2 {
    font-style: oblique;
    padding: 15px;
    color: #fff;
    text-align: center;
}

.login-box h6 {
    margin: 0 0 10px;
    padding: 0;
    color: #03e9f4;
    text-align: center;
}

.login-box .user-box {
    position: relative;
}

.login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 12px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 2px 0;
    font-size: 25px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}

.login-box .user-box input:focus~label,
.login-box .user-box input:valid~label {
    top: -20px;
    left: 0;
    color: #03e9f4;
    font-size: 12px;
}

.login-box form a {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px;
}

.login-box a:hover {
    background: #03e9f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4;
}

.login-box a span {
    position: absolute;
    display: block;
}

.login-box a span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
    0% {
        left: -100%;
    }

    50%,
    100% {
        left: 100%;
    }
}

.login-box a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03e9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s;
}

@keyframes btn-anim2 {
    0% {
        top: -100%;
    }

    50%,
    100% {
        top: 100%;
    }
}

.login-box a span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #03e9f4);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s;
}

@keyframes btn-anim3 {
    0% {
        right: -100%;
    }

    50%,
    100% {
        right: 100%;
    }
}

.login-box a button span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s;
}

@keyframes btn-anim4 {
    0% {
        bottom: -100%;
    }

    50%,
    100% {
        bottom: 100%;
    }
}

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
    transition: opacity 5s ease, backdrop-filter 3s ease;
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
<script>
window.addEventListener('load', function() {
    var pageLoader = document.querySelector('.page-loader');
    pageLoader.classList.add('hidden');
});
</script>
@section('content')
<section>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <div class="page-loader">
            <img src="{{ url('images/Infinity-loading.gif') }}" alt="Logo" class="logo">
        </div>
        <div class="login-box">
            <h2>Login</h2>
            <form class="container-2" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="user-box">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="email" class="col-form-label text-md-end">Email Adress</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror'

                    <div class="user-box">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        <label for="password">Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="">
                </div>
                <div class="mb-3">
                    <div class="">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked': '' }}>
                            <label class="form-check-label" for="remember">
                                <h6>{{ __('Remember Me') }}</h6>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-0">
                    <div class="d-flex justify-content-center flex-column">
                        <button type="submit" class="btn btn-info">
                            {{ __('Login') }}
                            <span></span>
                        </button>
                        <div class=" d-flex justify-content-center">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                <span></span>
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>

    </html>
</section>
@endsection
<script src="js/jquery.min.js"></script>
<scrip src="js/popper.js"></scrip t>
<script src="js/bootstrap.min.js">
</script>


<script src="js/main.js"></script>
