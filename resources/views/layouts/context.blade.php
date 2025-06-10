<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Speedia Car Shop HTML 5 Template</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">
        <!-- Main Header -->
        <header class="main-header header-style-four">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></div>
                        </div>
                        <div class="search-box">
                            <form>
                                <input type="search" placeholder="Enter Search Keyord">
                                <button type="submit"><span>Search</span></button>
                            </form>
                        </div>
                        <ul class="right-info">
                            <li><a href="#"><i class="far fa-user"></i></a></li>
                            <li>
                                <div class="shopping-cart"><i class="far fa-shopping-cart"></i><span
                                        class="count">0</span></div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Header lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li><a href="{{ route('welcome') }}">home</a></li>
                                        <li><a href="{{ route('parts') }}">parts</a></li>
                                        <li><a href="{{ route('cart') }}">cart</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="navbar-right-info">
                            <div class="contact-info">
                                <div class="icon"><span class="far fa-phone"></span></div>
                                <div class="content">
                                    <h5>Call Us</h5>
                                    <h4>309-733-4362</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="header-lower">
                    <div class="auto-container">
                        <div class="inner-container">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt="">
                                </div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="contact-info">
                                    <div class="icon"><span class="far fa-phone"></span></div>
                                    <div class="content">
                                        <h5>Call Us</h5>
                                        <h4>309-733-4362</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-remove"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

            <div class="nav-overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
        </header>
        <!-- End Main Header -->

        @yield('content')


        <!--Main Footer-->
        <footer class="main-footer">
            <div class="upper-box">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget about-widget">
                                <div class="logo"><img src="assets/images/logo-2.png" alt=""></div>
                                <div class="text">The probability of someone needing your services or wantin Lorem ipsum
                                    dolor sit amet,</div>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 pl-lg-5">
                            <div class="widget links-widget">
                                <h4 class="widget_title">Useful Links</h4>
                                <ul class="lsit">
                                    <li><a href="#">All properties</a></li>
                                    <li><a href="#">FAQ’S</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Sign up</a></li>
                                    <li><a href="#">Articles</a></li>
                                    <li><a href="#">Popular tags</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget links-widget">
                                <h4 class="widget_title">Why buy from us</h4>
                                <ul class="lsit">
                                    <li><a href="#">Solicitory</a></li>
                                    <li><a href="#">Business Planning</a></li>
                                    <li><a href="#">Human Resources</a></li>
                                    <li><a href="#">Bonds & Commodities</a></li>
                                    <li><a href="#">Financial Projections</a></li>
                                    <li><a href="#">Trades & Stocks</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget contact-widget">
                                <h4 class="widget_title">Get in touch</h4>
                                <div class="single-contact-info">
                                    <h5>Contact Us</h5>
                                    <ul>
                                        <li><a href="tel:6784731667">678-473-1667</a></li>
                                        <li><a href="mailto:Yourname@mail.com">Yourname@mail.com</a></li>
                                    </ul>
                                </div>
                                <div class="single-contact-info">
                                    <h5>Our Address</h5>
                                    <ul>
                                        <li>
                                            <div class="text">4959 Adonais Way Duluth,
                                                GA 30136</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer-->

        <div class="footer-bottom">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="row m-0 align-items-center justify-content-between">
                        {{-- <div class="copyright-text">©2021 CopyRight Example. All rights reserved. </div> --}}
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="">About </a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-4"></span></div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/lazyload.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

    

    <script src="{{ asset('assets/js/script.js') }}"></script>


</body>

</html>