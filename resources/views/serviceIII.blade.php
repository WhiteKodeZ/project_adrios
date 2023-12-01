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


        <div class="container">

            <div
                style="left: 200px; width: 40%; height: 40%; padding: 4px; background: #F4F4F4; border-radius: 5px; overflow: hidden; justify-content: center; gap: 3px; display: inline-flex">
                <div
                    style="flex: 1 1 0; align-self: stretch; padding: 3px; background: #326273; border-radius: 5px; justify-content: center; align-items: center; gap: 3px; display: inline-flex">
                    <div style="color: #F4F4F4; font-size: 14px; font-family: Outfit; word-wrap: break-word">Pickup
                    </div>
                </div>
                <div
                    style="flex: 1 1 0; align-self: stretch; padding: 3px; background: #F4F4F4; border-radius: 5px; justify-content: center; align-items: center; gap: 3px; display: inline-flex">
                    <div
                        style="color: #03052F; font-size: 14px; font-family: Outfit; font-weight: 500; word-wrap: break-word">
                        House Finding</div>
                </div>
                <div
                    style="flex: 1 1 0; align-self: stretch; padding: 3px; background: #F4F4F4; border-radius: 5px; justify-content: center; align-items: center; gap: 3px; display: inline-flex">
                    <div
                        style="color: #03052F; font-size: 14px; font-family: Outfit; font-weight: 500; word-wrap: break-word">
                        Basic Registration</div>
                </div>
            </div><br><br>

            <div
                style="color: #03052F; font-size: 30px; font-family: Outfit; font-weight: 500; letter-spacing: 13.40px; word-wrap: break-word">
                PICK UP</div><br><br>


            <div
                style="width: 100%; color: #03052F; font-size: 24px; font-family: Outfit; font-weight: 300; line-height: 33.60px; word-wrap: break-word">
                <h5 style="color: #03052F;">At Adrois' Settlement Agency Arm, we understand that your journey to
                    catchment areas begins the moment you arrive. To ensure your transition is as smooth as possible, we
                    offer a convenient and reliable Pick Up Service designed to welcome you warmly and transport you to
                    your destination through our app.
                </h5>
            </div><br><br>

            <div
                style="width: 12%; height: 10%; padding: 10px; background: #F5F5F6; border-radius: 100px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                <div
                    style="color: #1C1E44; font-size: 18px; font-family: Sora; font-weight: 700; word-wrap: break-word">
                    View Plans</div>
            </div><br><br>
        </div>
    </div>

    <div class="auto-container">
        <div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-12 feature-block">
                    <div class="inner-box">
                        <img src="/assets/img/airplane.svg" class="img-fluid" alt=""><br><br>
                        <h3 style="color: #03052F;">Airport Arrival Assitance</h3>
                        <p style="color: #03052F;">Our driver will be there to greet you upon your arrival at the
                            airport. We understand that the first moments in a new country can be overwhelming, so we
                            aim to provide a reassuring presence.</p>
                    </div>

                </div><br>

                <div class="col-lg-4 col-md-4 col-sm-12 feature-block">

                    <div class="inner-box">
                        <img src="/assets/img/car-sport.svg" class="img-fluid" alt=""><br><br>
                        <h3 style="color: #03052F;">Comfortable Transportation</h3>
                        <p style="color: #03052F;">We provide comfortable and well-maintained vehicles to transport you
                            and your belongings from the airport to your chosen destination, whether it's your temporary
                            accommodation or new home.
                        </p>
                    </div>

                </div><br>

                <div class="col-lg-4 col-md-4 col-sm-12 feature-block">
                    <div class="inner-box">
                        <img src="/assets/img/car-sport.svg" class="img-fluid" alt=""><br><br>
                        <h4 style="color: #03052F;">Luggage Handling</h4>
                        <p style="color: #03052F;">Our professional staff will assist with handling your luggage,
                            ensuring it's safely loaded and unloaded from the vehicle.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div><br><br>



    <div class="auto-container">
        <div>
            <div class="row 2">
                <div class="col-lg-4 col-md-4 col-sm-12 feature-block">
                    <div class="inner-box">
                        <img src="/assets/img/icon-park-solid_local-pin.svg" class="img-fluid" alt=""><br><br>
                        <h3 style="color: #03052F;">Local Orientation</h3>
                        <p style="color: #03052F;">During your ride, we'll provide you with some initial insights into
                            the local area, helping you become familiar with your surroundings.</p>
                    </div><br>

                </div><br>

                <div class="col-lg-4 col-md-4 col-sm-12 feature-block">

                    <div class="inner-box">
                        <img src="/assets/img/fa_road.svg" class="img-fluid" alt=""><br><br>
                        <h3 style="color: #03052F;">Customized Destination</h3>
                        <p style="color: #03052F;">You can choose the destination for your pick-up, whether it's your
                            temporary accommodation, a hotel, or your new home. We'll ensure a seamless journey to your
                            chosen location.
                        </p>
                    </div>

                </div><br>
                <div class="col-lg-4 col-md-4 col-sm-12 feature-block">
                    <div class="inner-box">
                        <img src="/assets/img/material-symbols_app-promo.svg" class="img-fluid" alt=""><br><br>
                        <h4 style="color: #03052F;">Booking Process</h4>
                        <p style="color: #03052F;">To arrange our Pick Up Service, simply download the app.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

@endsection
