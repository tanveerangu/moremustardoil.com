@extends('layouts.front')
@section('content')
    <!-- banner-section -->
   <section class="banner-section style-one">
    <div class="banner-carousel owl-carousel owl-theme">

        <div class="slide-item position-relative">
            <img src="assets/images/banner/banner-1.png" alt="" style="width:100%;display:block;">

            <div class="banner-content">
                <h1>The Trusted Choice for Healthy Living</h1>
                <p>
                    With a legacy built on excellence and consumer trust,
                    MOR Oil offers superior-quality edible oils that preserve
                    natural goodness and enhance the flavor of every dish.
                </p>
                <h5>Nourishing Families, One Meal at a Time.</h5>
                <a href="{{ url('/about-us') }}" class="theme-btn">
                    DISCOVER MORE
                </a>
            </div>
        </div>

        <div class="slide-item position-relative">
            <img src="assets/images/banner/banner-1.png" alt="" style="width:100%;display:block;">

            <div class="banner-content">
                <h1>Pure Nutrition, Timeless Quality that you can Trust</h1>
                <p>
                    MOR Oil is crafted from carefully selected ingredients,
                    ensuring purity, freshness, and nutrition in every drop.
                </p>
                <h5>Healthy Cooking Starts with MOR.</h5>
                <a href="{{ url('/our-products') }}" class="theme-btn">
                    VIEW PRODUCTS
                </a>
            </div>
        </div>

    

    </div>
</section>
<!-- banner-section end -->
 
    <!-- feature-section -->
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


    <!-- about-section -->
<section class="about-section">
        
        <div class="auto-container about">
            
    

             <div class="sec-title centred">
            <p class="shop-eyebrow">MOr Oil</p>
            <h2 class="shop-heading">ABOut <span class="shop-heading__accent">Us</span></h2>
            <div class="shop-divider">
                <span class="shop-divider__line"></span>
                <span class="shop-divider__dot"></span>
                <span class="shop-divider__line shop-divider__line--rev"></span>
            </div>
   
<div class="text">
    MOR Oil is a trusted name in the edible oil industry, dedicated to providing pure, healthy, and high-quality oils for families across generations. With a strong commitment to quality, hygiene, and traditional values, we carefully select the finest ingredients and follow stringent manufacturing processes to ensure excellence in every bottle.
    </div>
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
                         
                                <h2>Over 40 Years of Trust , We provide Oil successfully</h2>
                            </div>
                            <div class="text">
                                <p>Serving quality cooking oils since 1981, Roshanlal Chander Mohan has been a trusted name in every kitchen—delivering purity, flavour, and tradition in every drop.</p>
                            </div>
                            <div class="btn-box"><a href="about.php" class="theme-btn-one">learn more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


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

    
   <!-- shop-section -->
<section class="shop-section centred">
    <div class="shop-bg-glow shop-bg-glow--top-right"></div>
    <div class="shop-bg-glow shop-bg-glow--bottom-left"></div>
    <div class="auto-container">
        <div class="sec-title centred">
            <p class="shop-eyebrow">Visit Our Store</p>
            <h2 class="shop-heading">Our <span class="shop-heading__accent">Products</span></h2>
            <div class="shop-divider">
                <span class="shop-divider__line"></span>
                <span class="shop-divider__dot"></span>
                <span class="shop-divider__line shop-divider__line--rev"></span>
            </div>
        </div>

        <div class="row clearfix shop-grid">
            @foreach ($products as $item)
                <div class="col-lg-3 col-md-6 col-sm-12 shop-col">
                    <div class="shop-card wow fadeInUp animated" data-wow-delay="{{ $loop->index * 100 }}ms" data-wow-duration="800ms">
                        @if ($loop->first)
                            <span class="shop-card__badge">Popular</span>
                        @endif
                        <div class="shop-card__img-wrap">
                            <a href="{{ route('singleProduct', $item->slug) }}">
                                <img src="{{ asset($item->images[0]->image_url) }}" alt="{{ $item->title }}">
                            </a>
                        </div>
                        <div class="shop-card__body">
                            <h5 class="shop-card__title">
                                <a href="{{ route('singleProduct', $item->slug) }}">{{ $item->title }}</a>
                            </h5>
                            <div class="shop-card__footer">
                                <span class="shop-card__tag">
                                    <span class="shop-card__tag-dot"></span>
                                    Pure &amp; Natural
                                </span>
                                <a href="{{ route('singleProduct', $item->slug) }}" class="shop-card__arrow" aria-label="View {{ $item->title }}">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"/>
                                        <polyline points="12 5 19 12 12 19"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="more-btn">
            <a href="{{ route('products') }}" class="shop-btn-all">View All Products</a>
        </div>
    </div>
