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
                        <h2>Our Portfolio</h2>
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
<section class="portfolio-page-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="single-portfolio-style1 single-portfolio-style2">
                    <div class="img-holder">
                        <img src="{{ asset('images/disonsconstruction_project.png') }}" alt="disonsconstruction image">
                        <div class="overlay-icon">
                            <a href="{{ route('ourPortfolio.disonsconstruction') }}"><span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>s
                    <div class="title-holder">
                        <h3><a href="{{ route('ourPortfolio.disonsconstruction') }}">Disons Constructions</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="single-portfolio-style1 single-portfolio-style2">
                    <div class="img-holder">
                        <img src="{{ asset('images/dragonsof_project.png') }}" alt="dragonsof image">
                        <div class="overlay-icon">
                            <a href="{{ route('ourPortfolio.dragonsof') }}"><span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="{{ route('ourPortfolio.dragonsof') }}">Dragonsof Solutions</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="single-portfolio-style1 single-portfolio-style2">
                    <div class="img-holder">
                        <img src="{{ asset('images/econsulate_project.png') }}" alt="econsulate image">
                        <div class="overlay-icon">
                            <a href="{{ route('ourPortfolio.econsulate') }}"><span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="{{ route('ourPortfolio.econsulate') }}">Econsulate</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="single-portfolio-style1 single-portfolio-style2">
                    <div class="img-holder">
                        <img src="{{ asset('images/hcm_project.png') }}" alt="hcm image">
                        <div class="overlay-icon">
                            <a href="{{ route('ourPortfolio.hcm') }}"><span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="{{ route('ourPortfolio.hcm') }}">HCM Pvt Ltd</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="single-portfolio-style1 single-portfolio-style2">
                    <div class="img-holder">
                        <img src="{{ asset('images/estai_project.png') }}" alt="estai image">
                        <div class="overlay-icon">
                            <a href="{{ route('ourPortfolio.estai') }}"><span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="{{ route('ourPortfolio.estai') }}">Estai Pvt Ltd</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="single-portfolio-style1 single-portfolio-style2">
                    <div class="img-holder">
                        <img src="{{ asset('images/tropi_project.png') }}" alt="tropi image">
                        <div class="overlay-icon">
                            <a href="{{ route('ourPortfolio.tropi') }}"><span class="flaticon-right-arrow-1"></span></a>
                        </div>
                    </div>
                    <div class="title-holder">
                        <h3><a href="{{ route('ourPortfolio.tropi') }}">Tropi Pvt Ltd</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="btns-box loadmore-portfolio-button text-center">
            <a class="btn-one" href="portfolio-1.html">
                <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="portfolio image"></div>
                <div class="left_round"></div>
                <div class="right_round"></div>
                <span class="txt">View Load More<i class="flaticon-plus-1 plusicon"></i></span>
            </a>
        </div>
    </div>
</section>
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
                                <div class="v-info">
                                    <div class="img-box">
                                        <img src="{{ asset('images/testimonial-v1-1.jpg') }}" alt="testimonial information image">
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
