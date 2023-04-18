@extends('frontend.main')
@section('title')
    Groom | Bride Details
@endsection
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('index', app()->getLocale()) }}">@lang('matrimonial.home')</a></li>
                    <li>@lang('matrimonial.matrimonial')</li>
                </ol>
                <h2>Details</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-md-3 h-50">
                        <img src="{{ !empty($matrimonial->image) ? url('upload/matrimonial/' . $matrimonial->image) : url('upload/no_image.jpg') }}"
                            alt="{{ $matrimonial->name }}" class="figure-img img-fluid rounded">
                        <div class="my-3 text-center">
                            <a href="{{ route('matrimonial.download', [app()->getLocale(), $matrimonial->id]) }}"
                                class="common-button">Download
                                Profile</a>

                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="portfolio-info">
                            <div class="d-flex justify-content-between">
                                <h3>{{ $matrimonial->name }}</h3>
                                <p class="mt-2">{!! Share::page(url($matrimonial->name))->facebook()->whatsapp()->telegram() !!}</p>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 d-flex">
                                        <h6>@lang('matrimonial.age')
                                            {!! $matrimonial->date_of_birth == ''
                                                ? $matrimonial->age
                                                : \Carbon\Carbon::parse($matrimonial->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!} Y
                                            | @lang('matrimonial.Height'): {{ $matrimonial->height }}</h6>
                                    </div>
                                    <div class="col-md-6 d-flex">
                                        <h6>@lang('matrimonial.Education'): {{ $matrimonial->education }}</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 d-flex">
                                        <h6>@lang('matrimonial.Marital Status'):
                                            {{ $matrimonial->marital_status }}</h6>
                                    </div>
                                    <div class="col-md-6 d-flex">
                                        <h6>@lang('matrimonial.Job Details'): {{ $matrimonial->work }}</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 d-flex">
                                        <h6>@lang('matrimonial.Gotra'): {{ $matrimonial->gotra }}</h6>
                                    </div>
                                    <div class="col-md-6 d-flex">
                                        <h6>@lang('matrimonial.Address'): {{ $matrimonial->address }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-info my-3">
                            <h3>@lang('matrimonial.Detailed Profile') -</h3>
                            <div class="container">
                                <div class="d-flex pt-4">
                                    <h4>@lang('matrimonial.Basic Info')</h4>
                                </div>
                                <div class="row px-5">
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.age') | @lang('matrimonial.Height')</h6>
                                        <p>{!! $matrimonial->date_of_birth == ''
                                            ? $matrimonial->age
                                            : \Carbon\Carbon::parse($matrimonial->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y') !!} Y | {{ $matrimonial->height }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Date of Birth')</h6>
                                        <p>{!! $matrimonial->date_of_birth == '' ? '' : \Carbon\Carbon::parse($matrimonial->date_of_birth)->format('d-m-Y') !!}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Gender')</h6>
                                        <p>{{ $matrimonial->gender }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Marital Status')</h6>
                                        <p>{{ $matrimonial->marital_status }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Gotra')</h6>
                                        <p>{{ $matrimonial->gotra }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Rashi')</h6>
                                        <p>{{ $matrimonial->rashi }}</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-4">
                                    <h4>@lang('matrimonial.Contact Details')</h4>
                                </div>
                                <div class="row px-5">
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Mobile Number')</h6>
                                        <p>{{ $matrimonial->phone }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Village/Town')</h6>
                                        <p>{{ $matrimonial->village }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.District')</h6>
                                        <p>{{ $matrimonial->district }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Permanent Address')</h6>
                                        <p>{{ $matrimonial->permanent_address }}</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-4">
                                    <h4>@lang('matrimonial.Education and Profession')</h4>
                                </div>
                                <div class="row px-5">
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Education')</h6>
                                        <p>{{ $matrimonial->education }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Job Details')</h6>
                                        <p>{{ $matrimonial->work }}</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-4">
                                    <h4>@lang('matrimonial.Family Details')</h4>
                                </div>
                                <div class="row px-5">
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Fathers Name')</h6>
                                        <p>{{ $matrimonial->fathers_name }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Mothers Name')</h6>
                                        <p>{{ $matrimonial->mothers_name }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.Total Members')</h6>
                                        <p>{{ $matrimonial->total_members }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.No. of Brothers')</h6>
                                        <p>{{ $matrimonial->no_of_brothers }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>@lang('matrimonial.No. of Sisters')</h6>
                                        <p>{{ $matrimonial->no_of_sisters }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
