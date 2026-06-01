@extends('layouts.front')
@section('content')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/images/banner/banner-1.png);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title">
                    <h1>Gallery</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <section class="project-section">
        <div class="outer-container">
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
        </div>
    </section>
@endsection
