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
                <div class="inner-content text-center">
                    <div class="title paroller">
                        <h2>Our Services</h2>
                    </div>
                    <div class="breadcrumb-menu paroller">
                        <ul>
                            <li><a href="index.html">Back To Home<span class="flaticon-plus"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-style3-area pdtop0">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h3>Our Services</h3>
            </div>
            <h2>Crafting exceptional websites for memorable online <br/>presence and functionality.</h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-service-style3 text-center">
                    <div class="icon">
                        <img src="{{ asset('images/service-v2-1.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="{{ route('ourServices.webDesign') }}">Web Design <br/> and Development</a></h3>
                        <div class="border-box"></div>
                        <div class="inner-text">
                            <p>Elevate online presence with stunning, user-friendly websites.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-service-style3 text-center">
                    <div class="icon">
                        <img src="{{ asset('images/service-v2-2.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="{{ route('ourServices.mobileAppDevelopment') }}">Mobile Application <br/>Design and Development</a></h3>
                        <div class="border-box"></div>
                        <div class="inner-text">
                            <p>Enter the mobile era with intuitive, engaging app experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-service-style3 text-center">
                    <div class="icon">
                        <img src="{{ asset('images/service-v2-3.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="{{ route('ourServices.uiUxDesign') }}">UI/UX Design</a></h3>
                        <div class="border-box"></div>
                        <div class="inner-text">
                            <p>Elevate your brand with seamless UI/UX design, combining aesthetics and functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="single-service-style3 text-center">
                    <div class="icon">
                        <img src="{{ asset('images/service-v2-4.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="{{ route('ourServices.graphicDesign') }}">Graphic Design</a></h3>
                        <div class="border-box"></div>
                        <div class="inner-text">
                            <p>Create visually compelling graphic designs tailored to your brand identity and audience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="working-process-area">
    <div class="auto-container">
        <div class="working-process-bg" style="background-image: url({{ asset('images/working-process-bg.jpg') }});"></div>
        <div class="row">
            <div class="col-xl-12">
                <div class="working-process-inner">
                    <div class="shape1 wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <img class="zoom-fade" src="{{ asset('images/working-process-shape-1.png') }}" alt="image">
                    </div>
                    <div class="shape2 wow slideInRight" data-wow-delay="400ms" data-wow-duration="3500ms">
                        <img class="float-bob" src="{{ asset('images/working-process-shape-2.png') }}" alt="image">
                    </div>

                    <div class="title">
                        <h2>Save Your Time &amp; See How It<br>works any platform.</h2>
                    </div>
                    <ul>
                        <li class="single-working-process text-center wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <div class="shape-bg" style="background-image: url({{ asset('images/working-process-count-shape1.png') }});"></div>
                            </div>
                            <p>Select</p>
                            <h2>Country</h2>
                        </li>
                        <li class="single-working-process text-center wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <div class="shape-bg" style="background-image: url({{ asset('images/working-process-count-shape2.png') }});"></div>
                            </div>
                            <p>Choose</p>
                            <h2>Service</h2>
                        </li>
                        <li class="single-working-process text-center wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <div class="shape-bg" style="background-image: url({{ asset('images/working-process-count-shape3.png') }});"></div>
                            </div>
                            <p>Input</p>
                            <h2>Information</h2>
                        </li>
                        <li class="single-working-process text-center wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <div class="shape-bg" style="background-image: url({{ asset('images/working-process-count-shape4.png') }});"></div>
                            </div>
                            <p>Confirm</p>
                            <h2>And Send</h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="skill-style1-area pdtop120">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="skill-style2_image-box-outer">
                    <div class="skill-style1_image-box skill-style2_image-box" style="background-image: url({{ asset('images/skill-style1_image-2.jpg') }});"></div>
                    <div class="title">
                        <h4>Our Story</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="skill-style1_content-box skill-style2_content-box">
                    <h2>You can check<br> our projects as<br> inspirations.</h2>
                    <p>Donec scelerisque dolor id nunc dictum, interdum gravida mauris rhoncus. Aliquam at ultrices nunc. In sem leo, fermentum at lorem in, porta finibus mauris Aliquam consectetur.</p>
                    <div class="skill-progress-box">
                        <div class="row">
                            <div class="col-xl-6">
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
                                                    <h6>Consulting Service </h6>
                                                </div>
                                                <div class="counting">
                                                    <span>/</span> <span class="count-text" data-speed="3000" data-stop="80">0</span>
                                                    <span class="percent">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
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
                                                    <h6>Finance Consulting</h6>
                                                </div>
                                                <div class="counting">
                                                    <span>/</span> <span class="count-text" data-speed="3000" data-stop="70">0</span>
                                                    <span class="percent">%</span>
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

<section class="testimonial-style1-area">
    <div class="container">
        <div class="testimonial-style1_title">
            <h2>What Our Clint <span>Saying?</span></h2>
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
                                        <img src="{{ asset('images/testimonial-v1-1.jpg') }}" alt="testimonial image">
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
                                        <img src="{{ asset('images/testimonial-v1-1.jpg') }}" alt="client information image">
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
                                        <img src="{{ asset('images/testimonial-v1-1.jpg') }}" alt="testimonial image">
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
