@extends('app')

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    <div class="container pt-5 pb-5">
        <h1 class="title">Our Partner</h1>
        <p>We believe that collaboration is always the key. <br>
            We proudly said that we have collaborated with a lot of great company, such as : </p>
        <div class="row mt-5 align-items-center mb-lg-0 mb-5">
            <div class="col-lg-6 ">
                <video src="{{asset('video/pupuk-sriwijaya.mp4')}}" class="video__partner" controls preload="none" poster="{{asset('video/ph_pupuk.png')}}"></video>
            </div>
            <div class="col-lg-6 ps-lg-4 ps-2 ">
                <h2 class="title__partner">01</h2>
                <h2 class="name__partner">PT Pupuk Sriwidjaja Palembang</h2>
                <p class="detail__partner">PT Pupuk Sriwidjaja Palembang was officially established on November 12, 2010,
                    which produces and markets
                    fertilizers (Urea, NPK, and Organic) as well as other chemicals (Ammonia).
                    <br>
                    <br>
                    PT Pupuk Sriwidjaja Palembang is a fertilizer industry pioneer in Indonesia, and it also contributes to
                    the development of Indonesian agriculture.
                </p>
            </div>
        </div>
        <div class="row mt-4 align-items-center mb-lg-0 mb-5">

            <div class="col-lg-6 pe-lg-4 pe-2 order-lg-1 order-2">
                <h2 class="title__partner text-lg-end">02</h2>
                <h2 class="name__partner text-lg-end">PT Pupuk Kalimantan Timur (Pupuk Kaltim)</h2>
                <p class="detail__partner text-lg-end">PT Pupuk Kalimantan Timur, is an Asian producer of urea and NPK
                    fertilizers.
                    PKT is located on 443 hectares in Bontang City, East Kalimantan, and has production facilities that
                    include 5 (five) Ammonia factories, 5 (five) Urea factories, 3 (three) NPK Blending factories, 2 (two)
                    NPK Fusion factories, 1 (two) NPK Fusion plants, one) Coal Boiler factory, bagging unit, and warehousing
                    unit, with a total production capacity of 3.43 million tons/year.
                </p>
            </div>
            <div class="col-lg-6 order-lg-2 order-1">
                <img src="{{ asset('image/partner/pupuk-kaltim.png') }}" class="img__partner">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 mb-md-0 mb-4">
                <div class="position-relative">

                    <img src="{{ asset('image/partner/pupuk-kujang.png') }}" alt="" class="img__partner">

                    <img src="{{ asset('image/partner/logo/logo-pupuk-kujang.png') }}" alt=""
                        class="img-partner-logo">

                </div>

                <h2 class="title__partner mt-2">03</h2>
                <h3 class="name__partner">PT Pupuk Kujang</h3>
            </div>
            <div class="col-lg-4 col-md-4 mb-md-0 mb-4">
                <div class="position-relative">
                    <img src="{{ asset('image/partner/pupuk-iskandar-muda.png') }}" alt="" class="img__partner">
                    <img src="{{ asset('image/partner/logo/logo-pupuk-iskandar.png') }}" alt="" class="img-partner-logo">
                </div>
                <h2 class="title__partner mt-2">04</h2>
                <h3 class="name__partner">PT Pupuk Iskandar Muda</h3>
            </div>
            <div class="col-lg-4 col-md-4 mb-md-0 mb-4">
                <div class="position-relative">
                    <img src="{{ asset('image/partner/petrokimia-gresik.png') }}" alt="" class="img__partner">
                    <img src="{{ asset('image/partner/logo/logo-petrokimia-gresik.png') }}" alt="" class="img-partner-logo-v2">
                </div>
                
                <h2 class="title__partner mt-2">05</h2>
                <h3 class="name__partner">PT Petrokimia Gresik</h3>
            </div>
        </div>
        <div class="row mt-5">
            @for ($i = 0; $i < $count; $i++)
                @php
                    $idx = $i + 6;
                    if ($idx <= 9) {
                        $vIdx = '0' . $idx;
                    } else {
                        $vIdx = $idx;
                    }
                @endphp
                @component('components.card.card-partner')
                    @slot('number')
                        {{ $vIdx }}
                    @endslot
                    @slot('title')
                        {{ $array[$i]->title }}
                    @endslot
                    @slot('logo')
                        {{ asset('image/partner/logo/' . $array[$i]->logo . '.png') }}
                    @endslot
                    @slot('alt')
                        {{ $array[$i]->logo }}
                    @endslot
                @endcomponent
            @endfor
        </div>

    </div>
@endsection

@section('js')
    <script src=""></script>
    {{-- Tester --}}
@endsection
