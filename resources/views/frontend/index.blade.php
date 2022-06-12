@extends('frontend.main')
@section('title')
    Welcome to Yadav Matrimonial Site
@endsection

@section('content')
    <!-- Start Hero -->
    @include('frontend.home.slide')
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Bride Section ======= -->
        @include('frontend.home.matrimonial')
        <!-- End Bride Section -->

        <!-- ======= Blog Section ======= -->
        @include('frontend.home.blog')
        <!-- End Blog Section -->

        <!-- ======= About Section ======= -->
        @include('frontend.home.about')
        <!-- End About Section -->

        <!-- ======= Contact Section ======= -->
        @include('frontend.home.contact')
        <!-- End Contact Section -->

    </main>
@endsection
