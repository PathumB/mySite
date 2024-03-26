<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhyxleLoom | @yield('title')</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-16x16.png') }}" sizes="16x16">

    <!-- preload critical resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&amp;display=swap" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('css/bootstrap.min.css') }}" as="style">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/imp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bxslider.css') }}">

    <!-- Module CSS -->
    <link rel="stylesheet" href="{{ asset('css/header-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/banner-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fact-counter-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/breadcrumb-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/team-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partner-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/testimonial-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('meta-title')">
    <meta property="og:description" content="@yield('meta-description')">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="{{ asset('images/logo.png') }}">
    <meta name="twitter:title" content="@yield('meta-title')">
    <meta name="twitter:description" content="@yield('meta-description')">

    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="@yield('meta-title')">
    <meta name="meta-description" content="@yield('description')">
    <meta name="meta-keywords" content="@yield('keywords')">
    <meta name="author" content="PhyxleLoom">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ Request::url() }}">

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "PhyxleLoom",
            "url": "{{ Request::url() }}",
            "logo": "{{ asset('images/logo.png') }}"
        }
    </script>
</head>
<body>

    <div class="boxed_wrapper">
        <x-preloader/>
        <x-header/>
            @yield('content')
        <x-footer/>
        <x-scroll-to-top/>
    </div>

    <!-- Lazy load non-critical images -->
    <script>
        function loadLazyImages() {
            const lazyImages = document.querySelectorAll('img[data-src]');
            lazyImages.forEach(img => {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
            });
        }
        window.addEventListener('load', loadLazyImages);
    </script>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.enllax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/knob.js') }}"></script>
    <script src="{{ asset('js/map-script.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/pagenav.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/bxslider.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
