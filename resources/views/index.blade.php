@extends('layouts.frontend')
@section('content')
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-6 col-md-6">
                <h1>Search <br> Choose <br> Buy</h1>
                <p class="text-white text-uppercase">
                    Everyone wants the innovation through books.
                </p>
            </div>

            <div class="banner-img col-lg-6 col-md-6">
                <img 
                    src="https://www.julesbuono.com/wp-content/uploads/2020/12/Thumbnail-62.jpg" 
                    alt="" 
                    class="img-fluid"
                >
            </div>
        </div>
    </div>
</section>

<section class="products-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10">Featured Books to Show</h1>
                <p>Who are extremely in love with books?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="user/img/p1.png" alt="">
                    </div>

                    <div class="details">
                        <h4>The Upper Eye</h4>
                        <p>Who are extremely in love with eco-friendly system?</p>
                        <a href="#" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="user/img/p2.png" alt="">
                    </div>

                    <div class="details">
                        <h4>The Crab Wheel</h4>
                        <p>Who are extremely in love with eco-friendly system?</p>
                        <a href="#" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="user/img/p3.png" alt="">
                    </div>

                    <div class="details">
                        <h4>The Plug Ninja</h4>
                        <p>Who are extremely in love with eco-friendly system?</p>
                        <a href="#" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="user/img/p4.png" alt="">
                    </div>

                    <div class="details">
                        <h4>The Controller</h4>
                        <p>Who are extremely in love with eco-friendly system?</p>
                        <a href="#" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10 text-white">Some Features that Made us Unique</h1>
                <p class="text-white">Who are extremely in love with eco-friendly system?</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-user"></span>
                        <h4>Expert Technicians</h4>
                    </a>

                    <p>Usage of the internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-license"></span>
                        <h4>Professional Service</h4>
                    </a>

                    <p>Usage of the internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-phone"></span>
                        <h4>Great Support</h4>
                    </a>

                    <p>Usage of the internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-rocket"></span>
                        <h4>Technical Skills</h4>
                    </a>

                    <p>Usage of the internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-diamond"></span>
                        <h4>Highly Recommended</h4>
                    </a>

                    <p>Usage of the internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row">
                        <span class="lnr lnr-bubble"></span>
                        <h4>Positive Reviews</h4>
                    </a>

                    <p>Usage of the internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection