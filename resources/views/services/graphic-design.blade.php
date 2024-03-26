@extends('layouts.base')
@section('title', $title)
@section('meta-title', $title)
@section('meta-description', $metaDescription)
@section('meta-keywords', $metaKeywords)
@section('content')
<section class="breadcrumb-area breadcrumb-area-style2">
    <div class="breadcrumb-area-bg" style="background-image: url({{ asset('images/breadcrumb-2.jpg') }});"></div>
    <div class="breadcrumb-social-link">
        <ul class="clearfix">
            <li class="wow slideInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li class="wow slideInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li class="wow slideInUp" data-wow-delay="900ms" data-wow-duration="1000ms">
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li class="wow slideInUp" data-wow-delay="1100ms" data-wow-duration="2100ms">
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content paroller text-center">
                    <div class="title">
                        <h2>Graphic Design</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="index.html">Back To Home<span class="flaticon-plus"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="service-deails-box">
                    <div class="shape1"><img src="{{ asset('images/thm-shape-5.png') }}" alt=""></div>
                    <div class="bg-shape"></div>
                    <div class="service-details-content-box">
                        <div class="icon">
                            <img src="{{ asset('images/service-v2-4.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Transforming Concepts into Captivating Visuals</h3>
                            <div class="inner-text">
                                <p>Our graphic design services breathe life into ideas, creating captivating visuals that resonate with your audience. From logos to marketing materials, we blend creativity with strategy to craft compelling designs that convey your brand's message with impact and style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-details-image-box">
                        <img src="{{ asset('images/service-details-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="service-deails-bottom-box">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="single-support-box">
                        <div class="inner-box">
                            <div class="icon">
                                <span class="flaticon-chat"></span>
                            </div>
                            <div class="title contact-options">
                                <h2 onclick="window.location.href='contact.html';">Quick Inquiry</h2>
                                <p>Send an inquiry for us by simple steps.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="single-support-box martop30">
                        <div class="inner-box">
                            <div class="icon">
                                <span class="flaticon-headphones"></span>
                            </div>
                            <div class="title contact-options">
                                <h2 onclick="window.location.href = 'tel:00000000';">Contact Us</h2>
                                <p>Don't hesitate to call us, we're 24/7 online.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="skill-style1-area">
    <div class="custom-container">
        <div class="row">

            <div class="col-xl-6">
                <div class="skill-style1_image-box-outer">
                    <div class="skill-style1_image-box" style="background-image: url({{ asset('images/skill-style1_image.jpg') }});"></div>
                    <div class="title">
                        <h4>Our Story</h4>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="skill-style1_content-box">
                    <h1>PhyxleLoom began its journey with a simple yet powerful vision to redefine the landscape of web development.</h1>
                    <p>Since our inception, we've evolved into a dynamic team of passionate professionals, each contributing their unique skills and expertise to the PhyxleLoom story.</p>
                    <div class="skill-progress-box">
                        <div class="row">

                            <div class="col-xl-6 col-lg-6">
                                <div class="progress-levels">
                                    <div class="progress-box wow">
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-innner">
                                                    <div class="bar-fill" data-percent="80" title="Book"></div>
                                                </div>
                                            </div>
                                            <div class="skill-percent">
                                                <div class="title">
                                                    <h6>Corporate Business </h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="progress-levels style2">
                                    <div class="progress-box wow">
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-innner">
                                                    <div class="bar-fill" data-percent="70" title="Book"></div>
                                                </div>
                                            </div>
                                            <div class="skill-percent">
                                                <div class="title">
                                                    <h6>Other</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- client logos -->
<x-client-logos/>
<!-- client logos -->

<!-- Testimonial Area -->
<x-testimonials/>
<!-- Testimonial Area -->
@endsection
