@extends('frontend.main')
@section('title')
    {{ $blog->title }}
@endsection
@php
$recentblog = App\Models\Blog::latest()
    ->limit(5)
    ->get();
@endphp
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('index', app()->getLocale()) }}">@lang('matrimonial.home')</a></li>
                    <li>@lang('matrimonial.blog')</li>
                </ol>
                <h2>@lang('matrimonial.blog')</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <h2>{{ $blog->title }}</h2>
                        <div class="d-flex justify-content-between post">
                            <p>{{ Carbon\Carbon::parse($blog->created_at)->format('d-M-Y') }}</p>
                            <p>Admin</p>
                        </div>
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="">
                                    <img src="{{ !empty($blog->image) ? url('upload/blog/' . $blog->image) : url('upload/no_image.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            {{-- <p class="mt-2">{!! $shareBlog !!}</p> --}}
                            <p class="mt-2">{!! Share::page(url($blog->title))->facebook()->whatsapp()->telegram() !!}</p>
                        </div>
                        <div class="portfolio-description">
                            <p>
                                {!! $blog->description !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            {{-- <div class="categories">
                                <h3>Categories</h3>
                                <p>General <span>(25)</span></p>
                                <p>Lifestyle <span>(14)</span></p>
                                <p>Design <span>(10)</span></p>
                                <p>Creative <span>(12)</span></p>
                                <p>Educaion <span>(16)</span></p>
                            </div> --}}
                            <div class="recent_post">
                                <h3>@lang('matrimonial.btitle')</h3>
                                <div class="row my-2">
                                    @foreach ($recentblog as $item)
                                        <div class="col-md-4">
                                            <img src="{{ !empty($item->image) ? url('upload/blog/' . $item->image) : url('upload/no_image.jpg') }}"
                                                class="w-75 h-75" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <a href="{{ route('blog.details', [app()->getLocale(), $item->id]) }}">
                                                <p>{!! Str::limit($item->title, 80) !!}</p>
                                            </a>
                                            <p>{{ Carbon\Carbon::parse($blog->created_at)->toFormattedDateString() }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="tags">
                                <h3>Tags</h3>
                                <div class="">
                                    <a href="" class="btn-learn-more">IT</a>
                                    <a href="" class="btn-learn-more">secondary</a>
                                    <a href="" class="btn-learn-more">success</a>
                                    <a href="" class="btn-learn-more">danger</a>
                                    <a href="" class="btn-learn-more">warning</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
