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
        <h1 class="big__blue__title mb-4">AdBlue</h1>
        <div class="row align-items-end">
            <div class="col-lg-8 col-md-6 order-2 order-md-1">
                <p class="text-paragraph text-justify mb-5">
                    AdBlue is a clear mixture of demineralised water and pure urea (32.5%) and is also referred to as Diesel
                    Exhaust Fluid or AUS 32. <br>
                    It is often used for reducing the nitrous oxide emissions of diesel engines, which is automatically
                    sprayed into a car’s exhaust.
                </p>
                <div class="row">
                    @for ($i = 1; $i < 4; $i++)
                        <div class="col-md-4 col-6">
                            <img src="{{ asset('image/detail/adblue-' . $i . '.png') }}" alt=""
                                class="img__prods__list">
                        </div>
                    @endfor

                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-1 order-md-2 text-md-end text-center">
                <img src="{{ asset('image/detail/adblue-detail.png') }}" alt="" class="w-100 img__detail">
            </div>
        </div>
        <h5 class="txt__head mt-5">How does AdBlue works?</h5>
        <p class="text__gray text-justify mb-0">AdBlue® works in conjunction with vehicle engine SCR systems to reduce
            nitrogen oxide (NOx) exhaust emissions. Active emissions control technology vehicles are usually identified by
            the use of the words 'SCR' or 'Blue' in their model names.
            <br> <br>
            AdBlue® DEF is sprayed and mixed into exhaust gas after it passes through the diesel particulate filter and
            enters the SCR catalytic converter via a dosing control system. In this case, the ammonia in the urea reacts
            with NOx in the exhaust stream, neutralizing it to form harmless nitrogen (N2) and water vapour (H2O), while
            also lowering total fuel consumption by 2-6 percent.
            <br> <br>
            AdBlue and SCR systems are extremely effective, reducing NOx emissions by up to 90%, hydrocarbon and carbon
            monoxide emissions by 50% to 90%, and particulate emissions by 30% to 50%.
        </p>
        <h5 class="txt__head mt-4 mb-2">Merk : JSJ AdBlue & J-BLUE OITA Aus 40 </h5>
        

        
        <div class="row mt-5">
            <div class="col-lg-12 ">
                <div class="row">
                    @for ($i = 4; $i <= 6; $i++)
                        <div class="col-lg-3 col-md-4 col-6  mb-lg-0 mb-3">
                            <img src="{{ asset('image/detail/adblue-' . $i . '.png') }}" alt=""
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
