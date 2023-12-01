<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Adrios</title>

    <!-- Fav Icon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;800&family=Sora:wght@100;200&display=swap"
        rel="stylesheet">

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
            <div class="header-lower">
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
                                        <img src="/assets/img/logo-white.svg" alt="">
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <a href="{{route('contactUs.view')}}">
                            <p style="color: white; font-family: Sora; word-wrap: break-word ;margin-right: 20px;">
                                Contact Us</p>
                        </a>

                        <a href="">
                            <p style="color: white; font-family: Sora; word-wrap: break-word">Help & Support</p>
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
        </div>


        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">

                <!-- chooseus-section -->
                <section class="chooseus-section">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                                <h2
                                    style="color: #03052F; font-size: 40px; font-family: Outfit; font-weight: 700; word-wrap: break-word">
                                    Account
                                    Security</h2>
                                <p
                                    style="width: 100%; color: #03052F; font-size: 15px; font-family: Outfit; font-weight: 400; word-wrap: break-word">
                                    Let’s help your protect your account</p>
                                <div class="content-inner">
                                    <div class="image-box">
                                        <div class="row clearfix">
                                            <div class="form-inner">
                                                <form method="post"
                                                    action="https://azim.commonsupport.com/Amping/sendemail.php"
                                                    id="contact-form" class="default-form">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="text" name="username" placeholder="Password"
                                                                required="">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                            <input type="email" name="email" placeholder="Re-enter Password"
                                                                required="">
                                                        </div>
                                                        <div style="margin-top:45px;"
                                                            class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 centered-button">
                                                               <button
                                                                    style="width: 50%; height: 100%; padding-left: 16px; padding-right: 16px; padding-top: 10px; padding-bottom: 10px; background: #0A0B1A; border-radius: 4px; border: 1px #F1F1F4 solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex"
                                                                    type="submit">
                                                                    <p style="color: white; font-size: 18px; font-family: Outfit; font-weight: 500; word-wrap: break-word">Procced
                                                                    </p>
                                                                </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- chooseus-section end -->


            </div>
            <div style="background: url('/assets/img/accountSecurity_img.png');background-size: cover; background-repeat: no-repeat; height: 570px;" class="col-lg-4 col-md-12 col-sm-12">
            </div>
        </div>
    </div>

    </div>
    </section>
    <!-- testimonial-section end -->

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