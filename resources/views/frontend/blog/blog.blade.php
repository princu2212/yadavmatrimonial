@extends('frontend.main')
@section('title')
    All Blog
@endsection

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('index', app()->getLocale()) }}">@lang('matrimonial.home')</a></li>
                    <li>@lang('matrimonial.blog')</li>
                </ol>
                <h2>@lang('matrimonial.all blog')</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row content">
                    @foreach ($blog as $item)
                        <div class="col-lg-4  mb-3">
                            <div class="card info-box">
                                <img src="{{ !empty($item->image) ? url('upload/blog/' . $item->image) : url('upload/no_image.jpg') }}"
                                    class="card-img-top h-75" alt="">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between py-1">
                                        <p>01 June 2022</p>
                                        <p>Admin</p>
                                    </div>
                                    <a href="{{ route('blog.details', [app()->getLocale(), $item->id]) }}">
                                        <h5>{{ $item->title }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{ $blog->links('pagination::bootstrap-5') }}
            </div>
        </section>

    </main><!-- End #main -->
@endsection
