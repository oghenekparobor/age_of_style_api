<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AOS Voting Platform Dashbaord">
    <meta name="author" content="Eminokanju Oghenekparobor">
    <link rel="shortcut icon" href="img/fav.png">
    <title>AOS Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="login-container">
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        <div class="loading-messsage">
            <span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span>
        </div>
    </div>
    <div class="container">
        <form action="/login" method="POST">
            @csrf
            <div class="login-box">
                <div class="login-blocks-img"></div>
                <div class="login-form">
                    {{-- <a href="/" class="login-logo"><img src="img/logo-white.svg" alt="Cliq Admin" /></a> --}}
                    <div class="login-welcome">Welcome, <br />Please login to your account.</div>
                    <div class="login-form-block">
                        <label class="login-form-label">Email</label><input type="email" name="email" class="login-form-control">
                        {{-- <label>@if ()
                            
                        @endif</label> --}}
                    </div>
                    <div class="login-form-block">
                        <label class="login-form-label">Password</label><input type="password" name="password"
                            class="login-form-control">
                    </div>
                    <div class="login-form-actions">
                        <button type="submit" class="btn"><span class="icon"><i
                                    class="icon-login"></i></span>Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
