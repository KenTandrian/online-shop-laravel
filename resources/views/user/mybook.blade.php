@extends('../layouts/frontend')
@section('content')
{{-- Start Banner Area --}}
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">Buku ku</h1>
                <p class="text-white link-nav">
                    <a href="/">Home</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="/user/mybook">List Buku</a>
                </p>
            </div>
        </div>
    </div>
</section>
{{-- End Banner Area --}}

{{-- Start Products Area --}}
<section class="products-area product-page section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10">Buku yang Pernah Saya Beli</h1>
            </div>
        </div>

        <div class="row">
            @foreach($book as $books)
            <div class="col-lg-3 col-md-6">
                <div class="single-product">
                    <div class="thumb">
                        <img src="img/p1.png" alt="">
                    </div>
                    <div class="details">
                        <h4>{{ $books->title }}</h4>
                        <p>
                            Pengarang {{ $books->author }}<br/>
                            Penerbit {{ $books->publisher }}
                        </p>
                        <a href="product-details.html" class="primary-btn text-uppercase">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- End Products Area --}}
@endsection