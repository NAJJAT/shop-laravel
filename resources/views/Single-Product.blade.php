@extends('layouts.Single-Product')

@section('content')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See more details</p>
                    <h1>{{ $product->name }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <!-- Dynamically load product image -->
                    <img src="{{ asset('assets/img/products/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{ $product->name }}</h3>
                    <p class="single-product-pricing"><span>Per Kg</span> ${{ $product->price }}</p>
                    <p>{{ $product->description }}</p>
                    <div class="single-product-form">
                        <form action="{{ route('add-to-cart', $product->id) }}" method="POST">
                            @csrf
                            <input type="number" name="quantity" placeholder="0">
                            <button type="submit" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </form>
                        <p><strong>Categories: </strong>{{ $product->category }}</p>
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->

<!-- more products -->
<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Related</span> Products</h3>
                    <p>Explore more products you may like.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($relatedProducts as $relatedProduct)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="{{ url('/Single-Product/' . $relatedProduct->id) }}">
                            <img src="{{ asset('assets/img/products/' . $relatedProduct->image) }}" alt="{{ $relatedProduct->name }}">
                        </a>
                    </div>
                    <h3>{{ $relatedProduct->name }}</h3>
                    <p class="product-price"><span>Per Kg</span> ${{ $relatedProduct->price }}</p>
                    <a href="{{ route('add-to-cart', $relatedProduct->id) }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end more products -->

<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <!-- Add logos or sponsors dynamically if needed -->
                    <div class="single-logo-item">
                        <img src="{{ asset('assets/img/company-logos/1.png') }}" alt="Company Logo 1">
                    </div>
                    <div class="single-logo-item">
                        <img src="{{ asset('assets/img/company-logos/2.png') }}" alt="Company Logo 2">
                    </div>
                    <div class="single-logo-item">
                        <img src="{{ asset('assets/img/company-logos/3.png') }}" alt="Company Logo 3">
                    </div>
                    <div class="single-logo-item">
                        <img src="{{ asset('assets/img/company-logos/4.png') }}" alt="Company Logo 4">
                    </div>
                    <div class="single-logo-item">
                        <img src="{{ asset('assets/img/company-logos/5.png') }}" alt="Company Logo 5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel -->
@endsection
