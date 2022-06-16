@extends('frontend.main')
@section('title')
    Contact Us
@endsection

@section('content')
    @php
    $members = App\Models\ContactMember::latest()->get();
    @endphp
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('index', app()->getLocale()) }}">@lang('matrimonial.home')</a></li>
                    <li>Contact</li>
                </ol>
                <h2>@lang('matrimonial.contact')</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                    <p>@lang('matrimonial.ctitle')</p>
                </div>
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($members as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="{{ !empty($item->image) ? url('upload/contact_members/' . $item->image) : url('upload/no_image.jpg') }}"
                                            class="testimonial-img" alt="">
                                        <h3>{{ $item->name }}</h3>
                                        <h4>{{ $item->position }}</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            {{ $item->about }}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bx bx-map"></i>
                                <h4>@lang('matrimonial.Location'):</h4>
                                <p>Mahadev Ghat, Raipur Chhattisgarh </p>
                            </div>

                            <div class="email mt-5">
                                <i class="bx bx-envelope"></i>
                                <h4>@lang('matrimonial.Email'):</h4>
                                <p>princu2212@gmail.com </p>
                            </div>

                            <div class="phone mt-5">
                                <i class="bx bx-phone-call"></i>
                                <h4>@lang('matrimonial.Mobile Number'):</h4>
                                <p>+91 99779 65713 </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="{{ route('message.store') }}" method="POST" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-lg-0">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="number" class="form-control" name="phone"
                                        placeholder="Your Mobile Number" required>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="form-group my-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
