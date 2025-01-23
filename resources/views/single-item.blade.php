@extends('layouts.context')
@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url(assets/images/background/bg-5.jpg);">
    <div class="auto-container">
        <h1>Single Product</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li class="active">Single Product</li>
        </ul>
    </div>
</section>

<section class="single-product-section">
    <div class="auto-container">
        <div class="product-details">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-product-image">
                        <div class="image">
                            <img src="assets/images/resource/image-53.jpg" alt="Product Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-content pl-lg-5">
                        <h5>{{$part->category->name}}</h5>
                        <h4>{{$part->name}} </h4>
                        <div class="price">${{$part->price}}</div>
                        <div class="text">{{$part->description}}</div>
                        <div class="product-quantity">
                            <div class="link-btn">
                                <a href="{{ route('cart') }}" class="theme-btn btn-style-one"><span> Add to cart</span></a>
                                <a href="#" class="theme-btn btn-style-one style-3"><span>Add to wishlist</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-box tabs-box">
            <ul class="tab-btns tab-buttons clearfix">
                <li data-tab="#desc" class="tab-btn active-btn"><span>Description</span></li>
            </ul>
            <div class="tabs-content">
                <div class="tab active-tab" id="desc">
                    <div class="product-details-content">
                        <div class="desc-content-box">
                            <div class="text">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="information">
                    <div class="product-details-content">
                        <div class="desc-content-box">
                            <div class="text">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="review">
                    <div class="review-box-holder">
                        <div class="theme_carousel owl-theme owl-carousel"
                            data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "2" }}}'>
                            <!--Start single review box-->
                            <div class="column">
                                <div class="single-review-box">
                                    <div class="image-holder">
                                        <img src="assets/images/resource/review-1.png" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="name">
                                                <h3>Steven Rich <span>, April 10, 2019</span></h3>
                                            </div>
                                            <div class="review-box">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Value for money , I use it from long time and it is very useful and good
                                                product.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single review box-->
                            <!--Start single review box-->
                            <div class="column">
                                <div class="single-review-box">
                                    <div class="image-holder">
                                        <img src="assets/images/resource/review-2.png" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="name">
                                                <h3>William Cobus <span>, April 09, 2019:</span></h3>
                                            </div>
                                            <div class="review-box">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>We denounce with righteous indignation and dislike men who are so
                                                beguiled.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single review box-->
                        </div>
                    </div>
                    <div class="review-form">
                        <div class="shop-page-title">
                            <div class="title-two">Add Your Comments</div>
                            <p>Your email address will not be published. Required fields are marked <b>*</b></p>
                        </div>
                        <form id="review-form" action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="add-rating-box">
                                        <div class="add-rating-title">
                                            <h4>Your Rating</h4>
                                        </div>
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-box">
                                        <p>Your Review<span>*</span></p>
                                        <textarea name="review" placeholder="" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <p>Name<span>*</span></p>
                                        <input type="text" name="fname" placeholder="" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <p>Email<span>*</span></p>
                                        <input type="email" name="email" placeholder="" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="theme-btn btn-style-one" type="submit"><span
                                            class="btn-title">Submit</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="related-products">
            <div class="sec-title">
                <h2>Related Products</h2>
            </div>
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel"
                    data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                    <div class="col-lg-12 product-block-five">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/resource/image-42.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h5>Product Category</h5>
                                <h4><a href="product-details.html">Disc Brake</a> </h4>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <div class="price">$62.00 <del>$86.00</del></div>
                                <div class="link-btn">
                                    <a href="cart.html" class="theme-btn btn-style-one"><span> Add to cart</span></a>
                                    <a href="#" class="theme-btn btn-style-one style-3"><span>Add to wishlist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 product-block-five">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/resource/image-43.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h5>Product Category</h5>
                                <h4><a href="product-details.html">Mini Engine Kit</a> </h4>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <div class="price">$62.00 <del>$86.00</del></div>
                                <div class="link-btn">
                                    <a href="cart.html" class="theme-btn btn-style-one"><span> Add to cart</span></a>
                                    <a href="#" class="theme-btn btn-style-one style-3"><span>Add to wishlist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 product-block-five">
                        <div class="inner-box">
                            <div class="image">
                                <img src="assets/images/resource/image-7.jpg" alt="">
                            </div>
                            <div class="lower-content">
                                <h5>Product Category</h5>
                                <h4><a href="product-details.html">Engine Oil</a> </h4>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                                <div class="price">$62.00 <del>$86.00</del></div>
                                <div class="link-btn">
                                    <a href="cart.html" class="theme-btn btn-style-one"><span> Add to cart</span></a>
                                    <a href="#" class="theme-btn btn-style-one style-3"><span>Add to wishlist</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection