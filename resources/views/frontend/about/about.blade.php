@extends('frontend.main')
@section('title')
    About Yadav Matrimonial
@endsection

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
                        <img src="{{ asset('frontend/img/favicon.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>

            </div>
        </section>
    @endsection
