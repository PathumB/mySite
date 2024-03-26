@extends('layouts.base')
@section('title', $title)
@section('meta-title', $title)
@section('meta-description', $metaDescription)
@section('meta-keywords', $metaKeywords)
@section('content')
<section class="main-slider style1">
    <div class="slider-shape1" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="3500">
        <img class="zoom-fade" src="{{ asset('images/slider-shape-1.png') }}" alt="slider shape">
    </div>
    <div class="slider-contact-info">
        <div class="contact-item">
            <div class="icon">
                <img src="{{ asset('images/chat.png') }}" alt="Call Us">
            </div>
            <div class="title">
                <h5>Call Us!</h5>
                <h3><a href="tel:+0000000">000 000 000</a></h3>
            </div>
        </div>
        <div class="contact-item mt-5">
            <div class="icon">
                <img src="{{ asset('images/whatsapp.png') }}" alt="Chat on WhatsApp">

            </div>
            <div class="title">
                <h5>WhatsApp Us!</h5>
                <h3><a href="https://wa.me/000000000" target="_blank">000 000 000</a></h3>
            </div>
        </div>
    </div>
    <div class="slider-box">
        <div class="banner-carousel owl-theme owl-carousel">
            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('images/slide-v1-1.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content text-center">
                        <div class="big-title">
                            <h2>PhyxleLoom Welcomes <br/>you to the future of Web Development!</h2>
                        </div>
                        <div class="btns-box center">
                            <a class="btn-one" href="services.html">
                                 <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></div>
                                <span class="txt">Explore More<i class="flaticon-plus-1 plusicon"></i></span>
                            </a>
                            <a class="btn-one style2 marlft15" href="contact.html">
                                <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></div>
                                <span class="txt">Contact Us<i class="flaticon-plus-1 plusicon"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('images/slide-v1-2.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content text-center">
                        <div class="big-title">
                            <h2>Experience innovation and <br/>functionality with us.</h2>
                        </div>
                        <div class="btns-box center">
                            <a class="btn-one" href="services.html">
                                <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></div>
                                <span class="txt">Explore More<i class="flaticon-plus-1 plusicon"></i></span>
                            </a>
                            <a class="btn-one style2 marlft15" href="contact.html">
                                <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></div>
                                <span class="txt">Contact Us<i class="flaticon-plus-1 plusicon"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="image-layer" style="background-image:url({{ asset('images/slide-v1-3.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content text-center">
                        <div class="big-title">
                            <h2>Join us in creating a unique <br/>online identity for your brand</h2>
                        </div>
                        <div class="btns-box center">
                            <a class="btn-one" href="services.html">
                                <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></div>
                                <span class="txt">Explore More<i class="flaticon-plus-1 plusicon"></i></span>
                            </a>
                            <a class="btn-one style2 marlft15" href="contact.html">
                                <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></div>
                                <span class="txt">Contact Us<i class="flaticon-plus-1 plusicon"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="partner-area">
    <div class="container">
        <div class="partner-title text-center">
            <h2>Your Gateway to <span>Digital</span> Excellence!<br>Let's build extraordinary web solutions together.</h2>
            <div class="thm-logo paroller-2">
                <img src="{{ asset('images/thm-logo-1.png') }}" alt="logo">
            </div>
        </div>
    </div>
</section>
<section class="service-style1-area">
    <div class="service-style1-area_bg" style="background-image: url({{ asset('images/service-style1-area_bg.jpg') }});"></div>
    <div class="shape1 wow slideInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
        <img class="zoom-fade" src="{{ asset('images/thm-shape-2.png') }}" alt="image">
    </div>
    <div class="shape2 wow slideInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
        <img class="zoom-fade" src="{{ asset('images/thm-shape-3.png') }}" alt="image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-service-style1">
                    <div class="icon">
                        <img src="{{ asset('images/service-v1-1.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="#">Web Design and <br/>Development</a></h3>
                        <div class="inner-text">
                            <p>Crafting seamless online experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-service-style1">
                    <div class="icon">
                        <img src="{{ asset('images/service-v1-2.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="#">Mobile Application <br/>Design and Development</a></h3>
                        <div class="inner-text">
                            <p>Creating sleek, user-friendly apps.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-service-style1">
                    <div class="icon">
                        <img src="{{ asset('images/service-v1-3.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="#">SEO and Content <br/>Writing</a></h3>
                        <div class="inner-text">
                            <p>Achieving search success through optimized content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-service-style1">
                    <div class="icon">
                        <img src="{{ asset('images/service-v1-4.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="#">Graphic Design</a></h3>
                        <div class="inner-text">
                            <p>Communicating visually with creative solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-service-style1">
                    <div class="icon">
                        <img src="{{ asset('images/service-v1-5.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="#">Digital Marketing</a></h3>
                        <div class="inner-text">
                            <p>Boosting online presence with strategic promotion.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-service-style1">
                    <div class="icon">
                        <img src="{{ asset('images/service-v1-6.png') }}" alt="services image">
                    </div>
                    <div class="title">
                        <h3><a href="#">UI/ UX Design</a></h3>
                        <div class="inner-text">
                            <p>Elevating user experiences with intuitive design.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-style1-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h3>About us</h3>
            </div>
            <h2>Empowering Businesses Digitally</h2>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="about-style1_image-box clearfix">
                    <div class="shape">
                        <img class="zoom-fade" src="{{ asset('images/thm-shape-1.png') }}" alt="image">
                    </div>
                    <div class="inner-caption"><h3>A Mission Unveiled</h3></div>
                    <div class="image-box left">
                        <div class="single-box image-box1">
                            <div class="inner">
                                <img src="{{ asset('images/about-style1-image-1.jpg') }}" alt="image">
                            </div>
                        </div>
                        <a class="video-popup xoven-video-galler-1" title="Xoven Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
                            <span class="flaticon-play-button-2 playicon"></span>
                        </a>
                    </div>
                    <div class="image-box right">
                        <div class="single-box image-box2">
                            <div class="inner">
                                <img src="{{ asset('images/about-style1-image-2.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="single-box image-box3">
                            <div class="inner">
                                <img src="{{ asset('images/about-style1-image-3.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-style1_content-box">
                    <h2>At PhyxleLoom, we blend technical expertise with creative flair!</h2>
                    <h3>“PhyxleLoom's mission is clear to empower businesses through exceptional web solutions.”</h3>
                    <div class="text">
                        <p>We strive to create websites that not only showcase your brand effectively but also provide a seamless and engaging user experience. Your success is the measure of our success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="portfolio-style1_box1">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h3>Dive into Our Portfolio</h3>
                        </div>
                        <h3>Explore a diverse range of projects that showcase PhyxleLoom's versatility and proficiency.</h3>
                    </div>
                    <div class="single-portfolio-style1">
                        <div class="img-holder">
                            <img src="{{ asset('images/disonsconstruction_project_sub1.png') }}" alt="portfolio image">
                            <div class="overlay-icon">
                                <a href="portfolio-details1.html"><span class="flaticon-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-portfolio-style1">
                                <div class="img-holder">
                                    <img src="{{ asset('images/dragonsof_project.png') }}" alt="portfolio image">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details2.html"><span class="flaticon-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="single-portfolio-style1">
                                <div class="img-holder">
                                    <img src="{{ asset('images/hcm_project.png') }}" alt="portfolio image">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details4.html"><span class="flaticon-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="single-portfolio-style1">
                    <div class="img-holder">
                        <img src="{{ asset('images/econsulate-square-img.png') }}" alt="econsulate portfolio image">
                        <div class="overlay-icon">
                            <a href="portfolio-details3.html"><span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <div class="single-portfolio-style1">
                    <div class="img-holder">
                        <img src="{{ asset('images/tropi-square-img.png') }}" alt="tropi portfolio image">
                        <div class="overlay-icon">
                            <a href="portfolio-details6.html"><span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btns-box text-center">
            <a class="btn-one" href="portfolio.html">
                <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></div>
                <div class="left_round"></div>
                <div class="right_round"></div>
                <span class="txt">View More +<i class="flaticon-plus-1 plusicon"></i></span>
            </a>
        </div>
    </div>
</section>
<section class="video-gallery-area">
    <div class="video-gallery-area_bg" style="background-image: url({{ asset('images/video-gallery-area-bg.jpg') }});"></div>
    <div class="shape1">
        <img class="zoom-fade" src="{{ asset('images/thm-shape-1.png') }}" alt="gallery">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="xoven-video-gallery-2 text-center">
                    <div class="big-title paroller">
                        <h2>Experience our Development <span>Journey!</span></h2>
                    </div>
                    <p class="paroller">Embark on a journey through our diverse projects, showcasing innovation, creativity, and excellence <br/>in every endeavor we undertake.</p>
                    <div class="icon wow zoomIn paroller" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <a class="video-popup" title="Xoven Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
                            <span class="flaticon-play-button-2"></span>
                        </a>
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
                                                    <div class="bar-fill" data-percent="50" title="Book"></div>
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
                                                    <div class="bar-fill" data-percent="50" title="Book"></div>
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
<section class="fact-counter-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="fact-counter_box">
                    <ul class="clearfix">
                        <li class="single-fact-counter wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="border-box"></div>
                            <div class="outer-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="56">0</span>
                                </div>
                                <div class="title">
                                    <h6>Projects Completed</h6>
                                </div>
                            </div>
                        </li>
                        <li class="single-fact-counter wow slideInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="border-box"></div>
                            <div class="outer-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="325">0</span>
                                </div>
                                <div class="title">
                                    <h6>Hours Coded</h6>
                                </div>
                            </div>
                        </li>
                        <li class="single-fact-counter wow slideInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="border-box"></div>
                            <div class="outer-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="49">0</span>
                                </div>
                                <div class="title">
                                    <h6>Happy Clients</h6>
                                </div>
                            </div>
                        </li>
                        <li class="single-fact-counter wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="border-box"></div>
                            <div class="outer-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="452">0</span>
                                </div>
                                <div class="title">
                                    <h6>Cup of Tea</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Area -->
<x-testimonials/>
<!-- Testimonial Area -->

<section class="home-google-map-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="home-page-map-outer">
                    <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="assets/{{ asset('images/resources/map-marker.png') }}" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                    <div class="map-form-box">
                        <div class="shape1 wow slideInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <img class="float-bob" src="{{ asset('images/map-form-box-shape-1.png') }}" alt="image">
                        </div>
                        <div class="shape2 wow slideInLeft" data-wow-delay="400ms" data-wow-duration="2500ms">
                            <img src="{{ asset('images/map-form-box-shape-2.png') }}" alt="image">
                        </div>
                        <div class="shape3 wow slideInRight" data-wow-delay="400ms" data-wow-duration="3500ms">
                            <img src="{{ asset('images/map-form-box-shape-3.png') }}" alt="image">
                        </div>
                        <div class="inner-title text-center">
                            <h2>Request a Quote</h2>
                        </div>
                        <form id="contact-form" name="contact_form" class="default-form2" action="assets/inc/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="email" name="form_email" value="" placeholder="Email" required="">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <input type="text" name="form_phone" value="" placeholder="Your Phone" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <textarea name="form_message" placeholder="message" required=""></textarea>
                                    </div>
                                    <div class="button-box text-center">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                            <span class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></span>
                                            <span class="left_round"></span>
                                            <span class="right_round"></span>
                                            <span class="txt">Request Now<i class="flaticon-plus-1 plusicon"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
