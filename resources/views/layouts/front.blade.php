@php
    $socialLinks = json_decode($settings->social_links, true);
    $phone_numbers = json_decode($settings->contact_phones, true);
    $emails = json_decode($settings->contact_emails, true);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{ asset($settings->site_name ?? '') }}</title>
    <link rel="icon" type="image/png" href="{{ asset($settings->favicon ?? '') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <div class="boxed_wrapper">

        <!-- main header -->
        <header class="main-header style-one">
            <div class="header-lower">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset($settings->light_logo ?? '') }}" alt="Logo">
                            </a>
                        </figure>
                    </div>
                    <div class="menu-area">
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ request()->routeIs('index') ? 'current' : '' }}">
                                        <a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="dropdown {{ request()->routeIs('about') ? 'current' : '' }}">
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="{{ request()->routeIs('manufacturing-process') ? 'current' : '' }}">
    <a href="{{ route('manufacturing-process') }}">
         Process
    </a>
</li>
                                    <li class="{{ request()->routeIs('products') ? 'current' : '' }}">
                                        <a href="{{ route('products') }}">Products</a>
                                    </li>
                                    <li class="{{ request()->routeIs('blogs') ? 'current' : '' }}">
                                        <a href="{{ route('blogs') }}">Blogs</a>
                                    </li>
                                    <!-- <li class="{{ request()->routeIs('gallery') ? 'current' : '' }}">
                                        <a href="{{ route('gallery') }}">Gallery</a>
                                    </li> -->
                                    <li class="{{ request()->routeIs('contact') ? 'current' : '' }}">
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="nav-right-content">
                        <ul class="social-links clearfix">
                            @if ($socialLinks['facebook'] !== null)
                                <li><a href="{{ $socialLinks['facebook'] }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if ($socialLinks['twitter'] !== null)
                                <li><a href="{{ $socialLinks['twitter'] }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if ($socialLinks['instagram'] !== null)
                                <li><a href="{{ $socialLinks['instagram'] }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            @endif
                            @if ($socialLinks['youtube'] !== null)
                                <li><a href="{{ $socialLinks['youtube'] }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sticky Header -->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset($settings->light_logo ?? '') }}" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="menu-area">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset($settings->light_logo ?? '') }}" alt="" title="">
                    </a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        @if (!empty($phone_numbers))
                            @foreach ($phone_numbers as $item)
                                <li><a href="tel:{{ $item }}">{{ $item }}</a></li>
                            @endforeach
                        @endif
                        @if (!empty($emails))
                            @foreach ($emails as $item)
                                <li><a href="mailto:{{ $item }}">{{ $item }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        @if ($socialLinks['facebook'] !== null)
                            <li><a href="{{ $socialLinks['facebook'] }}" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                        @endif
                        @if ($socialLinks['twitter'] !== null)
                            <li><a href="{{ $socialLinks['twitter'] }}" target="_blank"><span class="fab fa-twitter"></span></a></li>
                        @endif
                        @if ($socialLinks['instagram'] !== null)
                            <li><a href="{{ $socialLinks['instagram'] }}" target="_blank"><span class="fab fa-instagram"></span></a></li>
                        @endif
                        @if ($socialLinks['youtube'] !== null)
                            <li><a href="{{ $socialLinks['youtube'] }}" target="_blank"><span class="fab fa-youtube"></span></a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        @yield('content')
<!-- main-footer -->
<footer class="main-footer">
    <div class="pattern-layer" style="background-image: url({{ asset('assets/images/shape/shape-3.png') }});"></div>
    <div class="image-layer">
        <figure class="image image-1"><img src="{{ asset('assets/images/element00.png') }}" alt=""></figure>
        <figure class="image image-2"><img src="{{ asset('assets/images/element11.png') }}" alt=""></figure>
    </div>
    <div class="auto-container">
        <div class="footer-top">
            <div class="row clearfix">

                {{-- Logo + Tagline Column --}}
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column footer-logo-col">
                    <div class="footer-widget">
                        <a href="{{ route('index') }}" class="footer-logo-wrap">
                            <img src="{{ asset($settings->light_logo ?? '') }}" alt="{{ $settings->site_name }}">
                        </a>
                        <hr class="footer-divider">
                        <p class="footer-tagline">Pure. Natural. Trusted since 1981. Delivering quality oil to kitchens across Punjab and beyond.</p>
                       <h6 class="follow-title">Follow Us</h6>

                        <ul class="social-links clearfix">
                            @if ($socialLinks['facebook'] !== null)
                                <li><a href="{{ $socialLinks['facebook'] }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if ($socialLinks['twitter'] !== null)
                                <li><a href="{{ $socialLinks['twitter'] }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if ($socialLinks['instagram'] !== null)
                                <li><a href="{{ $socialLinks['instagram'] }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            @endif
                            @if ($socialLinks['youtube'] !== null)
                                <li><a href="{{ $socialLinks['youtube'] }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                {{-- Quick Links --}}
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <div class="widget-title"><h4>Quick Links</h4></div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <!-- <li><a href="{{ route('gallery') }}">Gallery</a></li> -->
                                <li><a href="{{ route('products') }}">Our Products</a></li>
                                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Contact --}}
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title"><h4>Contact Us</h4></div>
                        <div class="widget-content">
                            <div class="call-box">
                                @if (!empty($phone_numbers))
                                    @foreach ($phone_numbers as $item)
                                        <p><i class="fal fa-phone"></i> <a href="tel:{{ $item }}">{{ $item }}</a></p>
                                    @endforeach
                                @endif
                                @if (!empty($emails))
                                    @foreach ($emails as $item)
                                        <p><i class="fal fa-envelope"></i> <a href="mailto:{{ $item }}">{{ $item }}</a></p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Recent News --}}
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title"><h4>Recent News</h4></div>
                        <div class="post-inner">
                            @foreach ($layoutBlogs as $item)
                                <div class="post">
                                    <figure class="post-thumb">
                                        <a href="{{ route('singleBlog', $item->slug) }}">
                                            <img src="{{ asset($item->image_url) }}" alt="{{ $item->title }}">
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <h6><a href="{{ route('singleBlog', $item->slug) }}">{{ $item->title }}</a></h6>
                                        <span class="post-date">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="text pull-left">
                <p>© Copyright 2025 by {{ $settings->site_name }}</p>
            </div>
            <div class="text pull-right">
                <p>All Right Reserved. Design By <a href="https://digitalconnexions.in/" target="_blank">Digital Connexions</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

        <!-- Scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="far fa-angle-up"></span>
        </button>

    </div>

    <!-- ================================================
         SCRIPTS — correct loading order
         jQuery → plugins → custom init → script.js
    ================================================ -->

    <!-- 1. jQuery (only once, local) -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- 2. Core plugins -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- 3. Owl Carousel (local) -->
    <script src="{{ asset('assets/js/owl.js') }}"></script>

    <!-- 4. Other plugins -->
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- 5. Product page thumb sync (only runs if elements exist) -->
    <script>
        $(document).ready(function () {
            var sync1 = $("#main-slider");
            var sync2 = $("#thumb-slider");

            if (sync1.length && sync2.length) {
                var slidesPerPage = 3;

                sync1.owlCarousel({
                    items: 1,
                    slideSpeed: 1000,
                    nav: false,
                    dots: false,
                    loop: true,
                    autoplay: false,
                    responsiveRefreshRate: 200,
                }).on('changed.owl.carousel', syncPosition);

                sync2.owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    nav: false,
                    margin: 10,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: slidesPerPage,
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);

                function syncPosition(el) {
                    var count   = el.item.count - 1;
                    var current = Math.round(el.item.index - (el.item.count / 2) - .5);
                    if (current < 0) current = count;
                    if (current > count) current = 0;
                    sync2.find(".owl-item").removeClass("active").eq(current).addClass("active");
                    var onscreen = sync2.find('.owl-item.active').length - 1;
                    var start    = sync2.find('.owl-item.active').first().index();
                    var end      = sync2.find('.owl-item.active').last().index();
                    if (current > end)   sync2.data('owl.carousel').to(current, 100, true);
                    if (current < start) sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }

                function syncPosition2(el) {
                    if (sync1.data('owl.carousel') !== undefined) {
                        sync1.data('owl.carousel').to(el.item.index, 300, true);
                    }
                }

                sync2.on("click", ".owl-item", function (e) {
                    e.preventDefault();
                    sync1.data('owl.carousel').to($(this).index(), 300, true);
                });
            }
        });
    </script>

    <!-- 6. Main JS (must be absolutely last) -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>