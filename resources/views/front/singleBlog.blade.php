@extends('layouts.front')
@section('content')

{{-- Page Banner --}}
<section class="page-title" style="background-image:url('{{ asset('assets/images/banner/banner-1.png') }}');">
    <div class="auto-container">
        <div class="page-banner-content">
            <h1>{{ $blog->title }}</h1>
            <ul class="bread-crumb clearfix" style="padding:0;margin:20px 0 0;list-style:none;display:flex;gap:8px;align-items:center;">
                <li><a href="{{ route('index') }}" style="color:black;font-size:15px;">Home</a></li>
                <li style="color:black;font-size:13px;">/</li>
                <li><a href="{{ route('blogs') }}" style="color:black;font-size:15px;">Blogs</a></li>
                <li style="color:black;font-size:13px;">/</li>
                <li style="color:var(--clr-primary);font-size:15px;font-weight:600;">{{ Str::limit($blog->title, 40) }}</li>
            </ul>
        </div>
    </div>
</section>

{{-- Blog Detail --}}
<section style="padding:80px 0 90px;background:#fff;">
    <div class="auto-container">
        <div class="row">

            {{-- Main Content --}}
            <div class="col-lg-8 col-md-12">

                {{-- Hero Image --}}
                <div style="border-radius:20px;overflow:hidden;margin-bottom:36px;box-shadow:0 16px 50px rgba(180,90,0,0.12);border:2px solid #ffe6b8;">
                    <img src="{{ asset($blog->image_url) }}" alt="{{ $blog->title }}"
                         style="width:100%;height:440px;object-fit:cover;display:block;">
                </div>

                {{-- Meta Bar --}}
                <div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;margin-bottom:28px;padding-bottom:24px;border-bottom:1px solid #ffe6b8;">
                    <span style="display:inline-flex;align-items:center;gap:7px;background:var(--clr-accent);color:#fff;font-size:12px;font-weight:600;padding:6px 16px;border-radius:20px;">
                        <i class="far fa-calendar-alt"></i>
                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:7px;background:#fff8ee;border:1px solid #ffe6b8;color:#b86a00;font-size:12px;font-weight:600;padding:6px 16px;border-radius:20px;">
                        <i class="far fa-folder"></i>
                        Blog
                    </span>
                </div>

                {{-- Title --}}
                <h1 style="font-family:'Playfair Display',serif;font-size:clamp(26px,3.5vw,40px);font-weight:900;color:#1a0a00;line-height:1.2;letter-spacing:-0.5px;margin-bottom:10px;">
                    {{ $blog->title }}
                </h1>

                {{-- Divider --}}
                <div style="width:52px;height:3px;background:var(--clr-accent);border-radius:2px;margin:18px 0 28px;"></div>

                {{-- Body Content --}}
                <div class="blog-body-content" style="font-family:'DM Sans',sans-serif;font-size:16px;line-height:1.9;color:#4a3010;">
                    {!! $blog->content !!}
                </div>

                {{-- Back Button --}}
                <div style="margin-top:50px;padding-top:36px;border-top:1px solid #ffe6b8;">
                    <a href="{{ route('blogs') }}"
                       style="display:inline-flex;align-items:center;gap:10px;background:#1a0a00;color:#fff;font-family:'DM Sans',sans-serif;font-size:14px;font-weight:600;letter-spacing:0.07em;text-transform:uppercase;padding:15px 36px;border-radius:50px;text-decoration:none;transition:background .22s;">
                        <i class="fal fa-arrow-left"></i> Back to Blogs
                    </a>
                </div>

            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4 col-md-12" style="padding-left:30px;">

                {{-- About Card --}}
                <div style="background:#fff8ee;border:1.5px solid #ffe6b8;border-radius:20px;padding:32px 28px;margin-bottom:30px;">
                    <div style="width:48px;height:48px;border-radius:50%;background:var(--clr-accent);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                        <i class="fas fa-leaf" style="color:#fff;font-size:20px;"></i>
                    </div>
                    <h4 style="font-family:'Playfair Display',serif;font-size:20px;font-weight:700;color:#1a0a00;margin-bottom:10px;">About MOR Oil</h4>
                    <div style="width:36px;height:2px;background:var(--clr-accent);border-radius:2px;margin-bottom:14px;"></div>
                    <p style="font-size:14px;line-height:1.8;color:#5b3a10;margin:0;">
                        MOR Oil brings you pure, natural oils crafted with care — from farm to bottle. We share knowledge, recipes, and wellness tips to help you live healthier and tastier.
                    </p>
                </div>

                {{-- Share Card --}}
                <div style="background:#fff;border:1.5px solid #ffe6b8;border-radius:20px;padding:28px;margin-bottom:30px;">
                    <h4 style="font-family:'DM Sans',sans-serif;font-size:13px;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;color:var(--clr-accent);margin-bottom:16px;">Share This Post</h4>
                    <div style="display:flex;gap:10px;flex-wrap:wrap;">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                           target="_blank"
                           style="width:42px;height:42px;border-radius:50%;background:#fff8ee;border:1.5px solid #ffe6b8;display:flex;align-items:center;justify-content:center;color:#b86a00;text-decoration:none;transition:all .25s;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}"
                           target="_blank"
                           style="width:42px;height:42px;border-radius:50%;background:#fff8ee;border:1.5px solid #ffe6b8;display:flex;align-items:center;justify-content:center;color:#b86a00;text-decoration:none;transition:all .25s;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($blog->title . ' ' . request()->url()) }}"
                           target="_blank"
                           style="width:42px;height:42px;border-radius:50%;background:#fff8ee;border:1.5px solid #ffe6b8;display:flex;align-items:center;justify-content:center;color:#b86a00;text-decoration:none;transition:all .25s;">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}"
                           target="_blank"
                           style="width:42px;height:42px;border-radius:50%;background:#fff8ee;border:1.5px solid #ffe6b8;display:flex;align-items:center;justify-content:center;color:#b86a00;text-decoration:none;transition:all .25s;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                {{-- CTA Card --}}
                <div style="background:linear-gradient(135deg,#1a0a00 0%,#3d1800 100%);border-radius:20px;padding:32px 28px;text-align:center;">
                    <div style="width:56px;height:56px;border-radius:50%;background:rgba(241,166,27,0.2);border:1px solid rgba(241,166,27,0.4);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                        <i class="fas fa-phone-alt" style="color:var(--clr-primary);font-size:22px;"></i>
                    </div>
                    <h4 style="font-family:'Playfair Display',serif;font-size:20px;font-weight:700;color:#fff;margin-bottom:10px;">Have Questions?</h4>
                    <p style="font-size:14px;line-height:1.7;color:rgba(255,255,255,0.7);margin-bottom:22px;">
                        Reach out to our team — we're happy to help with anything about our oils and products.
                    </p>
                    <a href="{{ url('/contact-us') }}"
                       style="display:inline-block;background:var(--clr-primary);color:#fff;font-family:'DM Sans',sans-serif;font-size:13px;font-weight:700;letter-spacing:0.07em;text-transform:uppercase;padding:13px 28px;border-radius:50px;text-decoration:none;">
                        Contact Us
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- Body content typography styles --}}
<style>
.blog-body-content p { margin-bottom: 20px; color: #4a3010; }
.blog-body-content h2, .blog-body-content h3, .blog-body-content h4 {
    font-family: 'Playfair Display', serif;
    color: #1a0a00;
    margin: 32px 0 14px;
}
.blog-body-content h2 { font-size: 28px; }
.blog-body-content h3 { font-size: 22px; }
.blog-body-content ul, .blog-body-content ol {
    padding-left: 22px;
    margin-bottom: 20px;
}
.blog-body-content li { margin-bottom: 8px; color: #4a3010; }
.blog-body-content img {
    width: 100%;
    border-radius: 14px;
    margin: 24px 0;
    border: 1.5px solid #ffe6b8;
}
.blog-body-content blockquote {
    border-left: 4px solid var(--clr-primary);
    background: #fff8ee;
    padding: 18px 24px;
    margin: 28px 0;
    border-radius: 0 12px 12px 0;
    font-style: italic;
    color: #7a4500;
}
.blog-body-content a { color: var(--clr-accent); text-decoration: underline; }
@media (max-width: 991px) {
    .col-lg-4 { padding-left: 15px !important; margin-top: 40px; }
}
</style>

@endsection