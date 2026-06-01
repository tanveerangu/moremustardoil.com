@extends('layouts.front')
@section('content')
    <!--Page Title-->
     <section class="page-title" style="background-image:url('{{ asset('assets/images/banner/banner-1.png') }}');">

    <div class="auto-container">

        <div class="page-banner-content">

              <h1>Blogs</h1>

            <p class="page-banner-text">
                Discover insightful articles, industry updates, cooking tips, health
            guides, and expert knowledge from MOR Oil. Stay informed with the
            latest trends,<br> nutritional advice, and stories that inspire healthier
            and tastier lifestyles.
            </p>

            <a href="{{ url('/contact-us') }}" class="theme-btn">
                    CONTACT US 
                </a>

        </div>

    </div>

</section>
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
@endsection
