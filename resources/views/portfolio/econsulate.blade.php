@extends('layouts.base')
@section('title', $title)
@section('meta-title', $title)
@section('meta-description', $metaDescription)
@section('meta-keywords', $metaKeywords)
@section('content')
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url({{ asset('images/breadcrumb-1.jpg') }});"></div>
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
                        <h2>Portfolio Details</h2>
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
<section class="portfolio-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="portfolio-details_content">

                    <div class="portfolio-details_image-box clearfix">
                        <div class="portfolio-main-image-box">
                            <ul class="bxslider">
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset('images/econsulate_project.png') }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset('images/econsulate_project_sub1.png') }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset('images/econsulate_project_sub2.png') }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="slider-pager portfolio-subimg">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <div class="thumb-image">
                                            <img src="{{ asset('images/econsulate_project.png') }}" alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <div class="thumb-image">
                                            <img src="{{ asset('images/econsulate_project_sub1.png') }}" alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <div class="thumb-image">
                                            <img width="250px" src="{{ asset('images/econsulate_project_sub2.png') }}" alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-details-text-box">
                        <div class="top-title">
                            <h5>Software Solutions</h5>
                            <h2>Econsulate Pvt Ltd</h2>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="portfolio-details-text one">
                                    <p>Econsulate is an organization born out of deep passion and innovation. We are working toward becoming a disruptive force in the information and technology sector and extending our services to international clients. Our team takes pride in providing software solutions focused on improving the end-user experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-style1-area">
    <div class="container">
        <div class="testimonial-style1_title">
            <h2>What Our Client <span>Saying?</span></h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-style1-content">
                    <div class="testimonial-style1-carousel owl-carousel owl-theme">
                        <div class="single-testimonial-style1">
                            <div class="quote-box">
                                <div class="quote-border" style="background-image: url({{ asset('images/quote-border.png') }});"></div>
                                <span class="flaticon-right-quote"></span>
                            </div>
                            <div class="text-holder">
                                <div class="text">
                                    <h3>Donec ac quam non elit hendrerit placerat. Pellentesque a est id diam lacinia convallis. Etiam non quam sit amet odio pharetra lacinia. Donec purus enim, ornare ac imperdiet hendrerit placerat. Pellentesque a est.</h3>
                                </div>
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="{{ asset('images/testimonial-v1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="inner-title">
                                        <h4>Salena Smith</h4>
                                        <h6>Web Developper</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-style1">
                            <div class="quote-box">
                                <div class="quote-border" style="background-image: url({{ asset('images/quote-border.png') }});"></div>
                                <span class="flaticon-right-quote"></span>
                            </div>
                            <div class="text-holder">
                                <div class="text">
                                    <h3>Donec ac quam non elit hendrerit placerat. Pellentesque a est id diam lacinia convallis. Etiam non quam sit amet odio pharetra lacinia. Donec purus enim, ornare ac imperdiet hendrerit placerat. Pellentesque a est.</h3>
                                </div>
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="{{ asset('images/testimonial-v1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="inner-title">
                                        <h4>Salena Smith</h4>
                                        <h6>Web Developper</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-style1">
                            <div class="quote-box">
                                <div class="quote-border" style="background-image: url({{ asset('images/quote-border.png') }});"></div>
                                <span class="fa fa-quote-right"></span>
                            </div>
                            <div class="text-holder">
                                <div class="text">
                                    <h3>Donec ac quam non elit hendrerit placerat. Pellentesque a est id diam lacinia convallis. Etiam non quam sit amet odio pharetra lacinia. Donec purus enim, ornare ac imperdiet hendrerit placerat. Pellentesque a est.</h3>
                                </div>
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="{{ asset('images/testimonial-v1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="inner-title">
                                        <h4>Salena Smith</h4>
                                        <h6>Web Developper</h6>
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
@endsection
