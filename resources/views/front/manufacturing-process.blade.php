@extends('layouts.front')
@section('content')

<!--Page Title-->
 <section class="page-title" style="background-image:url('{{ asset('assets/images/banner/banner-1.png') }}');">

    <div class="auto-container">

        <div class="page-banner-content">

            <h1>Manufacturing Process</h1>

            <p class="page-banner-text">
                From carefully selected mustard seeds to hygienic packaging,
    every <br>step of our manufacturing process is designed to ensure
    purity, freshness, <br>and consistent quality in every bottle.
            </p>

            <a href="{{ url('/contact-us') }}" class="theme-btn">
                    CONTACT US 
                </a>

        </div>

    </div>

</section>
<!--End Page Title-->

<!-- manufacturing-intro -->
<section class="manufacturing-intro centred">
    <div class="auto-container">
        <div class="sec-title centred">
            <p class="shop-eyebrow">MOR Oil</p>
            <h2 class="shop-heading">Our <span class="shop-heading__accent">Process</span></h2>
            <div class="shop-divider">
                <span class="shop-divider__line"></span>
                <span class="shop-divider__dot"></span>
                <span class="shop-divider__line shop-divider__line--rev"></span>
            </div>
            <div class="text" style="max-width:700px; margin: 0 auto;">
                From the finest mustard seeds to your kitchen — every drop of MOR oil passes through a rigorous, time-honoured process designed to preserve purity, flavour, and nutrition.
            </div>
        </div>
    </div>
</section>
<!-- manufacturing-intro end -->

<!-- manufacturing-process-section -->
<section class="mfg-section">
    <div class="auto-container about">

        <!-- Step 1 — Seed Selection -->
        <div class="mfg-step mfg-step--left">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-image-col">
                    <div class="mfg-image-wrap">
                        <span class="mfg-step-number">01</span>
                        <figure class="mfg-image">
                           <img src="{{ asset('assets/images/process/1.jpg') }}" alt="Seed Selection">
                        </figure>
                        <div class="mfg-icon-badge">
                            <i class="fal fa-seedling"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-content-col">
                    <div class="mfg-content">
                        <span class="mfg-step-label">Step 01</span>
                        <h2>Seed Selection</h2>
                        <div class="mfg-divider"></div>
                        <p>
                            Finest brown mustard seeds are sourced from select suppliers in the states of Madhya Pradesh, Haryana, Gujarat, Rajasthan and Uttar Pradesh. Each batch is carefully inspected for size, colour, and oil content before entering our facility, ensuring only the highest-grade raw material is used.
                        </p>
                        <ul class="mfg-feature-list">
                            <li><i class="fal fa-check-circle"></i> Handpicked premium-grade mustard seeds</li>
                            <li><i class="fal fa-check-circle"></i> Sourced from 5 major agricultural belts</li>
                            <li><i class="fal fa-check-circle"></i> Strict batch-level quality inspections</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2 — Quality Control -->
        <div class="mfg-step mfg-step--right">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-content-col order-lg-1 order-2">
                    <div class="mfg-content mfg-content--right">
                        <span class="mfg-step-label">Step 02</span>
                        <h2>Quality Control</h2>
                        <div class="mfg-divider"></div>
                        <p>
                            Randomly selected samples from each consignment undergo extensive testing in our in-house laboratory to ensure high oil content and low acid values. Every parameter — moisture, free fatty acids, peroxide value — is verified against FSSAI standards before processing begins.
                        </p>
                        <ul class="mfg-feature-list">
                            <li><i class="fal fa-check-circle"></i> In-house NABL-compliant laboratory</li>
                            <li><i class="fal fa-check-circle"></i> FSSAI parameter compliance at every step</li>
                            <li><i class="fal fa-check-circle"></i> Moisture, FFA & peroxide value testing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-image-col order-lg-2 order-1">
                    <div class="mfg-image-wrap mfg-image-wrap--alt">
                        <span class="mfg-step-number">02</span>
                        <figure class="mfg-image">
