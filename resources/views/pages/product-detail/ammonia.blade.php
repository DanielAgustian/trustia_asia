@extends('app')

@section('title')
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
    <div class="container">
        <div class="inner-padd"></div>
        <h5 class="txt__head">Detail Product</h5>
        <h1 class="big__blue__title mb-4">Liquid Ammonia</h1>
        <div class="row ">
            <div class="col-lg-8 col-md-6 order-2 order-md-1">
                <p class="text-paragraph text-justify mb-5">
                    Liquid Ammonia is a heavy liquid that has a high vapor pressure at ordinary temperatures, that causes
                    freezing when brought into contact with the skin, that is obtained by compressing anhydrous gaseous
                    ammonia, and that is used in refrigeration and as a solvent (as in the study of ammono compounds) and as
                    a source of gaseous ammonia
                </p>
                <div style="height: 20px"></div>
                <h5 class="txt__head ">How does AdBlue works?</h5>
                <p class="text-paragraph text-justify mb-5">
                    Ammonia is used as a raw material in the chemical industry. The ammonia produced by Pupuk Kaltim is
                    marketed in liquid form at a temperature of -33 degrees Celsius with a minimum purity of 99.5% and a
                    mixture (impurity) in the form of water a maximum of 0.5%. <br> <br>
                    Ammonia is made from natural gas as raw material which is reacted with air and water vapor which is
                    processed at high temperature and pressure gradually through several reactors containing catalysts. <br>
                    <br>
                    Pupuk Kaltim has 5 Ammonia factories and has a total capacity of 2.74 million tons of Ammonia per year.
                </p>
                <h5 class="txt__head ">Spesifications</h5>
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
                                <td class="grey__text">• Size</th>
                                <td class="blue__text">1000 liters/tank</td>
                                <td class="blue__text">liters/tank = 1 IBC tanks</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Form and Colour</th>
                                <td class="blue__text">Liquid colourless</td>
                                <td class="blue__text">-</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Ammonia</th>
                                <td class="blue__text">min 99.5%</td>
                                <td class="blue__text">%</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• H2O</th>
                                <td class="blue__text">:max 0,5%</td>
                                <td class="blue__text">%</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Melting point </th>
                                <td class="blue__text">-107.93 °F <br>
                                    -77° C</td>
                                <td class="blue__text">°F <br>
                                    °C</td>

                            </tr>
                            
                            <tr>
                                <td class="grey__text">• Boiling point </th>
                                <td class="blue__text">-28.17 ° F  <br>
                                    -33.43 ° C</td>
                                <td class="blue__text">°F <br>
                                    °C</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-1 order-md-2 text-md-end text-center">
                <img src="{{ asset('image/product/list/liquid-ammonia.png') }}" alt="amonia" class="w-100 img__detail">
            </div>
        </div>
        <h5 class="txt__head mt-5">User & Safety Information</h5>
       
        <ul class="text__gray list__detail">
            



            <li>Coolants</li>
            <li>Fertilizers
            </li>
            <li>As ingredients of mixtures or direct application in liquid form
            </li>
            <li> For the manufacture of other materials such as acids nitrate or as a neutralizing agent in water treatment,
            </li>
            <li>
                Solvents
            </li>
            <li>
                Organic synthesis.
            </li>

        </ul>

       
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
                            <img src=" {{ asset('image/product/list/' . $item->image . '.png') }}" alt="">
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
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

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
