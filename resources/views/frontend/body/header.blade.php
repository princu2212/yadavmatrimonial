@php
$route = Route::current()->getName();
@endphp

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="{{ route('index', app()->getLocale()) }}">@lang('matrimonial.brand')</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ $route == 'index' ? 'active' : '' }}"
                        href="{{ route('index', app()->getLocale()) }}">@lang('matrimonial.home')</a></li>
                <li><a class="nav-link scrollto {{ $route == 'all.matrimonial' ? 'active' : '' }}"
                        href="{{ route('all.matrimonial', app()->getLocale()) }}">@lang('matrimonial.matrimonial')</a></li>
                <li><a class="nav-link scrollto {{ $route == 'all.blog' ? 'active' : '' }}"
                        href="{{ route('all.blog', app()->getLocale()) }}">@lang('matrimonial.blog')</a></li>
                <li><a class="nav-link scrollto {{ $route == 'about' ? 'active' : '' }}"
                        href="{{ route('about', app()->getLocale()) }}">@lang('matrimonial.about')</a></li>
                <li><a class="nav-link scrollto {{ $route == 'contact' ? 'active' : '' }}"
                        href="{{ route('contact', app()->getLocale()) }}">@lang('matrimonial.contact')</a>
                </li>

                <li class="dropdown"><a href="#"><span>@lang('matrimonial.language')</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route(Route::currentRouteName(), 'en') }}">@lang('matrimonial.en')</a></li>
                        <li><a href="{{ route(Route::currentRouteName(), 'hi') }}">@lang('matrimonial.hi')</a></li>
                    </ul>
                </li>
                <li><a class="getstarted scrollto" href="{{ route('add.matrimonial', app()->getLocale()) }}"><i
                            class="bi bi-person-plus-fill"></i>@lang('matrimonial.add')</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