</section>
<!-- shop-section end -->

    <!-- benefits-section -->
<section class="benefits-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <h2>Benefits Of MOR Oil</h2>
        </div>
        <div class="row clearfix justify-content-center">
            <div class="col-lg-2 col-md-4 col-sm-6 col-6 benefits-col">
                <div class="benefits-block">
                    <div class="icon-circle">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <p>Reduces Heart Diseases</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6 benefits-col">
                <div class="benefits-block">
                    <div class="icon-circle">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <p>Diabetic Friendly</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6 benefits-col">
                <div class="benefits-block">
                    <div class="icon-circle">
                        <i class="fas fa-lungs"></i>
                    </div>
                    <p>Reduces Asthma</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6 benefits-col">
                <div class="benefits-block">
                    <div class="icon-circle">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <p>Increases Immunity</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6 benefits-col">
                <div class="benefits-block">
                    <div class="icon-circle">
                        <i class="fas fa-tint"></i>
                    </div>
                    <p>Helps Blood Circulation</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- benefits-section end -->


    <!-- chooseus-section -->
    <section class="chooseus-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content_block_2">
                        <div class="content-box">
                            <div class="sec-title">
                                <p class="shop-eyebrow">Process</p>
            
                                <h2 class="shop-heading">Manufacturing <span class="shop-heading__accent">Process</span></h2>
                            </div>
                            <div class="text">
                                <p>Serving quality cooking oils since 1981, Roshanlal Chander Mohan has been a trusted name in every kitchen—delivering purity, flavour, and tradition in every drop.</p>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="inner-box">
                                        <div class="single-item">
                                            <div class="icon-box">1</div>
                                            <h5>Seed Selection</h5>
                                            <p>Carefully chosen premium seeds for pure and high-quality oil.</p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box">2</div>
                                            <h5>Quality Control</h5>
                                            <p>Strict checks ensure oil purity, safety, and consistent quality.</p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box">3</div>
                                            <h5>Crushing</h5>
                                            <p>Efficient crushing to extract maximum oil without compromising freshness.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                    <div class="inner-box">
                                        <div class="single-item">
                                            <div class="icon-box">4</div>
                                            <h5>Purification</h5>
                                            <p>Advanced purification removes impurities, retaining natural nutrients and flavor.</p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box">5</div>
                                            <h5>Packaging</h5>
                                            <p>Secure packaging preserves oil freshness and quality for consumers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image image-1"><img src="assets/images/resource/chooseus-11.png" alt=""
                                style="height:600px;"></figure>
                        <figure class="image image-2 float-bob-y"><img src="assets/images/resource/bee-22.png"
                                alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


  <!-- certifications-section -->
