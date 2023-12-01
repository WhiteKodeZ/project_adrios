@extends('layouts.guest')

@section('content')

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(/assets/img/header_bg.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1 style="right: 70p;">More than enough for you</h1>
                    </div>
                </div>
            </div>
        </section><br><br>
        <!-- End Page Title -->


        <!-- activities-section -->
        <section class="activities-section sec-pad">
            <div class="auto-container">
                <div class="upper-box centred">
                    <div class="sec-title">
                        <div
                            style="width: 100%; color: #03052F; font-size: 40px; font-family: Outfit; font-weight: 600; word-wrap: break-word">
                            Choose a plan that’s best fit for you</div><br>
                        <div
                            style="color: #03052F; font-size: 28px; font-family: Outfit; font-weight: 400; word-wrap: break-word">
                            Migration Concierge Service</div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                            <div>
                                <div class="inner-box">
                                    <div class="image-box"><a href="climbing.html"><img
                                                src="/assets/img/Basic Plan 1.png" alt=""></a></div>
                                </div>
                            </div><br>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                            <div>
                                <div class="inner-box">
                                    <div class="image-box"><a href="adventure.html"><img
                                                src="/assets/img/Basin plan 2.png" alt=""></a></div>
                                </div>
                            </div><br>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                            <div>
                                <div class="inner-box">
                                    <div class="image-box"><a href="camping.html"><img
                                                src="/assets/img/Basic plan 3.png" alt=""></a></div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div><br>

                <div class="row 2">
                    <div class="col-lg-4 col-md-6">
                        <div>
                            <div class="inner-box">
                                <div class="image-box"><a href="camping.html"><img
                                            src="/assets/img/Premium.png" alt=""></a></div>
                            </div>
                        </div><br>
                    </div>


                    <div class="col-lg-4 col-md-6" style="left: 2px;">
                        <div>
                            <div class="inner-box">
                                <div class="image-box"><a href="camping.html"><img
                                            src="/assets/img/Conciege Service.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- activities-section end -->


@endsection
