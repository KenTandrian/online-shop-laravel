@extends('layouts.frontend')
@section('content')
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Products
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="products.html"> Products</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start products Area -->
<section class="products-area product-page section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10">Featured Robotics Products to Show</h1>
                <p>Who are extremely in love with eco friendly system.</p>
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
                        <p>Who are extremely in love with eco friendly system.</p>
                        <a href="product-details.html" class="primary-btn text-uppercase">View Details</a>
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
                        <p>Who are extremely in love with eco friendly system.</p>
                        <a href="product-details.html" class="primary-btn text-uppercase">View Details</a>
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
                        <p>Who are extremely in love with eco friendly system.</p>
                        <a href="product-details.html" class="primary-btn text-uppercase">View Details</a>
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
                        <p>Who are extremely in love with eco friendly system.</p>
                        <a href="product-details.html" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End products Area -->
@endsection
