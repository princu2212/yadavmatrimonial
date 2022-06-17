@extends('frontend.main')
@section('title')
    About Yadav Matrimonial
@endsection
@php
$aboutUs = App\Models\About::find(1);
@endphp
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('index', app()->getLocale()) }}">@lang('matrimonial.home')</a></li>
                    <li>@lang('matrimonial.about')</li>
                </ol>
                <h2>@lang('matrimonial.about')</h2>
            </div>
        </section><!-- End Breadcrumbs -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row content">
                    <div class="col-lg-6">
                        <img src="{{ !empty($aboutUs->image) ? url('upload/about/' . $aboutUs->image) : url('upload/no_image.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            {!! $aboutUs->about !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
