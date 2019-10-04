<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>  laundary.com </title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;

            background-image: url("/images/background.jpg");
            background-repeat:repeat;
            background-size:cover;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


        .navbar{
            background-color: #1cb8de !important;
        }

        .navbar2{
            background-color: #0d98ba !important;
            color: white;
        }

        #link { color: white; }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="/images/logo.jpg" width="80px" height="80px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <b> <a class="nav-link" href="{{ route('login') }}" style="color:white;"> {{ __('Login') }}</a> </b>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <b> <a class="nav-link" href="{{ route('register') }}" style="color:white;">{{ __('Register') }}</a> </b>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('customers.index') }}">
                                        {{ __('Dashboard') }}
                                    </a>

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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <nav class="navbar2 navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">                    
                    <ul class="navbar-nav mr-auto">
                        <a id="link" href="{{ route('welcome') }}"> <b> Home </b> </a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a id="link" href="{{ route('abouts.index') }}"> <b> About Us </b> </a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a id="link" href="{{ route('items.create') }}"> <b> Services </b> </a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                        <a id="link" href="{{ route('contacts.index') }}"> <b> Contact Us </b> </a>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="flex-center position-ref" style="padding-top:50px;">           
            <div class="content">
                <p style="color:black;">
                    <h3> Address: </h3> <br>
                    No.18(B), Sakura Tower, Yangon, Myanmar. <br> <br>
                    <h3> Phone: </h3> <br>
                    +959 443 737 323 <br> <br>
                    <h3> E-mail: </h3> <br>
                    laundary@gmail.com <br> <br>
                </p>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.9514976959736!2d96.15717961434545!3d16.779088524480688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec8420713bad%3A0x888f94c10d681c8d!2sSakura%20Tower%2C%20339%20Bo%20Gyoke%20Rd%2C%20Yangon!5e0!3m2!1sen!2smm!4v1570208845700!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <hr>
            </div>
        </div>
    </div>
</body>
</html>
