<footer class="footer-area">
    <div class="footer-area_bg" style="background-image: url({{ asset('images/footer-area_bg.jpg') }});"></div>
    <div class="shape">
        <img src="{{ asset('images/thm-shape-4.png') }}" alt="shape image">
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner">
                        <div class="text">
                            <h6>Ready to get started?</h6>
                            <h2>Get in touch with us.</h2>
                        </div>
                        <div class="button-box">
                            <a class="btn-one" href="{{ route('our-services.index') }}">
                                <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="button design"></div>
                                <span class="txt">Explore +<i class="flaticon-plus-1 plusicon"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row text-right-rtl">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="single-footer-widget">
                        <div class="our-company-info">
                            <div class="footer-logo">
                                <a href="{{ route('home.index') }}"> <img src="{{ asset('images/footer-logo.png') }}" alt="logo"></a>
                            </div>
                            <div class="text-box">
                                <p>In the ever-evolving digital landscape, PhyxleLoom stays ahead of the curve. We embrace emerging technologies and design trends, ensuring that our clients benefit from the latest advancements in web development.</p>
                            </div>
                            <div class="copyright-text">
                                <p>© Copywright by <a href="#">@PhyxleLoom.</a> All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget mar-left pdtop60 pdtop0">
                        <div class="title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="footer-widget-links1">
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li><a href="{{ route('about-us.index') }}">About Us</a></li>
                            <li><a href="{{ route('our-services.index') }}">Services</a></li>
                            <li><a href="{{ route('our-portfolio.index') }}">Our Portfolio</a></li>
                            <li><a href="#">Our Blog</a></li>
                            <li><a href="{{ route('contact-us.index') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget mar-left2 pdtop60">
                        <div class="title">
                            <h3>Our Services</h3>
                        </div>
                        <ul class="footer-widget-links1">
                            <li><a href="#">Web Design and Development</a></li>
                            <li><a href="#">Mobile App Design and Development</a></li>
                            <li><a href="#">UI/ UX Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">SEO and Content Writing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget fixwidth pdtop60">
                        <div class="title">
                            <h3>Test Address</h3>
                        </div>
                        <ul class="instagram-box">
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('images/instagram-1.jpg') }}" alt="instagram image">
                                    <div class="overlay">
                                        <div class="inner">
                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('images/instagram-2.jpg') }}" alt="instagram image">
                                    <div class="overlay">
                                        <div class="inner">
                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="{{ asset('images/instagram-3.jpg') }}" alt="instagram image">
                                    <div class="overlay">
                                        <div class="inner">
                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="bottom-box">
                            <ul>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Terms &amp; Conditions </a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
