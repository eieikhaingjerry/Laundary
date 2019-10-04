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

        <div class="flex-center position-ref" style="padding-top:150px;">           
            <div class="content" style="background-color:white; color:black;">
            Essence laundry is a personal and commercial drop off laundry facility located in Yangon. 
            
            <h3> Vision </h3><br>
            &nbsp &nbsp Deliver high quality and cost effective commercial laundry services in a clean and customer oriented environment.
            <br>
            <h3> Mission </h3><br>
            To provide exceptional commercial laundry operations to our customers by delivering superior quality and service.
            &nbsp &nbsp Essence laundry aims to deliver high quality and cost effective commercial laundry services in a clean and customer oriented environment. Is your business in need of our commercial laundry service? 
            <br>
            <p> Essence laundry offers a quick and convenient Wash-Dry-Fold laundry service for standard personal laundry such as clothing, sheets and towels. We also accept specialty laundry items such as comforters, bedspreads, quilts, sleeping bags and more. <br> Our current rate per piece is 500 kyats. </p>
            <br>
            We offer pick-up and delivery services for personal and commercial customers in Yangon. Click here to schedule your pick up or delivery!
            <br>
            WHY CHOOSE US? <br>
            	Reasonable price <br>
            	Easy to use Website <br>
            	Time Saving <br>
            	Professional Quality <br>

            </div>
        </div>
    </div>
</body>
</html>
