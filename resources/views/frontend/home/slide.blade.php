<section id="hero">

    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            @foreach ($slide as $key => $item)
                <!-- Slide 1 -->
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                    style="background-image: url({{ !empty($item->image) ? url('upload/slide/' . $item->image) : url('upload/no_image.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $item->title }}</h2>
                            <p class="animate__animated animate__fadeInUp">{!! $item->description !!}</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">@lang('matrimonial.slidebtn') <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>
