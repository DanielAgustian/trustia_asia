@extends('app')

@section('title')
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.5/swiper-bundle.min.css" />
@endsection

@section('content')
    <div class="container">
        <div class="inner-padd"></div>
        <h5 class="txt__head">Detail Product</h5>
        <h1 class="big__blue__title mb-4">TAC Urea AUS 40</h1>
        <div class="row align-items-end">
            <div class="col-lg-8 col-md-6 order-2 order-md-1">
                <p class="text-paragraph text-justify mb-5">
                    TAC Urea AUS 40 is a NOx reduction agent that has been specifically developed for use with SCR systems
                    in marine applications. Marine urea that meets the AUS 40 grade is manufactured to rigorous quality
                    standards specified by ISO 18611-1:2014, and will aid the longevity of the catalyst in the SCR system.
                </p>
                <h5 class="txt__head mb-3">Detail Product</h5>
                <div class="table__detail">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Parameters</th>
                                <th scope="col">Value</th>
                                <th scope="col">Unit</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="grey__text">• Nitrogent</th>
                                <td class="blue__text">45.00</td>
                                <td class="blue__text">Pct Min</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Biuret</th>
                                <td class="blue__text">1.0</td>
                                <td class="blue__text">Pct Max</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Moisture</th>
                                <td class="blue__text">0.5</td>
                                <td class="blue__text">Pct Max</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Size</th>
                                <td class="blue__text">1 - 3.35/ 90</td>
                                <td class="blue__text">mm/ Pct Min</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Nett Weight</th>
                                <td class="blue__text">1.000</td>
                                <td class="blue__text">Kg</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-1 order-md-2 text-md-end text-center">
                <img src="{{ asset('image/detail/iso-urea-aus.png') }}" alt="" class="w-100 img__detail">
            </div>
        </div>
        <h5 class="txt__head mt-5">User & Safety Information</h5>
        <p class="text__gray text-justify mb-0">To ensure that users of our TAC Urea AUS 40 have complete knowledge of
            its operation, we have compiled a list of guidelines to help you achieve maximum productivity.</p>
        <h5 class="txt__head mt-4 mb-2">Dos</h5>
        <ul class="text__gray list__detail">
            <li>Refill your TAC AUS 40 before it runs out.</li>
            <li> Fuel, oil, water, dust, dirt, and other contaminants should be kept away from the TAC AUS 40 storage tank.
            </li>
            <li>AUS 40 should be stored between 30 and -11 degrees Celsius.</li>
            <li> Use specialized equipment for storing and transporting TAC AUS 40.</li>

        </ul>

        <h5 class="txt__head mt-4 mb-2">Donts</h5>
        <ul class="text__gray list__detail">
            <li>Don’t add water or any other compounds into TAC AUS 40
            </li>
            <li>Don’t add water directly into the SCR system, it will damage the SCR system</li>
            <li> Don’t store Urea TAC AUS 40 in areas of direct sunlight or rain</li>
        </ul>
        <div class="row mt-5">
            <div class="col-lg-10 col-md-12">
                <div class="row">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="col-lg-3 col-md-4 col-6  mb-lg-0 mb-3">
                            <img src="{{ asset('image/detail/urea-aus-' . $i . '.png') }}" alt=""
                                class="img__prods__list">
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
    <div class="section-product mt-5">
        <div class="container pt-2">
            <div class="row justify-content-between align-items-end">
                <div class="col-lg-6 col-md-7">
                    <h2 class="big__blue__title mb-2">
                        <span style="color: black !important">See Other </span> Product
                    </h2>
                    <p class="text-paragraph mb-0">
                        We are committed to always produce a great materials for your needs
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 text-right mt-md-0 mt-3 mb-md-0 mb-4">
                    <div class="d-flex justify-content-md-end justify-content-center">
                        <div class="btn-arrow" data-do="prev">
                            <img src="{{ asset('image/homepage/arrow-left.svg') }}" alt="">
                        </div>
                        <div style="width: 50px"></div>
                        <div class="btn-arrow" data-do="next">
                            <img src="{{ asset('image/homepage/arrow-right.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper swiperHomeProd mt-4">
            <div class="swiper-wrapper">
                @foreach ($listProds as $item)
                    <div class="swiper-slide">
                        <a href="/product/detail/{{ $item->image }}" class="link-product">
                            <img src=" {{ asset('image/product/list/' . $item->image . '.png') . versioning() }}"
                                alt="">
                            <p class="swiper_para mb-0 mt-2">{{ $item->title }}</p>
                        </a>

                    </div>
                @endforeach


            </div>
        </div>

    </div>
    <div class="inner-padd"></div>
@endsection

@section('js')
  

    <script>
        var swiper = new Swiper(".swiperHomeProd", {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: {
                delay: 6500,
                disableOnInteraction: false,
            },
            spaceBetween: 10,
            loop: true,
            breakpoints: {
                // when window width is >= 320px
                350: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                500: {
                    slidesPerView: 2.5,
                    spaceBetween: 25
                },
                // when window width is >= 640px
                760: {
                    slidesPerView: 4,
                    spaceBetween: 25
                },
                1020: {
                    slidesPerView: 5,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 6.5,
                    spaceBetween: 35
                },
                1400: {
                    slidesPerView: 7,
                    spaceBetween: 40
                }
            }
        });
    </script>
    <script>
        $('.btn-arrow').click(function() {
            const swiper = document.querySelector('.swiperHomeProd').swiper;
            let do_this = $(this).data('do');
            if (do_this == 'prev') {
                swiper.slidePrev();
            } else {
                swiper.slideNext();
            }
        })
    </script>
@endsection
