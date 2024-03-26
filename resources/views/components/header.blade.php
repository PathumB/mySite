<header class="main-header header-style-one">
    <div class="header-top">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-top_right pull-right">
                    <div class="header-social-link-1">
                        <ul class="clearfix">
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="outer-box">
                <div class="header-left">
                    <div class="logo">
                        <a href="{{ route('home.index') }}"><img src="{{ asset('images/logo.png') }}" alt="Awesome Logo" title=""></a>
                    </div>
                </div>

                <div class="header-right">
                    <div class="nav-outer style1 clearfix">
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ request()->routeIs('home.index') ? 'current' : '' }}">
                                        <a href="{{ route('home.index') }}">Home</a>
                                    </li>
                                    <li class="{{ request()->routeIs('about-us.index') ? 'current' : '' }}">
                                        <a href="{{ route('about-us.index') }}">About</a>
                                    </li>
                                    <li class="{{ request()->routeIs('our-services*') ? 'current' : '' }}">
                                        <a href="{{ route('our-services.index') }}">Services</a>
                                    </li>
                                    <li class="{{ request()->routeIs('our-portfolio.*') ? 'current' : '' }}">
                                        <a href="{{ route('our-portfolio.index') }}">Portfolio</a>
                                    </li>
                                    <li class="{{ request()->routeIs('contact-us.index') ? 'current' : '' }}">
                                        <a href="{{ route('contact-us.index') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="header-right_buttom">
                        <div class="btns-box">
                            <a class="btn-one" href="{{ route('contact-us.index') }}">
                                <div class="border_line"><img src="{{ asset('images/button-border.png') }}" alt="button border pattern"></div>
                                <span class="txt">Request a Quote<i class="flaticon-plus-1 plusicon"></i></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <div class="logo float-left">
                    <a href="{{ route('home.index') }}" class="img-responsive"><img src="{{ asset('images/logo.png') }}" alt="logo" title=""></a>
                </div>
                <div class="right-col float-right">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('home.index') }}"><img src="{{ asset('images/mobilemenu-logo.png') }}" alt="logo" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>
