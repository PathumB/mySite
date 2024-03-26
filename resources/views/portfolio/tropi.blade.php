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
                                            <img src="{{ asset('images/tropi_project.png') }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset('images/tropi_project_sub1.png') }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset('images/tropi_project_sub2.png') }}" alt="Awesome Image">
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
                                            <img src="{{ asset('images/tropi_project.png') }}" alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <div class="thumb-image">
                                            <img src="{{ asset('images/tropi_project_sub1.png') }}" alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <div class="thumb-image">
                                            <img width="250px" src="{{ asset('images/tropi_project_sub2.png') }}" alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-details-text-box">
                        <div class="top-title">
                            <h5>Traveling</h5>
                            <h2>Tropi Culture</h2>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="portfolio-details-text one">
                                    <p>For our team at Tropiculture, life every day is but a leisurely adventure. We feel our time doesn’t pass from hour to hour but from moment to moment. The inspiration and passion for our work are transitioned to us through what surrounds us. Our lives are represented and made whole by the island’s deep-seated heritage, the glittering tapestry of culture, the salty tropical seas and tidal waves, the lush greenery that sustains us all living things and year-round sun-kissed summers blessing us with plentiful crops.</p>
                                    <br/>
                                    <p>We are a legion of visionaries, explorers, inventors and romanticists upholding the flame of curiosity and wonderment embodied through the experiences we create. Our trips are a concoction of deliberate planning flavoured by the island’s valued ingredients: history, nature and culture. Most importantly, our travel plans are knitted to support the core idealogy and the vocabulary we live and breath by - that is to be authentic, imaginative, novel and empathetic.</p>
                                    <br/>
                                    <p>We are driven by an ongoing passion that stems from curiosity and a need for originality. While we love learning from each other's experiences, we thrive the most when we are following our instincts. As our travel plans have an unprincipled approach in general, our trips vary from conventional trips to most quirky and adventurous. We take pride in the work that we do as it embodies an unparalleled experience that highlights the island's valued characteristics and individuality - as seen through our physical working space.</p>
                                    <br/>
                                    <p>The inspiration for our unique brand is coined from two words - Tropic and culture. As our island nation is abundant by both, we are not only appreciative of its opulence, but it is most elementary for the trips that we design. A land gleaming of life, warmth and diversity, Sri Lanka is a place where we islanders draw inspiration and unearthly energies from.</p>
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
