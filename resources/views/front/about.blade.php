@extends('layouts.front')
@section('content')
 <section class="page-title" style="background-image:url('{{ asset('assets/images/banner/banner-1.png') }}');">

    <div class="auto-container">

        <div class="page-banner-content">

            <h1>About Us</h1>

            <p class="page-banner-text">
                MOR Oil is a trusted name in the edible oil industry, dedicated 
                to providing<br> pure,
                healthy, and high-quality oils for families across generations.
            </p>

            <a href="{{ url('/contact-us') }}" class="theme-btn">
                    CONTACT US 
                </a>

        </div>

    </div>

</section>
    <!--End Page Title-->

<!-- about-style-two -->
<!-- <section class="about-style-two sec-pad-2 border-bottom">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_2">
                    <div class="image-box">
                        <figure class="image image-1">
                            <img src="assets/images/resource/about-1.jpg" alt="">
                        </figure>
                        <figure class="image image-2">
                            <img src="assets/images/resource/about-2.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_3">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <p>About Company</p>
                            <h2>Years of Excellence in the Edible Oil Industry</h2>
                        </div>
                        <div>
                            <p style="text-align: justify;">
                                Roshanlal Chander Mohan, established in 1981, is a trusted name in the edible oil industry, proudly based in Ludhiana, Punjab. The company was founded by Late Sh. Roshan Lal Gupta, a visionary entrepreneur whose legacy continues to guide our values and commitment to quality.
                            </p>
                            <p style="text-align: justify;">
                                Today, the company is led by his successors, Sh. Pawan Kumar Gupta and Sh. Chander Mohan Gupta, who bring decades of experience and a deep understanding of consumer needs to the business.
                            </p>
                            <p style="text-align: justify;">
                                Under our flagship brand <strong>"MORE"</strong>, we are proud bulk manufacturers of a wide range of premium cooking oils, crafted to meet the highest standards of purity and taste. Our product line includes:
                            </p>
                            <ul style="text-align: justify; padding-left: 1.5rem;">
                                <li>More Pakki Ghani Mustard Oil</li>
                                <li>More Gold Kachi Ghani Mustard Oil</li>
                                <li>More Soyabean Refined Oil</li>
                            </ul>
                            <p style="text-align: justify;">
                                We offer our oils in a variety of consumer-friendly packaging options, ensuring freshness and convenience for both households and commercial kitchens.
                            </p>
                            <p style="text-align: justify;">
                                With a strong focus on quality, hygiene, and customer satisfaction, Roshanlal Chander Mohan continues to earn the trust of customers across India. Our mission is to deliver healthy, flavorful oils that enrich every meal and uphold the rich culinary traditions of Indian kitchens.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- about-style-two end -->


 <!-- about-section -->
<section class="about-section">
        
        <div class="auto-container about">
            
    

             <div class="sec-title centred" style="padding-top: 100px !important;">
    <p class="shop-eyebrow">MOr Oil</p>

            <h2 class="shop-heading">ABOut <span class="shop-heading__accent">Us</span></h2>
            <div class="shop-divider">
                <span class="shop-divider__line"></span>
                <span class="shop-divider__dot"></span>
                <span class="shop-divider__line shop-divider__line--rev"></span>
            </div>
   
<div class="text">
Roshanlal Chander Mohan, established in 1981, is a trusted name in the edible oil industry, proudly based in Ludhiana, Punjab. The company was founded by Late Sh. Roshan Lal Gupta, a visionary entrepreneur whose legacy continues to guide our values and commitment to quality. </div>
    <figure class="image-layer float-bob-y"><img src="assets/images/resource/bee-22.png" alt=""></figure>
        </div>
            <div class="row align-items-center clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    
                    <div class="image_block_1">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/about-11.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content_block_1">
                        <div class="content-box">
                            <figure class="year-box"><img src="assets/images/icons/year-40.png" alt=""></figure>
                            <div class="sec-title">
                         
                                <h2>Over 40 Years of Excellence in the Edible Oil Industry</h2>
                            </div>
                            <div class="text">
    <p>
        Under our flagship brand <strong>"MORE"</strong>, we are proud bulk manufacturers of a wide range of premium cooking oils, crafted to meet the highest standards of purity and taste. Our product line includes:
    </p>

    <ul class="oil-list">
        <li>More Pakki Ghani Mustard Oil</li>
        <li>More Gold Kachi Ghani Mustard Oil</li>
        <li>More Soyabean Refined Oil</li>
    </ul>
