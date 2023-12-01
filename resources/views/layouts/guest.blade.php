
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>{{ config('app.name') }}  | {{$title ?? 'Welcome'}}</title>

    <!-- Fav Icon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;800&family=Sora:wght@100;200&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="/assets/css/flaticon.css" rel="stylesheet">
    <link href="/assets/css/owl.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">

</head>

<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">

        <!-- main header -->
        <header class="main-header header-style-one">
            <div class="header-low">

                <div class="outer-box">
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li>
                                        <div class="logo-box">
                                    <figure class="logo"><a href="#"><img src="assets/img/logo.png"
                                                        style="height: 20px;" alt=""></a></figure>
                                        </div>
                                    </li>
                                    <li class="current"><a href="{{route('aboutUs.view')}}">About Us</a></li>

                                     <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="{{route('servicesI.view')}}">Services I</a></li>
                                            <li><a href="{{route('servicesII.view')}}">Services II</a></li>
                                            <li><a href="{{route('servicesIII.view')}}">Services III</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('pricing.view')}}">Pricing</a></li>
                                    <li><a href="{{route('faq.view')}}">FAQs</a></li>
                                    <li><a href="{{route('contactUs.view')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <a href="">
                            <button class="btn-box btn-one slider-btn" type="button"
                                style="background:#F5F5F6; color: #1C1E44; font-size: 18px; font-family: Sora; font-weight: 700; word-wrap: break-word">Sign
                                Up</button>

                        </a>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="menu-area">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <a href="">
                            <button class="btn-box btn-one slider-btn"
                                style="color: #1C1E44; font-size: 18px; font-family: Sora; font-weight: 700; word-wrap: break-word">Sign
                                Up</button>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="#"><img src="/assets/img/logo-white.svg" style="height: 20px;" alt=""
                            title=""></a>
                </div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
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

      @yield('content')

            <!-- main-footer -->
        <footer class="main-footer footer-bottom">
            <!-- <div class="footer-bottom"> -->
                <div class="auto-container">
                    <div class="widget-section">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <!-- <h4>Explore</h4> -->
                                    </div>
                                    <div class="widget-content">
                                        <!-- <ul class="social-links clearfix">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 footer-column">
                                <div class="footer-widget links-widget ml-70">
                                    <div class="widget-title">
                                        <h4>Company</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list clearfix">
                                            <li><a href="#">About Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 footer-column">
                                <div class="footer-widget newsletter-widget">
                                    <div class="widget-title">
                                        <h4>Services</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list clearfix">
                                            <li><a href="#">Book A Pickup</a></li>
                                            <li><a href="#">Basic Registration</a></li>
                                            <li><a href="#">Find A Home</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-6 footer-column">
                                <div class="footer-widget newsletter-widget">
                                    <div class="widget-title">
                                        <h4>Support</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list clearfix">
                                            <li><a href="#">Email Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <!-- <h4>Explore</h4> -->
                                    </div>
                                    <div class="widget-content">
                                        <ul class="social-links clearfix">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row footer-top">
                        </div>
                    </div>
                <!-- </div> -->
        </footer>
        <!-- main-footer end -->
    </div>


    <!-- jequery plugins -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/validation.js"></script>
    <script src="/assets/js/jquery.fancybox.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/scrollbar.js"></script>
    <script src="/assets/js/parallax-scroll.js"></script>
    <script src="/assets/js/isotope.js"></script>

    <!-- main-js -->
    <script src="/assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->


</html>
