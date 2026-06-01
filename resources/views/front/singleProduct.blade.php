@extends('layouts.front')
@section('content')

    <!--Page Title-->
     <section class="page-title" style="background-image:url('{{ asset('assets/images/banner/banner-1.png') }}');">

    <div class="auto-container">

        <div class="page-banner-content">

              <h1>{{ $product->title }}</h1>

            <p class="page-banner-text">
                 Explore MOR Oil's premium range of pure and hygienically processed edible <br>oils,
    crafted to deliver authentic taste, rich nutrition, and trusted quality for
    every kitchen.
            </p>

            <a href="{{ url('/contact-us') }}" class="theme-btn">
                    CONTACT US 
                </a>

        </div>

    </div>

</section>

    <!-- shop-details -->
    <section class="shop-details border-bottom py-5">
        <div class="auto-container">
            <div class="product-details-content">
                <div class="row align-items-start clearfix">

                    {{-- ── Left: Image Gallery ── --}}
                    <div class="col-lg-5 col-md-12 col-sm-12 image-column mb-4 mb-lg-0">

                        {{-- Main Slider --}}
                        <div id="main-slider" class="owl-carousel owl-theme product-main-slider">
                            @foreach ($product->images as $image)
                                <div class="item">
                                    <a href="{{ asset($image->image_url) }}"
                                       class="lightbox-image"
                                       data-fancybox="gallery">
                                        <img src="{{ asset($image->image_url) }}"
                                             alt="{{ $product->title }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        {{-- Thumbnail Slider --}}
                        <div id="thumb-slider" class="owl-carousel owl-theme product-thumb-slider mt-3">
                            @foreach ($product->images as $image)
                                <div class="item">
                                    <img src="{{ asset($image->image_url) }}"
                                         alt="{{ $product->title }} — {{ $loop->iteration }}">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- ── Right: Product Info ── --}}
                    <div class="col-lg-7 col-md-12 col-sm-12 content-column ps-lg-5">
                        <div class="product-detail-card">

                            {{-- Eyebrow --}}
                            <p class="shop-eyebrow mb-2">
                                {{ $product->category->name ?? 'Product' }}
                            </p>

                            {{-- Title --}}
                            <h2 class="product-detail-title">{{ $product->title }}</h2>

                            {{-- Divider --}}
                            <div class="shop-divider justify-content-start mb-4" style="margin:0 0 24px;">
                                <span class="shop-divider__line" style="background:linear-gradient(90deg,transparent,#ffa515);"></span>
                                <span class="shop-divider__dot"></span>
                                <span class="shop-divider__line shop-divider__line--rev"></span>
                            </div>

                            {{-- Description --}}
                            <div class="product-detail-body">
                                {!! $product->content !!}
                            </div>

                            {{-- CTA --}}
                            <div class="product-detail-cta mt-4">
                                <a href="{{ route('products') }}" class="shop-btn-all">
                                    ← Back to Products
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- shop-details end -->


    <!-- related-products -->
    <section class="shop-section centred pb-5">

        <span class="shop-bg-glow shop-bg-glow--top-right"></span>
        <span class="shop-bg-glow shop-bg-glow--bottom-left"></span>

        <div class="auto-container">

            {{-- Header --}}
            <div class="sec-title text-center mb-0">
                <p class="shop-eyebrow">Explore More</p>
                <h2 class="shop-heading">
                    Latest <span class="shop-heading__accent">Products</span>
                </h2>
            </div>

            {{-- Divider --}}
            <div class="shop-divider">
                <span class="shop-divider__line"></span>
                <span class="shop-divider__dot"></span>
                <span class="shop-divider__line shop-divider__line--rev"></span>
            </div>

            {{-- Grid --}}
            <div class="row shop-grid clearfix">
                @foreach ($latestProduct as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12 shop-col">
                        <div class="shop-card">

                            {{-- Badge --}}
                            @if ($item->is_new ?? false)
                                <span class="shop-card__badge">New</span>
                            @endif

                            {{-- Image --}}
                            <div class="shop-card__img-wrap">
                                <a href="{{ route('singleProduct', $item->slug) }}">
                                    <img src="{{ asset($item->images[0]->image_url) }}"
                                         alt="{{ $item->title }}"
                                         loading="lazy">
                                </a>
                            </div>

                            {{-- Body --}}
                            <div class="shop-card__body">
                                <div class="shop-card__title">
                                    <a href="{{ route('singleProduct', $item->slug) }}">
                                        {{ $item->title }}
                                    </a>
                                </div>

                                <div class="shop-card__footer">
                                    <span class="shop-card__tag">
                                        <span class="shop-card__tag-dot"></span>
                                        {{ $item->category->name ?? 'Product' }}
                                    </span>
                                    <a href="{{ route('singleProduct', $item->slug) }}"
                                       class="shop-card__arrow"
                                       aria-label="View {{ $item->title }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- related-products end -->

@endsection