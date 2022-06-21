<section id="matrimonial" class="matrimonial">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Matrimonial</h2>
            <p>@lang('matrimonial.mtitle')</p>
        </div>

        <div class="row">
            @foreach ($matrimonial as $item)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{ !empty($item->image) ? url('upload/matrimonial/' . $item->image) : url('upload/no_image.jpg') }}"
                            class="card-img-top h-75" alt="{{ $item->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="my-0">@lang('matrimonial.age'): {!! $item->date_of_birth == ''
    ? $item->age
    : \Carbon\Carbon::parse($item->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!} Y | @lang('matrimonial.Height'):
                                {{ $item->height }}</p>
                            <p class="my-0">@lang('matrimonial.Location'): {{ $item->address }}</p>
                            <p class="card-text my-0">@lang('matrimonial.Job Details'): {{ $item->work }}</p>
                            <a href="{{ route('matrimonial.details', [app()->getLocale(), $item->id]) }}"
                                class="btn-learn-more">@lang('matrimonial.profile')</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="view-more text-center">
            <a href="{{ route('all.matrimonial', app()->getLocale()) }}" class="btn-view-more">@lang('matrimonial.View More')</a>
        </div>
    </div>
</section>
