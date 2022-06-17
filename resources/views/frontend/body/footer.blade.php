@php
$footer = App\Models\Footer::find(1);
@endphp

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3 class="text-uppercase">@lang('matrimonial.brand')</h3>
                    <p>
                        {{ $footer->address }}<br>
                        <strong>@lang('matrimonial.Mobile Number'):</strong> {{ $footer->phone }}<br>
                        <strong>@lang('matrimonial.Email'):</strong> {{ $footer->email }}<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a
                                href="{{ route('index', app()->getLocale()) }}">@lang('matrimonial.home')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                href="{{ route('all.matrimonial', app()->getLocale()) }}">@lang('matrimonial.matrimonial')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                href="{{ route('all.blog', app()->getLocale()) }}">@lang('matrimonial.blog')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                href="{{ route('about', app()->getLocale()) }}">@lang('matrimonial.about')</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a
                                href="{{ route('contact', app()->getLocale()) }}">@lang('matrimonial.contact')</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i><a
                                href="{{ route('all.matrimonial', app()->getLocale()) }}">@lang('matrimonial.matrimonial')</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="#matrimonial">@lang('matrimonial.mtitle')</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="#blog">@lang('matrimonial.btitle')</a></li>
                        <li><i class="bx bx-chevron-right"></i><a
                                href="{{ route('contact', app()->getLocale()) }}">@lang('matrimonial.ctitle')</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Social Media</h4>
                    <ul class="social-links">
                        <li><a href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}"
                                class="whatsapp" target="blank"><i class="bx bxl-whatsapp"></i></a>
                        </li>
                        <li><a href="{{ $footer->facebook }}" class="facebook" target="blank"><i
                                    class="bx bxl-facebook"></i></a>
                        </li>
                        <li><a href="{{ $footer->instagram }}" class="instagram" target="blank"><i
                                    class="bx bxl-instagram"></i></a></li>
                        <li><a href="{{ $footer->twitter }}" class="twitter" target="blank"><i
                                    class="bx bxl-twitter"></i></a>
                        </li>

                    </ul>
                </div>

                {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Get updates on Yadav Matrimonial</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>@lang('matrimonial.brand')</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://princeyadav.net/">Prince Yadav</a>
        </div>
    </div>
</footer>
