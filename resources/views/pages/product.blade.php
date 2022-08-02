@extends('app')

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    <div class="container-fluid position-relative box__banner">
        <div class="d-flex flex-column h-100 align-items-center justify-content-center">
            <h3 class="text-center small__title mb-4">Our Product</h3>

            <h1 class="text-center big__title">Produce a great and high-quality materials</h1>
        </div>
    </div>
    <div class="container">
        <div class="inner-padd"></div>
        <h1 class="title__primary mb-3">Introducing, Our Product</h1>
        <div class="d-flex justify-content-center mb-5">
            <div style="max-width: 700px">
                <p class="text-paragraph text-center">
                    We are committed to always produce a great and high-quality materials for your needs.
                    We define a 'high-quality' product not just as a product that is safe and is built of high-quality
                    components, but as a product that is consistent in its quality.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach ($listProds as $item)
                @component('components.card.card-product')
                    @slot('link')
                        /product/detail/{{$item->image}}
                    @endslot
                    @slot('title')
                        {{$item->title}}
                    @endslot    
                    @slot('img')
                        {{asset('image/product/list/'.$item->image.".png")}}
                    @endslot
                @endcomponent    

            @endforeach
        </div>
       

    </div>
    <div class="mt-5 belt__asli">
        <div class="container">
            <h2 class="mx-lg-0 mx-2 mb-0">This website is the only official website of Trustia Asia Corporation Pte Ltd</h2>

        </div>
    </div>
    <div class="section-contact">
        <div class="container pb-4 pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-11 col-12">
                    <h3 class="title_contact mb-3">Get In Touch</h3>
                    <div class="d-flex align-items-center mb-3">
                        <div class="ic__blue">

                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <p class="text-paragraph mb-2">Phone Number</p>
                            <h6 class="infor mb-0">+65 9108 5311</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="ic__blue">

                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <p class="text-paragraph mb-2">Email</p>
                            <h6 class="infor mb-0">admin@trustia.com.sg</h6>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="div-ic__blue">
                            <div class="ic__blue">

                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>

                        <div>
                            <p class="text-paragraph mb-2">Map Street</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="infor mb-1">Japan Office</h6>
                                    <h6 class="infor mb-0">Osaka</h6>
                                    <p class="alamat">Yoshikawa Building 6F, 9-3 Motomachi 1 Chome Naniwa-ku, Osaka, Japan
                                        556-0016</p>

                                    <h6 class="infor mb-0">Tokyo</h6>
                                    <p class="alamat">Yakou Build. 7F, 20-11. Taito 4-chome, Taito-ku, Tokyo , Japan
                                        110-001</p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="infor mb-1">Singapore Office</h6>
                                    <p class="alamat">
                                        1 Coleman Street #10-6. The Adelphi.
                                        Singapore 179803
                                    </p>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="inner-padd"></div>
        </div>
    </div>
@endsection

@section('js')
@endsection
