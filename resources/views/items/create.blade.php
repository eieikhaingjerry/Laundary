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

        <div class="card">
            <div class="card-header" style="background-color:#1cb8de; color:white;"> Create Your Services </div>

            <div class="card-body">
                <form method="POST" action="{{ route('items.store') }}" >
                    @csrf
                    <div class="row">
                        <div class="col-md-4"> 
                           <font size="5"> Normal Clothes: </font>
                        </div>
                        <div class="col-md-4">                        
                            Quantity: <input id="nqty" type="text" class="form-control" name="nqty">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"> 
                           <font size="5"> Large Clothes: </font>
                        </div>
                        <div class="col-md-4">                        
                            Quantity: <input id="lqty" type="text" class="form-control" name="lqty">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"> 
                           <font size="5"> Extra Large Clothes: </font>
                        </div>
                        <div class="col-md-4">                        
                            Quantity: <input id="xlqty" type="text" class="form-control" name="xlqty">
                        </div>
                    </div>
                    <hr>
                    <center>
                        <table border="1" style="color:black;">
                            <tr>
                                <td width="300px;" style="background-color:#1cb8de"> <b> Type: </b> </td>
                                <td width="300px;" style="background-color:#1cb8de"> <b> Quantity: </b> </td>
                                <td width="300px;" style="background-color:#1cb8de"> <b> Per Price: </b> </td>
                                <td width="300px;" style="background-color:#1cb8de"> <b> Sub-Total: </b> </td>
                            </tr>
                            <tr>
                                <td width="300px;"> <b> Normal Clothes: </b> </td>
                                <td width="300px;"> <b> <label id="normalqty"> 0 </b> </label> </td>
                                <td width="300px;"> <b> <label id="normalprice"> 0 Kyat </b> </label> </td>
                                <td width="300px;"> <b> <label id="normalsub"> 0 Kyat </b> </label> </td>
                            </tr>
                            <tr>
                                <td width="300px;"> <b> Large Clothes: </b> </td>
                                <td width="300px;"> <b> <label id="largeqty"> 0 </b> </label> </td>
                                <td width="300px;"> <b> <label id="largeprice"> 0 Kyat </b> </label> </td>
                                <td width="300px;"> <b> <label id="largesub"> 0 Kyat </b> </label> </td>
                            </tr>
                            <tr>
                                <td width="300px;"> <b> Extra Large Clothes: </b> </td>
                                <td width="300px;"> <b> <label id="extraqty"> 0 </b> </label> </td>
                                <td width="300px;"> <b> <label id="extraprice"> 0 Kyat </b> </label> </td>
                                <td width="300px;"> <b> <label id="extrasub"> 0 Kyat </b> </label> </td>
                            </tr>
                            <tr>
                                <td width="300px;" colspan="3"> <b> Total: </b> </td>  

                                <td width="300px;"> <label id="tt"> 0 Kyat </b> </label> <input type="text" name="finaltotal" id="finaltotal" hidden> </td>
                            </tr>
                        </table>
                    <br>

                    <button type="submit" class="btn btn-primary">
                        {{ __('Order Confirm') }}
                    </button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function pageLoad(){
        var normalpri = 0;
        var largepri = 0;
        var extrapri = 0;
        var finaltotalprice = 0;

        jQuery('#nqty').on('input propertychange paste', function() {        
            var ninput = $('#nqty').val();
            var nprice = 0;

            if(ninput<=5){
                nprice= 1500;
            }else if(ninput<=10 && ninput>=6){
                nprice= 1000;
            }else{
                nprice= 500;
            }

            setTimeout(calculatenormalPrice, 1000);

            function calculatenormalPrice(){
                normalcalculate = ninput * nprice;
                normalpri = normalcalculate;
                $('#normalqty').text(ninput);
                $('#normalprice').text(nprice);
                $('#normalsub').text(normalcalculate);                            
                $('#tt').text((normalpri)+(largepri)+(extrapri));         
                $('#finaltotal').val((normalpri)+(largepri)+(extrapri));
                finaltotalprice = (normalpri)+(largepri)+(extrapri);
            }

        });

        jQuery('#lqty').on('input propertychange paste', function() {        
            var linput = $('#lqty').val();
            var lprice = 0;

            if(linput<=5){
                lprice= 2000;
            }else if(linput<=10 && linput>=6){
                lprice= 1500;
            }else{
                lprice= 1000;
            }

            setTimeout(calculatelargePrice, 1000);

            function calculatelargePrice(){
                largecalculate = linput * lprice;
                largepri = largecalculate;
                $('#largeqty').text(linput);
                $('#largeprice').text(lprice);
                $('#largesub').text(largecalculate);
                $('#tt').text((normalpri)+(largepri)+(extrapri));  
                $('#finaltotal').val((normalpri)+(largepri)+(extrapri));
                finaltotalprice = (normalpri)+(largepri)+(extrapri);
            }
        });

        jQuery('#xlqty').on('input propertychange paste', function() {        
            var xinput = $('#xlqty').val();
            var xprice = 0;

            if(xinput<=5){
                xprice= 3500;
            }else if(xinput<=10 && xinput>=6){
                xprice= 3000;
            }else{
                xprice= 2000;
            }

            setTimeout(calculateextraPrice, 1000);

            function calculateextraPrice(){
                extracalculate = xinput * xprice;
                extrapri = extracalculate;
                $('#extraqty').text(xinput);
                $('#extraprice').text(xprice);
                $('#extrasub').text(extracalculate);
                $('#tt').text((normalpri)+(largepri)+(extrapri));  
                $('#finaltotal').val((normalpri)+(largepri)+(extrapri));
                finaltotalprice = (normalpri)+(largepri)+(extrapri);
            }   
        });
    }

    window.onload = pageLoad;
    
    $(document).ready(function() {
      md.initDashboardPageCharts();
    });
</script>
</html>
