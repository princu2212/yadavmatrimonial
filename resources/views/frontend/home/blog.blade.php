<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Blog</h2>
            <p>@lang('matrimonial.btitle')</p>
        </div>
        <div class="row content mb-3">
            @foreach ($blog as $item)
                <div class="col-lg-4">
                    <div class="card info-box">
                        <img src="{{ !empty($item->image) ? url('upload/blog/' . $item->image) : url('upload/no_image.jpg') }}"
                            class="card-img-top h-75" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between py-1">
                                <p>{{ Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}</p>
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
        <div class="view-more text-center">
            <a href="{{ route('all.blog', app()->getLocale()) }}" class="btn-view-more">View More</a>
        </div>
    </div>
</section>