<img src="{{ asset('assets/images/process/2.jpg') }}" alt="Quality Control">
                        </figure>
                        <div class="mfg-icon-badge mfg-icon-badge--alt">
                            <i class="fal fa-microscope"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3 — Crushing -->
        <div class="mfg-step mfg-step--left">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-image-col">
                    <div class="mfg-image-wrap">
                        <span class="mfg-step-number">03</span>
                        <figure class="mfg-image">
                          <img src="{{ asset('assets/images/process/3.jpg') }}" alt="Crushing">
                        </figure>
                        <div class="mfg-icon-badge">
                            <i class="fal fa-cog"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-content-col">
                    <div class="mfg-content">
                        <span class="mfg-step-label">Step 03</span>
                        <h2>Crushing</h2>
                        <div class="mfg-divider"></div>
                        <p>
                            Seeds are crushed in a modernised version of the Bengal Ghani, producing the same quality oil as the traditional ox-driven machine. Adhering to the traditional process, a wooden baton from the Tamarind tree is inserted in the crushing bowl to lend higher pungency to the extracted oil.
                        </p>
                        <ul class="mfg-feature-list">
                            <li><i class="fal fa-check-circle"></i> Kachi Ghani cold-press technique</li>
                            <li><i class="fal fa-check-circle"></i> Traditional Tamarind wood baton process</li>
                            <li><i class="fal fa-check-circle"></i> No external heat applied — nutrients preserved</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 4 — Purification -->
        <div class="mfg-step mfg-step--right">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-content-col order-lg-1 order-2">
                    <div class="mfg-content mfg-content--right">
                        <span class="mfg-step-label">Step 04</span>
                        <h2>Purification</h2>
                        <div class="mfg-divider"></div>
                        <p>
                            The oil is meticulously cleaned from any impurities using sedimentation and double filtration. It is then transferred under careful supervision in a controlled environment into clean and hygienic containers, maintaining the natural integrity and flavour of the oil throughout.
                        </p>
                        <ul class="mfg-feature-list">
                            <li><i class="fal fa-check-circle"></i> Multi-stage sedimentation & filtration</li>
                            <li><i class="fal fa-check-circle"></i> Controlled hygienic transfer environment</li>
                            <li><i class="fal fa-check-circle"></i> Zero chemical additives or preservatives</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-image-col order-lg-2 order-1">
                    <div class="mfg-image-wrap mfg-image-wrap--alt">
                        <span class="mfg-step-number">04</span>
                        <figure class="mfg-image">
                           <img src="{{ asset('assets/images/process/4.jpg') }}" alt="Purification">
                        </figure>
                        <div class="mfg-icon-badge mfg-icon-badge--alt">
                            <i class="fal fa-filter"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 5 — Packaging -->
        <div class="mfg-step mfg-step--left">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-image-col">
                    <div class="mfg-image-wrap">
                        <span class="mfg-step-number">05</span>
                        <figure class="mfg-image">
                            <img src="{{ asset('assets/images/process/5.jpeg') }}" alt="Packaging">
                        </figure>
                        <div class="mfg-icon-badge">
                            <i class="fal fa-box-open"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mfg-content-col">
                    <div class="mfg-content">
                        <span class="mfg-step-label">Step 05</span>
                        <h2>Packaging</h2>
                        <div class="mfg-divider"></div>
                        <p>
                            Automated bottling machines are used to safely pack every product with minimal human intervention. Safety seals are used to ensure no tampering occurs en-route to our customers and the package is delivered just as it left our warehouse — fresh, sealed, and pure.
                        </p>
                        <ul class="mfg-feature-list">
                            <li><i class="fal fa-check-circle"></i> Automated food-grade bottling lines</li>
                            <li><i class="fal fa-check-circle"></i> Tamper-proof safety seals on every unit</li>
                            <li><i class="fal fa-check-circle"></i> Multiple pack sizes for home & commercial use</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- manufacturing-process-section end -->

<!-- process-timeline strip -->
<section class="mfg-timeline-strip centred">
    <div class="auto-container">
        <div class="mfg-timeline">
            <div class="mfg-timeline-item">
                <div class="mfg-tl-icon"><i class="fal fa-seedling"></i></div>
                <p>Seed Selection</p>
            </div>
            <div class="mfg-timeline-arrow"><i class="fal fa-arrow-right"></i></div>
            <div class="mfg-timeline-item">
                <div class="mfg-tl-icon"><i class="fal fa-microscope"></i></div>
                <p>Quality Control</p>
            </div>
            <div class="mfg-timeline-arrow"><i class="fal fa-arrow-right"></i></div>
            <div class="mfg-timeline-item">
                <div class="mfg-tl-icon"><i class="fal fa-cog"></i></div>
                <p>Crushing</p>
            </div>
            <div class="mfg-timeline-arrow"><i class="fal fa-arrow-right"></i></div>
            <div class="mfg-timeline-item">
                <div class="mfg-tl-icon"><i class="fal fa-filter"></i></div>
                <p>Purification</p>
            </div>
            <div class="mfg-timeline-arrow"><i class="fal fa-arrow-right"></i></div>
            <div class="mfg-timeline-item">
                <div class="mfg-tl-icon"><i class="fal fa-box-open"></i></div>
                <p>Packaging</p>
            </div>
        </div>
    </div>
</section>
<!-- process-timeline strip end -->

@endsection