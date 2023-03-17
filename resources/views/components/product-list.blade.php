{{-- Use $listProds for push data to this part. --}}

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
                @foreach ($listProds as $item)
                    <div class="swiper-slide">
                        <a href="{{ route('productDetail', ['slug' => $item->image]) }}" class="link-product">
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