<section class="certifications-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <p class="shop-eyebrow">Certifications</p>
            <h2 class="shop-heading">Trust & <span class="shop-heading__accent">Quality</span></h2>
        </div>
        <div class="cert-carousel owl-carousel owl-theme">
            <div class="cert-item">
                <div class="cert-card">
                    <img src="{{ asset('assets/images/certificate/fortified.webp') }}" alt="Fortified">
                    <p>Fortified</p>
                </div>
            </div>
            <div class="cert-item">
                <div class="cert-card">
                    <img src="{{ asset('assets/images/certificate/fssai.webp') }}" alt="FSSAI">
                    <p>FSSAI</p>
                </div>
            </div>
            <div class="cert-item">
                <div class="cert-card">
                    <img src="{{ asset('assets/images/certificate/govtofindia.webp') }}" alt="AGMARK">
                    <p>AGMARK</p>
                </div>
            </div>
            <div class="cert-item">
                <div class="cert-card">
                    <img src="{{ asset('assets/images/certificate/iso.webp') }}" alt="ISO 22000:2018">
                    <p>ISO 22000:2018</p>
                </div>
            </div>
            {{-- duplicates so loop works --}}
            <div class="cert-item">
                <div class="cert-card">
                    <img src="{{ asset('assets/images/certificate/fortified.webp') }}" alt="Fortified">
                    <p>Fortified</p>
                </div>
            </div>
            <div class="cert-item">
                <div class="cert-card">
                    <img src="{{ asset('assets/images/certificate/fssai.webp') }}" alt="FSSAI">
                    <p>FSSAI</p>
                </div>
            </div>
            <div class="cert-item">
                <div class="cert-card">
                    <img src="{{ asset('assets/images/certificate/govtofindia.webp') }}" alt="AGMARK">
                    <p>AGMARK</p>
                </div>
            </div>
            <div class="cert-item">
                <div class="cert-card">
                    <img src="{{ asset('assets/images/certificate/iso.webp') }}" alt="ISO 22000:2018">
                    <p>ISO 22000:2018</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- certifications-section end -->

    <!-- project-section -->
    <!-- <section class="project-section">
        <div class="outer-container">
            <div class="sec-title centred">
                <p class="shop-eyebrow">Latest Project</p>
            
                <h2 class="shop-heading">Photo <span class="shop-heading__accent">gallery</span></h2>
            </div>
            <div class="row clearfix">
                @foreach ($gallery as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset($item->image_url) }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <div class="more-btn"><a href="{{ route('gallery') }}" class="theme-btn-one">View More</a></div>
            </div>
        </div>
    </section> -->
    <!-- project-section end -->


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


<!-- news-section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title centred">
            <p class="shop-eyebrow">Latest Updates</p>
            <h2 class="shop-heading">From Our <span class="shop-heading__accent">Blog</span></h2>
            <div class="shop-divider">
                <span class="shop-divider__line"></span>
                <span class="shop-divider__dot"></span>
                <span class="shop-divider__line shop-divider__line--rev"></span>
            </div>
        </div>
        <div class="row clearfix">
            @foreach ($blogs as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-card wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="news-card__img">
                            <a href="{{ route('singleBlog', $item->slug) }}">
                                <img src="{{ asset($item->image_url) }}" alt="{{ $item->title }}">
                            </a>
                            <div class="news-card__date">
                                <i class="far fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                            </div>
                        </div>
                        <div class="news-card__body">
                            <h5>
                                <a href="{{ route('singleBlog', $item->slug) }}">{{ $item->title }}</a>
                            </h5>
                            <a href="{{ route('singleBlog', $item->slug) }}" class="news-card__link">
                                Read More <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- news-section end -->

    
<!-- cta-section -->
<section class="cta-section centred" style="background-image: url(assets/images/banner/banner-1.png);">
    <div class="cta-overlay"></div>
    <div class="auto-container">
        <div class="cta-inner">
            <div class="cta-badge">Get Our Product</div>
            <h2>Want to try our <span>pure & healthy</span> oils?<br>Contact us now!</h2>
            <p>Premium quality mustard oil — trusted by families since 1981.</p>
            <a href="{{ route('contact') }}" class="cta-btn">
                <i class="fal fa-phone"></i> Contact Us
            </a>
        </div>
    </div>
</section>
<!-- cta-section end -->

    <!-- clients-section -->
    {{-- <section class="clients-section">
        <div class="auto-container">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo-box"><a href="#"><img
                                src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="#"><img
                                src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="#"><img
                                src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="#"><img
                                src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="#"><img
                                src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="#"><img
                                src="assets/images/clients/clients-logo-6.png" alt=""></a></figure>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- clients-section end -->
@endsection
