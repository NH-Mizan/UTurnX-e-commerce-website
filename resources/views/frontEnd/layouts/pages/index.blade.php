@extends('frontEnd.layouts.master')
@section('content')


    <!--BANNER SLIDER SECTION  -->
    <section class="slider-section">
        <div class="main-slider owl-carousel">
            <img src="{{ asset('public/frontEnd')}}/images/1.webp " alt="">
            <img src="{{ asset('public/frontEnd')}}/images/2.webp " alt="">
            <img src="{{ asset('public/frontEnd')}}/images/3.webp " alt="">
            <img src="{{ asset('public/frontEnd')}}/images/4.webp " alt="">
        </div>
    </section>



    <section class="main-slider-section wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
        <div class="container">
            <div class="category-slider owl-carousel owl-theme">
                <a href="">
                    <div class="category-card">
                        <img src="{{ asset('public/frontEnd')}}/images/1.webp " alt="">
                    </div>
                </a>
                <a href="">
                    <div class="category-card">
                        <img src="{{ asset('public/frontEnd')}}/images/3.webp " alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="category-card">
                        <img src="{{ asset('public/frontEnd')}}/images/2.webp " alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="category-card">
                        <img src="{{ asset('public/frontEnd')}}/images/4.webp " alt="">
                    </div>
                </a>

            </div>
        </div>
    </section>


@endsection