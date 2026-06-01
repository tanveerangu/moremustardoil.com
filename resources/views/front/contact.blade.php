@extends('layouts.front')
@section('content')
    @php
        $socialLinks = json_decode($settings->social_links, true);
        $phone_numbers = json_decode($settings->contact_phones, true);
        $emails = json_decode($settings->contact_emails, true);
    @endphp

    <!--Page Title-->
   <section class="page-title" style="background-image:url('{{ asset('assets/images/banner/banner-1.png') }}');">

    <div class="auto-container">

        <div class="page-banner-content">

            <h1>Contact Us</h1>

            <p class="page-banner-text">
                  We'd love to hear from you. Get in touch with MOR Oil for product inquiries,
    dealership opportunities, customer support, or any questions about our
    premium edible oil range.
            </p>

            <a href="{{ url('/contact-us') }}" class="theme-btn">
                    CONTACT US 
                </a>

        </div>

    </div>

</section>
    <!--End Page Title-->

    <!-- contact-section -->
    <section class="contact-section">

        <span class="shop-bg-glow shop-bg-glow--top-right"></span>
        <span class="shop-bg-glow shop-bg-glow--bottom-left"></span>

        <div class="auto-container">

            <div class="row clearfix align-items-start">

                {{-- ── Left: Info Panel ── --}}
                <div class="col-lg-5 col-md-12 col-sm-12 info-column mb-5 mb-lg-0">
                    <div class="contact-info-card sec-title">

                        {{-- Header --}}
                        <p class="shop-eyebrow">Get In Touch</p>
                        <h2 class="shop-heading ">
                    Contact with <span class="shop-heading__accent"> our team</span>
                </h2>

                        {{-- Divider --}}
                        <div class="shop-divider justify-content-start mb-4"
                             style="margin: 0 0 28px;">
                            <span class="shop-divider__line"></span>
                            <span class="shop-divider__dot"></span>
                            <span class="shop-divider__line shop-divider__line--rev"></span>
                        </div>

                        <div class="text">
                            We'd love to hear from you. Reach out for product inquiries,
                            dealership opportunities, or any questions about our premium
                            edible oil range.
</div>

                        {{-- Info Items --}}
                        <ul class="contact-info-list">
                            <li class="contact-info-list__item">
                                <span class="contact-info-list__icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </span>
                                <span class="contact-info-list__text">
                                    {!! $settings->address !!}
                                </span>
                            </li>

                            @if (!empty($phone_numbers))
                                @foreach ($phone_numbers as $item)
                                    <li class="contact-info-list__item">
                                        <span class="contact-info-list__icon">
                                            <i class="far fa-phone"></i>
                                        </span>
                                        <a href="tel:{{ $item }}"
                                           class="contact-info-list__text contact-info-list__link">
                                            {{ $item }}
                                        </a>
                                    </li>
                                @endforeach
                            @endif

                            @if (!empty($emails))
                                @foreach ($emails as $item)
                                    <li class="contact-info-list__item">
                                        <span class="contact-info-list__icon">
                                            <i class="far fa-envelope-open"></i>
                                        </span>
                                        <a href="mailto:{{ $item }}"
                                           class="contact-info-list__text contact-info-list__link">
                                            {{ $item }}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>

                        {{-- Social --}}
                        <div class="contact-social">
                            <p class="contact-social__label">Follow Us</p>
                            <div class="contact-social__links">
                                @if (!empty($socialLinks['facebook']))
                                    <a href="{{ $socialLinks['facebook'] }}" target="_blank"
                                       class="contact-social__btn" aria-label="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                @endif
                                @if (!empty($socialLinks['twitter']))
                                    <a href="{{ $socialLinks['twitter'] }}" target="_blank"
                                       class="contact-social__btn" aria-label="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                @endif
                                @if (!empty($socialLinks['instagram']))
                                    <a href="{{ $socialLinks['instagram'] }}" target="_blank"
                                       class="contact-social__btn" aria-label="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @endif
                                @if (!empty($socialLinks['youtube']))
                                    <a href="{{ $socialLinks['youtube'] }}" target="_blank"
                                       class="contact-social__btn" aria-label="YouTube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                {{-- ── Right: Form ── --}}
                <div class="col-lg-7 col-md-12 col-sm-12 form-column">

                    @if (session('success'))
                        <div class="contact-alert-success">
                            <i class="far fa-check-circle me-2"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="contact-form-card sec-title">

                        <p class="shop-eyebrow">Send A Message</p>
                        <h2 class="contact-form-card__title">
                            We're Here to <span class="shop-heading__accent">Help</span>
                        </h2>

                        <div class="shop-divider justify-content-start mb-4"
                             style="margin: 0 0 32px;">
                            <span class="shop-divider__line"></span>
                            <span class="shop-divider__dot"></span>
                            <span class="shop-divider__line shop-divider__line--rev"></span>
                        </div>

                        <form method="post" action="{{ route('enquiry') }}" class="contact-form">
                            @csrf

                            <div class="contact-form__group">
                                <label class="contact-form__label">Your Name</label>
                                <input class="contact-form__input"
                                       type="text" name="name"
                                       placeholder="Enter your full name" required>
                            </div>

                            <div class="contact-form__group">
                                <label class="contact-form__label">Email Address</label>
                                <input class="contact-form__input"
                                       type="email" name="email"
                                       placeholder="Enter your email address" required>
                            </div>

                            <div class="contact-form__group">
                                <label class="contact-form__label">Phone Number</label>
                                <input class="contact-form__input"
                                       type="text" name="phone"
                                       placeholder="Enter your phone number" required>
                            </div>

                            <div class="contact-form__group">
                                <label class="contact-form__label">Your Message</label>
                                <textarea class="contact-form__input contact-form__textarea"
                                          name="message"
                                          placeholder="Tell us how we can help…"
                                          required></textarea>
                            </div>

                            <div class="contact-form__footer">
                                <button class="shop-btn-all" type="submit">
                                    Send Message &nbsp;→
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact-section end -->

    <!-- google-map -->
    <section class="contact-map-section">
        {!! $settings->map_iframe !!}
    </section>
    <!-- google-map end -->

@endsection