@extends('app')

@section('title')
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
    <div class="container__blue">

        <div class="container__text position-relative">
            <div class="container">
                <div class="inner-padd"></div>
                <h2 class="text-white mb-4 fw-700">Align our materals to <br>
                    meet your needs.</h2>
                <div class="row align-items-center mb-5">
                    <div class="col-md-6">
                        <p class="text-white mb-0">Trustia Asia Corporation is a experienced general trade company
                            and a marketing company of Ace Jaya Corporation (Indonesia).
                            <br>
                            <br>
                            Domiciled in Singapore with export and import trading business for several important
                            commodities.
                            <br>
                            <br>
                            We distribute commodities that are important for the survival of its country and its people
                            where
                            some countries find it difficult to get these commodities.
                        </p>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3">
                        <p class="text-white mb-0">
                            We deal with small and medium-sized commodites; <br>
                            <strong>Urea AUS 40, Urea, Liquid Ammonia, Coal, Sorghum Wood Pellets, Coffee Bean, Adblue, TAC
                                low
                                bioret</strong>

                            <br><br>
                            With spirit and a great team, we have helped many of our clients that come from overseas; <br>
                            <strong>Japan, Singapore, Thailand, Malaysia, Korea, America, Europe, and we will continue to
                                help
                                other
                                countries.</strong>
                        </p>


                    </div>

                </div>
                <div class="swiper swiperAbout ">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="swiper-slide">
                                <img src="{{ asset('image/about-us/about-us-' . $i . '.png') }}" alt="">
                            </div>
                        @endfor


                    </div>

                </div>
                <h2 class="text-white mb-5 fw-700">Vision & Mission</h2>
                <div class="row ">
                    <div class="col-md-6 mb-lg-0 mb-3">
                        <div class="card card-vision">
                            <div class="card-body">
                                <h4 class=" fw-700 mb-3" style="color: #333333">Vision</h4>
                                <p class="text-paragraph">
                                    Over the years, our company has achieved constant growth.
                                    Our vision and mission has allowed us to obtain trust from overseas.
                                    <br>
                                    <br>
                                    Our vision is to be committed to provide the best service and quality,
                                    so that we will continue to expand to all countries in the world.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-lg-0 mb-3">
                        <div class="card card-vision">
                            <div class="card-body">
                                <h4 class=" fw-700 mb-3" style="color: #333333">Mission</h4>
                                <p class="text-paragraph">
                                    Our mission is to distribute basic commodities to the countries. But, not only for
                                    business but also as a form of humanity to facilitate supply to several countries that
                                    are having difficulty getting essential commodities for the survival of the country and
                                    its people.
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
            <p style="max-width: 700px; color: #1C3472" class="text-center">We define a 'high-quality' product not just as a product that is
                safe and is built of high-quality components, but as a product that is consistent in its quality. </p>
        </div>
        <div class="row justify-content-center mb-5 no-gutters">
            @foreach ($prods as $item)
                @component('components.card.card-about-product')
                    @slot('img')
                        {{asset('image/about-us/icon/'.$item->image.'.svg') }}
                    @endslot    
                    @slot('title')
                        {{$item->title}}
                    @endslot
                    @slot('desc')
                        {{$item->desc}}
                    @endslot
                @endcomponent    

            @endforeach
        </div>
        <img src="{{asset('image/about-us/about-us-big.png')}}" alt="" class="w-100 ">
        <div class="inner-padd"></div>
    </div>


@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiperAbout", {
            slidesPerView: 1,

            autoplay: {
                delay: 6500,
                disableOnInteraction: false,
            },
            spaceBetween: 10,
            loop: true,
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
