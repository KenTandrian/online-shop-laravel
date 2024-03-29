@extends('layouts.frontend')
@section('content')
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Our Products
                </h1>
                <p class="text-white link-nav">
                    <a href="/">Home </a>  
                    <span class="lnr lnr-arrow-right"></span>  
                    <a href="list"> Products</a>
                </p>
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
                <h1 class="pb-10">Featured Books Products to Show</h1>
                <p>Who are extremely in love with books?</p>
            </div>
        </div>

        <div class="row">
            @foreach ($book as $books)
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="user/img/p1.png" alt="">
                    </div>
                    <div class="details">
                        <h4>{{ $books->title }}</h4>
                        <p>
                            Pengarang {{ $books->author }}<br/>
                            Penerbit {{ $books->publisher }}
                        </p>
                        @if (\Auth::user())
                            <form class="" action="buy/{{$books->id}}" method="post">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-xs btn-danger" name="button">  Beli</button>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End products Area -->
@endsection