</div>
                    </div>
                </div>
            </div>
        <p style="text-align: center; margin-top: 20px;">
           We offer our oils in a variety of consumer-friendly packaging options, ensuring freshness and convenience for both households and commercial kitchens.
. With a strong focus on quality, hygiene, and customer satisfaction, Roshanlal Chander Mohan continues to earn the trust of customers across India. Our mission is to deliver healthy, flavorful oils that enrich every meal and uphold the rich culinary traditions of Indian kitchens.
</p>
        </div>
    </section>



    <!-- about-section end -->
<section class="about-mission-section">

    {{-- Glow blobs --}}
    <span class="shop-bg-glow shop-bg-glow--top-right"></span>
    <span class="shop-bg-glow shop-bg-glow--bottom-left"></span>

    <div class="auto-container">
        <div class="row clearfix align-items-center">

            {{-- ── Left: Content ── --}}
            <div class="col-lg-6 col-md-12 col-sm-12 content-column mb-5 mb-lg-0">

                {{-- Eyebrow --}}
                <p class="shop-eyebrow">Company Mission & Vision</p>

                {{-- Mission Block --}}
                <div class="mv-block">
                    <div class="mv-block__header">
                        <span class="mv-block__icon">
                            {{-- Target / Mission icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="1.8">
                                <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/>
                                <circle cx="12" cy="12" r="2"/>
                            </svg>
                        </span>
                        <h2 class="mv-block__title">Mission</h2>
                    </div>
                    <p class="mv-block__text">
                        At Roshanlal Chander Mohan, our mission is to deliver pure, healthy, and flavorful
                        cooking oils that meet the everyday needs of Indian households and businesses. We are
                        committed to upholding the highest standards of quality, hygiene, and trust, while
                        continuously innovating our processes and packaging to ensure customer satisfaction
                        and value. Through our brand <strong>"MORE"</strong>, we aim to contribute to the
                        well-being of every family by offering oils that are both nutritious and authentic.
                    </p>
                </div>

                {{-- Thin rule --}}
                <div class="mv-rule"></div>

                {{-- Vision Block --}}
                <div class="mv-block">
                    <div class="mv-block__header">
                        <span class="mv-block__icon">
                            {{-- Eye / Vision icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943
                                         9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943
                                         -9.542-7z"/>
                            </svg>
                        </span>
                        <h2 class="mv-block__title">Vision</h2>
                    </div>
                    <p class="mv-block__text">
                        Our vision is to become a leading name in the edible oil industry in India,
                        recognized for our heritage, integrity, and excellence. We strive to expand our
                        reach across national and international markets, while staying rooted in our core
                        values of honesty, quality, and customer focus. Guided by the legacy of our founder
                        <strong>Late Sh. Roshan Lal Gupta</strong>, we envision a future where
                        <strong>"MORE"</strong> is a household name known for purity, tradition, and taste.
                    </p>
                </div>

            </div>

            {{-- ── Right: Image ── --}}
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="mv-image-wrap">
                    <div class="mv-image-card">
                        <img src="assets/images/process/about-1.png"
                             class="mv-image-card__img"
                             alt="Roshanlal Chander Mohan — Our Story">
                    </div>

                    {{-- Floating badge --}}
                    <div class="mv-badge">
                        <span class="mv-badge__year">Est.</span>
                        <span class="mv-badge__number">1965</span>
                        <span class="mv-badge__label">Years of Purity</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    

    
   <!-- feature-section -->
<section class="feature-section centred">
    <div class="pattern-layer"></div>
    <div class="auto-container">
     
         <div class="sec-title centred">
                    <h2 class="shop-heading">WHY <span class="shop-heading__accent">Us</span></h2>
            <div class="shop-divider">
                <span class="shop-divider__line"></span>
                <span class="shop-divider__dot"></span>
                <span class="shop-divider__line shop-divider__line--rev"></span>
            </div>
        <div class="row clearfix">

            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-front">
                            <figure><img src="assets/images/resource/shop/feature-1.png" alt="Quality"></figure>
                            <h3>Premium Quality</h3>
                            <span class="flip-hint">Know more →</span>
                        </div>
                        <div class="flip-back">
                            <div class="flip-icon"><i class="fal fa-star"></i></div>
                            <h3>Premium Quality</h3>
                            <p>We ensure pure, hygienic, and high-quality oils that meet the highest industry standards consistently.</p>
                            <span class="flip-tag">Since 1981</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-front">
                            <figure><img src="assets/images/resource/shop/feature-2.png" alt="Purity"></figure>
                            <h3>100% Pure</h3>
                            <span class="flip-hint">Know more →</span>
                        </div>
                        <div class="flip-back">
                            <div class="flip-icon"><i class="fal fa-tint"></i></div>
                            <h3>100% Pure</h3>
                            <p>Our oils are made from the finest ingredients, ensuring 100% natural purity and freshness every time.</p>
                            <span class="flip-tag">No Additives</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-front">
                            <figure><img src="assets/images/resource/shop/feature-3.png" alt="Flavour"></figure>
                            <h3>Rich Taste</h3>
                            <span class="flip-hint">Know more →</span>
                        </div>
                        <div class="flip-back">
                            <div class="flip-icon"><i class="fal fa-mug-hot"></i></div>
                            <h3>Rich Taste</h3>
                            <p>MOR oils bring rich, natural flavour and aroma that enhance the taste of every dish you cook.</p>
                            <span class="flip-tag">Traditional Taste</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    <!-- feature-section end -->

    
    <!-- funfact-section -->
    <section class="funfact-section centred">
        <div class="outer-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="icon-box"><i class="fal fa-heart"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="2560">0</span>
                        </div>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="icon-box"><i class="fal fa-flower-daffodil"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="3692">0</span>
                        </div>
                        <p>Oil</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="icon-box"><i class="fal fa-cauldron"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="9865">0</span>
                        </div>
                        <p>Latest Product</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-one">
                        <div class="icon-box"><i class="fal fa-medal"></i></div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="3679">0</span>
                        </div>
                        <p>Win Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-section end -->

 <!-- testimonial-section -->
<section class="testimonial-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <p class="shop-eyebrow">Our Testimonials</p>
            <h2 class="shop-heading">What People <span class="shop-heading__accent">Say About Us</span></h2>
            <div class="shop-divider">
                <span class="shop-divider__line"></span>
                <span class="shop-divider__dot"></span>
                <span class="shop-divider__line shop-divider__line--rev"></span>
            </div>
        </div>

        <div class="single-item-carousel owl-carousel owl-theme">
            @foreach ($testimonials->chunk(2) as $testimonialPair)
                <div class="row clearfix justify-content-center">
                    @foreach ($testimonialPair as $index => $testimonial)
                        <div class="col-lg-5 col-md-6 col-sm-12 mb-4">
                            <div class="testi-card">
                                <div class="testi-card__quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testi-card__stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="testi-card__text">
                                    <p>{!! $testimonial['content'] !!}</p>
                                </div>
                                <div class="testi-card__author">
                                    <figure class="testi-card__thumb">
                                        <img src="{{ asset($testimonial['image_url']) }}" alt="{{ $testimonial['name'] }}">
                                    </figure>
                                    <div class="testi-card__info">
                                        <h5>{{ $testimonial['name'] }}</h5>
                                        <span><i class="fas fa-check-circle"></i> Verified Customer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- testimonial-section end -->

    <!-- clients-section -->
    {{-- <section class="clients-section">
        <div class="auto-container">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img
                                src="assets/images/clients/clients-logo-6.png" alt=""></a></figure>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- clients-section end -->
@endsection
