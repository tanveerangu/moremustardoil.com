@extends('layouts.front')
@section('content')

    <!--Page Title-->
    
     <section class="page-title" style="background-image:url('{{ asset('assets/images/banner/banner-1.png') }}');">

    <div class="auto-container">

        <div class="page-banner-content">

            <h1>Our Products</h1>

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
    <!--End Page Title-->

    <!-- shop-section -->
    <section class="shop-section centred">

        {{-- Decorative glow blobs --}}
        <span class="shop-bg-glow shop-bg-glow--top-right"></span>
        <span class="shop-bg-glow shop-bg-glow--bottom-left"></span>

        <div class="auto-container">

            {{-- Section Header --}}
            <div class="sec-title text-center mb-0">
                <p class="shop-eyebrow">Handcrafted for You</p>
                <h2 class="shop-heading">
                    Our <span class="shop-heading__accent">Products</span>
                </h2>
            </div>

            {{-- Divider --}}
            <div class="shop-divider">
                <span class="shop-divider__line"></span>
                <span class="shop-divider__dot"></span>
                <span class="shop-divider__line shop-divider__line--rev"></span>
            </div>

            {{-- Product Grid --}}
            <div class="row shop-grid clearfix">
                @foreach ($products as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12 shop-col">
                        <div class="shop-card">

                            {{-- Badge (optional — show category or "New") --}}
                            @if ($item->is_new ?? false)
                                <span class="shop-card__badge">New</span>
                            @endif

                            {{-- Image --}}
                            <div class="shop-card__img-wrap">
                                <a href="{{ route('singleProduct', $item->slug) }}">
                                    <img
                                        src="{{ asset($item->images[0]->image_url) }}"
                                        alt="{{ $item->title }}"
                                        loading="lazy"
                                    >
                                </a>
                            </div>

                            {{-- Body --}}
                            <div class="shop-card__body">
                                <div class="shop-card__title">
                                    <a href="{{ route('singleProduct', $item->slug) }}">
                                        {{ $item->title }}
                                    </a>
                                </div>

                                {{-- Footer --}}
                                <div class="shop-card__footer">
                                    <span class="shop-card__tag">
                                        <span class="shop-card__tag-dot"></span>
                                        {{ $item->category->name ?? 'MOR OIL' }}
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

            {{-- Pagination / View All (if using paginator) --}}
            @if (method_exists($products, 'links'))
                <div class="more-btn mt-4">
                    {{ $products->links() }}
                </div>
            @endif

        </div>
    </section>
    <!-- shop-section end -->

@endsection