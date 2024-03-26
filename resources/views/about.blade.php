@extends('layouts.base')
@section('title', $title)
@section('meta-title', $title)
@section('meta-description', $metaDescription)
@section('meta-keywords', $metaKeywords)
@section('content')
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url({{ asset('images/breadcrumb-about-pg.jpg') }});"></div>
    <div class="breadcrumb-social-link">
        <ul class="clearfix">
            <li class="wow slideInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li class="wow slideInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li class="wow slideInUp" data-wow-delay="900ms" data-wow-duration="1000ms">
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li class="wow slideInUp" data-wow-delay="1100ms" data-wow-duration="2100ms">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content text-center">
                    <div class="title">
                       <h2>Who we are</h2>
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
<section class="about-style1-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h3>Who We Are</h3>
            </div>
            <h2>We're here to translate your <br/>visions into pixels.</h2>
        </div>
        <div class="row">

            <div class="col-xl-6">
                <div class="about-style1_image-box clearfix">
                    <div class="shape">
                        <img class="zoom-fade" src="{{ asset('images/thm-shape-1.png') }}" alt="v">
                    </div>
                    <div class="inner-caption"><h3>client satisfaction</h3></div>
                    <div class="image-box left">
                        <div class="single-box image-box1">
                            <div class="inner">
                                <img src="{{ asset('images/about-style3-image-1.jpg') }}" alt="image">
                            </div>
                        </div>
                        <a class="video-popup xoven-video-galler-1" title="Xoven Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
                            <span class="flaticon-play-button-2 playicon"></span>
                        </a>
                    </div>
                    <div class="image-box right">
                        <div class="single-box image-box2">
                            <div class="inner">
                                <img src="{{ asset('images/about-style3-image-2.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="single-box image-box3">
                            <div class="inner">
                                <img src="{{ asset('images/about-style3-image-3.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-style1_content-box">
                    <h2>What Sets Us Apart!</h2>
                    <h3>“Expertise and Creativity”</h3>
                    <div class="text">
                        <p>At PhyxleLoom, we blend technical expertise with creative flair. Our team comprises seasoned developers and designers who collaborate seamlessly to deliver websites that not only meet but exceed expectations.</p>
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
                        <h3><a href="services-details1.html">Web Design <br/> and Development</a></h3>
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
                        <h3><a href="services-details2.html">Mobile Application <br/>Design and Development</a></h3>
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
                        <h3><a href="services-details3.html">UI/UX Design</a></h3>
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
                        <h3><a href="services-details4.html">Graphic Design</a></h3>
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
<section class="video-gallery-area">
    <div class="video-gallery-area_bg" style="background-image: url({{ asset('images/video-gallery-area-bg.jpg') }});"></div>
    <div class="shape1">
        <img class="zoom-fade" src="{{ asset('images/thm-shape-1.png') }}" alt="gallery image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="xoven-video-gallery-2 text-center">
                    <div class="big-title paroller">
                        <h2><span>Explore</span> PhyxleLoom's heart, <br/>ignite creativity.</h2>
                    </div>
                    <p class="paroller">Discover PhyxleLoom's essence—a realm where creativity flourishes and <br/>imagination knows no bounds.</p>
                    <div class="icon wow zoomIn paroller" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <a class="video-popup" title="Xoven Video Gallery" href="#">
                            <span class="flaticon-play-button-2"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="skill-style1-area">
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
                    <h2>PhyxleLoom redefines web development.</h2>
                    <p>Since our inception, we've evolved into a dynamic team of passionate professionals, each contributing their unique skills and expertise to the PhyxleLoom story.</p>
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
                                                    <h6>Corporate Business</h6>
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

<!-- Testimonial -->
<x-testimonials/>
<!-- Testimonial -->

@endSection
