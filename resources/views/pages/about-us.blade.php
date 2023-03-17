@extends('app')

@section('title')
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.5/swiper-bundle.min.css" />
@endsection

@section('content')
    <div class="container__blue">

        <div class="container__text position-relative">
            <div class="container">
                <div class="inner-padd"></div>
                <h2 class="text-white mb-4 fw-700">Align our materials to your <br> requirements.</h2>
                <div class="row align-items-start mb-5">
                    <div class="col-md-6">
                        <p class="text-white mb-0">Trustia Asia Corporation is an experienced general trade company and sales
                            & marketing arm for Ace Jaya Corporation (Indonesia).

                            <br>
                            <br>
                            Trustia Asia Corporation is a Singapore-based company, engages in export and import trading for
                            a wide range of commodities.

                            <br>
                            <br>
                            We provide commodities that are essential and beneficial to the development of its country and
                            its people in regions. Where these commodities are challenging to obtain.

                        </p>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <p class="text-white mb-0">
                            We specialize with small and medium-sized commodities. <br>
                            <strong>
                                ACE AUS 32, ACE AUS 40, ACE AUS 50, TAC Low Biuret, TAC Standard Biuret, and Coffee Beans.
                            </strong>
                            <br><br>
                            We have fulfilled many of our international customers with enthusiasm and a superb team. Our
                            services have mostly assisted <strong> Japan, Singapore, Thailand, Malaysia, Korea, America, and
                                Europe </strong>, and we will continue to provide these services.

                            <!--With spirit and a great team, we have helped many of our clients that come from overseas; <br>-->
                            <!--Japan, Singapore, Thailand, Malaysia, Korea, America, Europe, and we will continue to-->
                            <!--    help-->
                            <!--    other-->
                            <!--    countries.-->
                        </p>


                    </div>

                </div>
                <div class="swiper swiperAbout ">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 9; $i++)
                            <div class="swiper-slide">
                                <img src="{{ asset('image/homepage/banner/home-' . $i . '.png') }}" alt=""
                                    class="w-100">

                            </div>
                        @endfor



                    </div>

                </div>
                <h2 class="text-white mb-5 fw-700">Vision & Mission</h2>
                <div class="row ">
                    <div class="col-lg-6 col-md-6 mb-lg-0 mb-3">
                        <div class="card card-vision">
                            <div class="card-body">
                                <h4 class=" fw-700 mb-3" style="color: #333333">Vision</h4>
                                <p class="text-paragraph">
                                    Our company vision statement has earned us customers recognition and trust. Thus that we
                                    can keep on growing steadily throughout future.
                                    <br>
                                    <br>
                                    <strong>
                                        To contribute in the acceleration of the world's transition to environmentally
                                        friendly energy</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-lg-0 mb-3">
                        <div class="card card-vision">
                            <div class="card-body">
                                <h4 class=" fw-700 mb-3" style="color: #333333">Mission</h4>
                                <p class="text-paragraph">
                                    Our mission is to provide essential commodities to emerging economies. <br>
                                    In addition to serving businesses, at the same time to assist various countries in
                                    obtaining essential commodities for the future of the country and its people.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="blue__part">

        </div>
    </div>
    <div class="inner-padd mb-5"></div>

    <div class="container">
        <h2 class="text-center fw-700 mb-2" style="color: #1C3472">
            Our Product
        </h2>
        <div class="d-flex justify-content-center mb-4">
            <p style="max-width: 700px; color: #1C3472" class="text-center">We define a 'high-quality' product not just as a
                product that is
                safe and is built of high-quality components, but as a product that is consistent in its quality. </p>
        </div>
        <div class="row justify-content-center mb-5 no-gutters">
            @foreach ($prods as $item)
                @component('components.card.card-about-product')
                    @slot('img')
                        {{ asset('image/about-us/icon/' . $item->image . '.svg') }}
                    @endslot
                    @slot('title')
                        {{ $item->title }}
                    @endslot
                    @slot('desc')
                        {{ $item->desc }}
                    @endslot
                @endcomponent
            @endforeach
        </div>
        <img src="{{ asset('image/about-us/about-us-big.png') }}" alt="" class="w-100 ">
        <div class="inner-padd"></div>
    </div>
@endsection

@section('js')
    <script>
        var swiper = new Swiper(".swiperAbout", {
            slidesPerView: 1,

            autoplay: {
                delay: 6500,
                disableOnInteraction: false,
            },
            spaceBetween: 10,
            loop: true,
            loopFillGroupWithBlank: true,
            breakpoints: {
                // when window width is >= 320px
                350: {
                    slidesPerView: 1.25,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                500: {
                    slidesPerView: 1.5,
                    spaceBetween: 25
                },
                // when window width is >= 640px
                760: {
                    slidesPerView: 2.25,
                    spaceBetween: 25
                },
                1020: {
                    slidesPerView: 3.15,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 3.5,
                    spaceBetween: 35
                },
                1400: {
                    slidesPerView: 3.75,
                    spaceBetween: 40
                }
            }
        });
    </script>
@endsection
