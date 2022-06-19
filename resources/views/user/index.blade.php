<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('assets/css/popper.min.js')}}"></script>
    <script src="{{asset('assets/css/bootstrap.min.js')}}"></script>
    <title>Document</title>
    <style>
        body{
            font-size: 14px;
            line-height: 1.6em;
            font-weight: 300;
            -webkit-font-smoothing: antialiased;
            font-family: 'Roboto',sans-serif;
            overflow-x: hidden;
            background: #fff;
        }
        navbar{
            border-bottom: 1px solid #eaeaea;
        }
        .welcome{
            background-color: #1e1e2d;
            height: 350px!important;
            position: relative;
            width: 100%;
        }
        .welcomecol{
            font-size: 18px;
        }
    </style>
</head>
<body>

<div id="home"></div>
<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block">
            <!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand d-none d-lg-inline-block" href="#"> Navbar 6 </a>
        <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
            <img src="//placehold.it/40?text=LOGO" alt="logo">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ms-auto flex-nowrap">
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item nav-active">Our Solution</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">How We Help</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Blog</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Contact</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
<!-- END OF NAVIGATION -->
<div class="welcome">
<div class="container welcomedata">

    <div class="row">
        <div class="col-lg-12 welcomecol mt-5 mb-5 text-center">
            <div class="h1 text-white">Welcome {{auth()->user()->name}} To Company</div>
            <div class="text-white"><p>Your Referal Link is <a style="color: white" href="#" class="text-decoration-none"> https://crypto.elevanix.club/public/login?id={{auth()->user()->id}}</a></p></div>
            <div class="text-white"><p>Your Total Balance is ${{auth()->user()->balance}}</p></div>
            <div class="text-white"><p>Your Plan
                Is @foreach ($selectedplans as $selectedplan)

                {{$selectedplan->hasplans->name}},
                @endforeach</p></div>
            <div class="text-white"><p>Your
                Insurance
                Plan
                Is @foreach ($selectedinsurances as $selectedinsurance)

                {{$selectedinsurance->hasinsurance->name}},
                @endforeach</p></div>

        </div>
    </div>

</div>
</div>


<div></div>

</body>
</html>
