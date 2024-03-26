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
                        <h2>Error page</h2>
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
<section class="error-page-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-content text-center wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h4>Page Not Found</h4>
                    <div class="title clr1">404</div>
                    <p>We're unable to find a page you are looking for, Try later or click the button.</p>
                    <div class="btns-box">
                        <a class="btn-one" href="index.html">
                            <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></div>
                            <div class="left_round"></div>
                            <div class="right_round"></div>
                            <span class="txt">Back to Home<i class="flaticon-plus-1 plusicon"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
