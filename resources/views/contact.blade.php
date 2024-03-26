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
                       <h2>Contact Page</h2>
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
<section class="google-map-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page-map-outer">
                    <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="{{ asset('images/resources/map-marker.png') }}" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-style1_inner-box">
                    <div class="contact-style1_form">
                        <div class="top-title">
                            <h3>Contact PhyxleLoom today! </h3>
                            <p>Whether you have questions, ideas, or specific project requirements, our team is ready to assist you. Reach out through the contact form below or connect with us via phone or email. Let's bring your vision to life together!</p>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form" name="contact_form" class="default-form2" action="assets/inc/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <label>Full Name</label>
                                            <input type="text" name="form_name" value="" placeholder="Full Name :" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <label>Email</label>
                                            <input type="email" name="form_email" value="" placeholder="Email :" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <label>Phone</label>
                                            <input type="text" name="form_phone" value="" placeholder="Phone :">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <label>Subject</label>
                                            <input type="text" name="form_subject" value="" placeholder="Subject :">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <label>Message</label>
                                            <textarea name="form_message" placeholder="Enter your message..." required=""></textarea>
                                        </div>
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                                <span class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="image"></span>
                                                <span class="left_round"></span>
                                                <span class="right_round"></span>
                                                <span class="txt">Send Us a Message<i class="flaticon-plus-1 plusicon"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="contact-info-sidebar">
                        <ul>
                            <li>
                                <div class="inner">
                                    <div class="inner_title">
                                        <h3>Address</h3>
                                    </div>
                                    <div class="inner_text">
                                        <p>121 King Street, Melbourne<br> Victoria 3000, Australia.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="inner_title">
                                        <h3>Telephone</h3>
                                    </div>
                                    <div class="inner_text">
                                        <p><a href="tel:01234567899">(+99 000 111 222 55 00)</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="inner_title">
                                        <h3>E-mail</h3>
                                    </div>
                                    <div class="inner_text">
                                        <p><a href="mailto:support@example.com" class="underline">clinexmex0011@gmail.com</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="inner_title">
                                        <h3>Social</h3>
                                    </div>
                                    <div class="inner_text">
                                        <ul class="social-link">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
