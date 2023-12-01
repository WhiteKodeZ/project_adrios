@extends('layouts.guest')

@section('content')

        <!-- Page Title -->
        <section class="page-title centred">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h2 style="width: 100%; color: #03052F;  font-weight: 500; word-wrap: break-word">
                            Frequently Asked Questions (FAQs)</h2>
                    </div><br>
                    <div
                        style="width: 100%; text-align: center; color: #03052F; font-size: 24px; font-family: Outfit; font-weight: 300; line-height: 33.60px; word-wrap: break-word">
                        We’ve put together some questions and answers that answers all of your concerns</div>
                </div>
            </div><br><br><br>

            <div
                style="width: 100%; color: #03052F; font-size: 28px; font-family: Outfit; font-weight: 400; line-height: 39.20px; word-wrap: break-word">
                What is Adrois' Settlement Agency Arm?</div><br>


            <center class="align-content-lg-center">
                <div class="container">
                    <h5 style="color: #03052F;">Adrois' Settlement Agency Arm is a division of Adrois Company, dedicated
                        to assisting users in their
                        relocation to our catchment areas. We provide comprehensive services to make the transition as
                        smooth as possible.</h5>
                </div>
            </center><br><br>



            <div class="accordion-container">
                <ul class="accordion">
                    <hr>
                    <li class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">Why should I choose Adrois for my relocation?  &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 1.</p>
                        </div>
                        <hr>
                    </li><br>
                    <li class="accordion-item">
                        <hr>
                        <div class="accordion-header" onclick="toggleAccordion(this)">Who can use your services?   &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 2.</p>
                        </div>
                        <hr>
                    </li><br>

                    <li class="accordion-item">
                        <hr>
                        <div class="accordion-header" onclick="toggleAccordion(this)">What specific services do you offer?   &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 3.</p>
                        </div>
                        <hr>
                    </li><br>
                    <li class="accordion-item">
                        <hr>
                        <div class="accordion-header" onclick="toggleAccordion(this)">Can you help with my children's education when I relocate?   &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 3.</p>
                        </div>
                        <hr>
                    </li><br>
                    <li class="accordion-item">
                        <hr>
                        <div class="accordion-header" onclick="toggleAccordion(this)">What is the process for getting started with your services?   &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 3.</p>
                        </div>
                        <hr>
                    </li><br>
                    <li class="accordion-item">
                        <hr>
                        <div class="accordion-header" onclick="toggleAccordion(this)">Can my parents be my guarantor?   &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 3.</p>
                        </div>
                        <hr>
                    </li><br>
                    <li class="accordion-item">
                        <hr>
                        <div class="accordion-header" onclick="toggleAccordion(this)">What are your service fees?   &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 3.</p>
                        </div>
                        <hr>
                    </li><br>
                    <li class="accordion-item">
                        <hr>
                        <div class="accordion-header" onclick="toggleAccordion(this)">How can I get in touch with Adrois' Settlement Agency Arm?   &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 3.</p>
                        </div>
                        <hr>
                    </li><br>
                    <li class="accordion-item">
                        <hr>
                        <div class="accordion-header" onclick="toggleAccordion(this)">Is the Pick Up Service available for families with children?   &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 3.</p>
                        </div>
                        <hr>
                    </li><br>
                    <li class="accordion-item">
                        <hr>
                        <div class="accordion-header" onclick="toggleAccordion(this)">What if my flight is delayed?   &nbsp; &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="accordion-content">
                            <p>Lorem Ipsum content for Section 3.</p>
                        </div>
                        <hr>
                    </li><br>
                </ul>
            </div>

            <script>
                function toggleAccordion(element) {
                    var accordionItem = element.parentNode;
                    accordionItem.classList.toggle('active');
                }
            </script>

        </section>
        <!-- End Page Title -->

@endsection
