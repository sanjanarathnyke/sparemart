@extends('layouts.context')
@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url(assets/images/background/bg-5.jpg);">
    <div class="auto-container">
        <h1>Shop Grid with left sidebar</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li class="active">Shop Grid with left sidebar</li>
        </ul>
    </div>
</section>

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="showing-result-shorting">
            <div class="showing">
                <ul>
                    <li><i class="fas fa-th-list"></i></li>
                    <li class="active"><i class="fas fa-th-large"></i></li>
                </ul>
                <p>Showing 6 of 98 products</p>
            </div>
            <div class="shorting">
                <span>Sort</span>
                <select class="selectmenu">
                    <option selected="selected">Price</option>
                    <option>$45</option>
                    <option>$69</option>
                    <option>$99</option>
                </select>
            </div>
        </div>
        <div class="row">
            @foreach ($suspensionItems as $shoks)
                <div class="col-lg-4 col-md-6 product-block-five">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset($shoks->image) }}" alt="{{ $shoks->name }}">
                        </div>
                        <div class="lower-content">
                            <h5>{{ $shoks->category->name }}</h5> <!-- Displaying the category name -->
                            <h4>{{ $shoks->name }}</h4>
                            <div class="price">${{ number_format($shoks->price, 2) }}</div>
                            <div class="link-btn">
                                <a href="cart.html" class="theme-btn btn-style-one"><span> Add to cart</span></a>
                                <a href="#" class="theme-btn btn-style-one style-3"><span>Add to wishlist</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="page-pagination">
            <ul class="clearfix">
                <li><a href="#"><span class="fas fa-angle-double-left"></span></a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#"><span class="fas fa-angle-double-right"></span></a></li>
            </ul>
        </div>
    </div>
</div>

@endsection