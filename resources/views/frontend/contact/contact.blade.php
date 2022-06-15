@extends('frontend.main')
@section('title')
    Contact Us
@endsection

@section('content')
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
        <section id="testimonials" class="testimonials section-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>FOR GENERAL ENQUIRY</p>
                </div>

                <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events aos-init aos-animate"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper" id="swiper-wrapper-bf522733e33b244d" aria-live="off"
                        style="transform: translate3d(-3824px, 0px, 0px); transition-duration: 0ms;">
                        <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 936px; margin-right: 20px;"
                            data-swiper-slide-index="0">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/img/testimonials/testimonials-1.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                        rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                        risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="4 / 5"
                            style="width: 936px; margin-right: 20px;" data-swiper-slide-index="3">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('frontend/img/testimonials/testimonials-4.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                        dolore labore illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                    </div>
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                            tabindex="0" role="button" aria-label="Go to slide 3"></span><span
                            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                            aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 5"></span>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

            </div>
        </section>
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
