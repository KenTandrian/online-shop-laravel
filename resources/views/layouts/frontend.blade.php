<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    {{-- Mobile Specific Meta --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="user/img/fav.png">
    {{-- Author Meta --}}
    <meta name="author" content="Ken Tandrian">
    {{-- Meta Description --}}
    <meta name="description" content="">
    {{-- Meta Keyword --}}
    <meta name="keywords" content="">
    {{-- Meta Character Set --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Site Title --}}
    <title>Tokoku</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ URL::asset('user/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/css/font-awesome.min.css.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/css/hexagons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('user/css/main.css') }}">
    @yield('css')
</head>
<body>
    <header id="header" id="hone">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="/" style="color:white; font-size:24px;">
                        <img src="user/img/book.png" width="50px" height="50px" alt="" title="Tokoku" />
                        Tokoku
                    </a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="/">Berkita</a></li>
                        <li><a href="/list">List Buku</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Register</a></li>
                    </ul>
                </nav>{{-- #nav-menu-container --}}
            </div>
        </div>
    </header>{{-- #header --}}

    @yield('content')

    {{-- Start Footer Area --}}
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="single-footer-widget">
                        <h6>Top Products</h6>
                        <ul class="footer-nav">
                            <li><a href="#">Books 1</a></li>
                            <li><a href="#">Books 2</a></li>
                            <li><a href="#">Books 3</a></li>
                            <li><a href="#">Books 4</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="single-footer-widget newsletter">
                        <h6>Newsletter</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>