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
                                            <img src="{{ asset('images/disonsconstruction_project.png') }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset('images/disonsconstruction_project_sub1.png') }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset('images/disonsconstruction_project_sub2.png') }}" alt="Awesome Image">
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
                                            <img src="{{ asset('images/disonsconstruction_project.png') }}" alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <div class="thumb-image">
                                            <img src="{{ asset('images/disonsconstruction_project_sub1.png') }}" alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <div class="thumb-image">
                                            <img width="250px" src="{{ asset('images/disonsconstruction_project_sub2.png') }}" alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>


                    <div class="portfolio-details-text-box">
                        <div class="top-title">
                            <h5>Construction</h5>
                            <h2>Disons Construction</h2>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="portfolio-details-text one">
                                    <p>The company was established way back in 1984 as a family business and obtained ICTAD Membership - since.1991-01-08 and National Construction Contractors Association(NCCA) in Sri Lanka eventually. Current grading is C6/M5 since 2010. Primary business was with the Ministry of Education and Provincial Ministry of education (Western Province) and other governmental institutions. We have done works for Private Sector clients also. We have won several awards for Construction Excellence and Merit from (NCCA-SL) for a quality finished private personalized House category and Two Storied School Laboratory building in Western Province.</p>
                                    <br/>
                                    <p>1. Nature of Organization- Sole Proprietor.</p>
                                    <p>2. BusinessRegistration No: W- 11826- Colombo.</p>
                                    <p>3. Field of specialty - Construction of Buildings covering Civil works, Electrical wiring, Plumbing and Mechanical works. Taking out of Quantities, preparation of BOQ's etc: Maintenance works for buildings. Undertake Design and Construction of Buildings.</p>
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
