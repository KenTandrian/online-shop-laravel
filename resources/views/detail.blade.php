@extends('layouts.frontend')
@section('content')
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">Detail Buku</h1>
                <p class="text-white link-nav">
                    <a href="index.html">Home</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="about.html">About Us</a>
                </p>
            </div>
        </div>
    </div>
</section>
{{-- End Banner Area --}}

{{-- Start About Video Area --}}
<section class="about-video-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 about-video-left">
                <h6 class="text-uppercase">Brand new app to blow your mind</h6>
                <h1>We've made a life <br> that will change you</h1>
                <p>
                    <span>We are here to listen from you deliver excellence</span>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="primary-btn">Get Started Now</a>
            </div>

            <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex relative">
                <div class="overlay overlay-bg"></div>
                <a href="https://www.youtube.com/watch?v=ARA0AxrnHdM" class="play-btn">
                    <img src="img/play-btn.png" alt="" class="img-fluid mx-auto">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection