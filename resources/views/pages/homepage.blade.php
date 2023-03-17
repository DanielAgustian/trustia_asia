@extends('app')

@section('title')
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.5/swiper-bundle.min.css" />
@endsection

@section('content')
    {{-- Tester --}}
    {{-- Section Banner --}}
    <div class="section-banner text-center my-5">
        <div class="position-relative">
            <img src="{{ asset('image/circle-1.png') }}" class="position-absolute d-lg-block d-none"
                style="bottom: 5%; left:-25px;">
            <img src="{{ asset('image/circle-2.png') }}" class="position-absolute d-lg-block d-none"
                style="top: -100px; right:0px; opacity: 0.85; width: 300px">
            <div class="container">
                <h1 class="text-center big__blue__title mb-4">
                    Experienced General <br> Trade Company.
                </h1>
                <div class="d-flex justify-content-center mb-4">
                    <p class="text-center text-paragraph" style="max-width: 700px">
                        A world-class national company for plant nutrition with a sustainable agricultural solutions
                        and capable of delivering social-economic impact nationally.
                    </p>
                </div>

            </div>


            <a href="{{ route('aboutUs') }}" class="btn btn__primary">
                Learn More
            </a>
            <div class="swiper swiperBanner mt-5">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 9; $i++)
                        <div class="swiper-slide">
                            <img src="{{ asset('image/homepage/banner/home-' . $i . '.png') }}" alt=""
                                class="w-100">
                            <div style="height: 35px"></div>

                        </div>
                    @endfor



                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="inner-padd"></div>
        </div>

    </div>

    {{-- Section About Us --}}
    <div class="section position-relative">
        <div class="blue__sm_bg"></div>
        <div class="row my-5 position-relative align-items-center me-lg-3 ">
            <div class="col-lg-6 col-md-6 h-100 position-relative">
                <video controls preload="none" width="360" class="w-100 video__home"
                    poster="{{ asset('video/ph_home.png') }}" controls>
                    <source src="{{ asset('video/home.mp4') }}#t=1.75" type="video/mp4" />
                </video>

            </div>
            <div class="col-xxl-5 col-lg-6 col-md-6 mt-3 mt-md-0 mx-md-0 mx-2 pe-lg-3">
                <p class="lil__title mb-4">about us</p>
                <h2 class="big__blue__title mb-4" style="max-width: 570px">
                    We are committed to aligning our products and services to fulfill your requirements.
                </h2>
                <p class="text-paragraph mb-5" style="max-width: 600px">
                    Trustia Asia Corporation is a Singapore-based general trade corporation company functions as a marketing
                    arm for Ace Jaya Corporation's (Indonesia) products and services.
                    <br><br>
                    We have assisted several of our international clients achieve their business objectives with enthusiasm
                    and a delegated team: <br>

                    <strong> Japan, Singapore, Thailand, Malaysia, Korea, America, and Europe </strong>
                    <br> <br>
                    We work with materials that are small and medium in size, such as ACE AUS 32, ACE AUS 40, ACE AUS 50,
                    TAC Low Biuret, TAC Standard Biuret, and Coffee Beans.


                    <!--Trustia Asia Corporation is a experienced general trade company-->
                    <!--and a marketing company of Ace Jaya Corporation (Indonesia).-->
                    <!--<br><br>-->
                    <!--with spirit and a great team, we have helped many of our clients that come from overseas: <br>-->
                    <!--<strong>Japan, Singapore, Thailand, Malaysia, Korea, America, and Europe </strong>-->
                    <!--<br><br>-->
                    <!--We deal with small and medium-sized materials;-->
                    <!--Urea, Liquid Ammonia, Coal, Sorghum Wood Pellet, and Coffee Bean.-->
                </p>
                <a href="{{ route('aboutUs') }}" class="">
                    <button class="btn btn__primary">
                        Learn More
                    </button>
                </a>

            </div>
        </div>

    </div>
    <div class="inner-padd"></div>
    {{-- Section Our Product --}}
    <div class="section-product mb-5">
        <div class="container">
            <div class="row justify-content-center align-items-end">
                <div class="col-lg-6 col-md-7">
                    <h2 class="big__blue__title mb-2">
                        <span style="color: black !important">Introducing </span> Our Product

                    </h2>
                    <p class="text-paragraph mb-0">
                        We are committed to always produce a great materials for your needs
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 text-right mt-md-0 mt-3 mb-md-0 mb-4 ">

                    <div class="d-lg-none d-flex justify-content-md-end justify-content-center">
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
        <div class="container">
            <div class="swiper swiperHomeProd mt-4">
                <div class="swiper-wrapper">
                    @foreach ($prods as $item)
                        <div class="swiper-slide">
                            <a href="{{route('productDetail', ['slug' =>  $item->image]) }}" class="link-product">
                                <img src=" {{ asset('image/product/list/' . $item->image . '.png') . versioning() }}"
                                    alt="">
                                <p class="swiper_para mb-0 mt-2">{{ $item->title }}</p>
                            </a>
    
                        </div>
                    @endforeach
    
    
                </div>
            </div>
        </div>
       

    </div>
    {{-- Section Our Team --}}
    <div class="section-team position-relative py-5">
        <div class="bg__part"></div>
        <div class="container position-relative">
            <h2 class="title__white text-center">
                Our Team
            </h2>
            <div class="d-flex justify-content-center">
                <p style="color: white; max-width: 700px" class="text-center text-md-start">
                    Behind every great company, there must have a great team.
                    Now, meet them.
                </p>
            </div>
            <div class="inner-padd"></div>
            <div class="row justify-content-md-between justify-content-center">
                @component('components.card.card-team')
                    @slot('img')
                        {{ asset('image/homepage/founder/ruddy.png') }}
                    @endslot
                    @slot('rank')
                        Founder
                    @endslot
                    @slot('name')
                        Ruddy
                    @endslot
                    @slot('details')
                        <p class="txt-detail mb-1">Ruddy is a founder of Trustia Asia Corporation and also has succeeded in building
                            some
                            other corporation such as :
                        </p>
                        <ul class="txt-detail">
                            <li>
                                PT.PUTRA SURYA PRATAMA TOBACCO
                            </li>
                            <li> ACE JAYA GROUP</li>

                        </ul>
                    @endslot
                @endcomponent
                @component('components.card.card-team')
                    @slot('img')
                        {{ asset('image/homepage/founder/lydia.png') }}
                    @endslot
                    @slot('rank')
                        Co-Founder
                    @endslot
                    @slot('name')
                        Lydia Masehi
                    @endslot
                    @slot('details')
                        <p class="txt-detail mb-1">Lydia is a co-founder of Trustia Asia Corporation and also has succeeded in
                            building
                            some other corporation such as:


                        </p>
                        <ul class="txt-detail">
                            <li>
                                PT.PUTRA SURYA PRATAMA TOBACCO
                            </li>
                            <li> ACE JAYA GROUP</li>
                            <li>Lekker Bakmi Hotplate</li>
                        </ul>
                    @endslot
                @endcomponent
                @component('components.card.card-team')
                    @slot('img')
                        {{ asset('image/homepage/founder/enrico.png') }}
                    @endslot
                    @slot('rank')
                        Director
                    @endslot
                    @slot('name')
                        Enrico
                    @endslot
                    @slot('details')
                        <p class="txt-detail mb-1">Enrico is a director of Trustia Asia Corporation and also has succeeded in
                            building
                            some other corporation such as :


                        </p>
                        <ul class="txt-detail">
                            <li>
                                SeDesign & Iko visual
                            </li>
                            <li> PT. Soema Indo Property</li>

                        </ul>
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
    {{-- Our Partner's Video --}}
    <div class="inner-padd"></div>
    <div class="container mb-5">
        <h2 class="big__blue__title mb-3 text-center">
            Our partner's video
        </h2>
        <div class="d-flex justify-content-center mb-5">
            <p class="text-center text-paragraph" style="max-width:700px; color: #333333">
                "A world-class national company for plant nutrition and sustainable agricultural solutions and capable of
                delivering economic and social impact nationally."</p>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-6">
                <video src="{{ asset('video/pupuk-sriwijaya.mp4') }}" class="video__partner" controls preload="none"
                    poster="{{ asset('video/ph_pupuk.png') }}"></video>
            </div>
            <div class="col-lg-6 col-md-6 mt-3 mt-md-0" data-aos="fade-up">
                <h3 class="text-black mb-4" style="font-weight: 700">
                    PT Pupuk Sriwidjaja Palembang
                </h3>
                <p class="text-paragraph">
                    PT Pupuk Sriwidjaja Palembang was officially established on November 12, 2010, which produces and
                    markets fertilizers (Urea, NPK, and Organic) as well as other chemicals (Ammonia).
                </p>
            </div>
        </div>
    </div>
    <div class="mt-5 belt__asli">
        <div class="container">
            <h3 class="mx-lg-0 mx-2 mb-0">This website is the only official website of Trustia Asia Corporation Pte Ltd
            </h3>

        </div>
    </div>
@endsection

@section('js')
    <script>
        AOS.init();
    </script>
    <script>
        var swiper = new Swiper(".swiperBanner", {
            slidesPerView: 1,
            centeredSlides: true,
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },

            loop: true,
            loopFillGroupWithBlank: true,
            breakpoints: {
                // when window width is >= 320px
                350: {
                    slidesPerView: 1.75,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                500: {
                    slidesPerView: 2,
                    spaceBetween: 25
                },
                // when window width is >= 640px
                760: {
                    slidesPerView: 2.5,
                    spaceBetween: 25
                },
                1020: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 3.75,
                    spaceBetween: 35
                },
                1400: {
                    slidesPerView: 5,
                    spaceBetween: 40
                }
            },
            pagination: {
                el: ".swiper-pagination",
            },
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
