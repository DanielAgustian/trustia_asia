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
        <h1 class="big__blue__title mb-4">TAC Standard Biuret</h1>
        <div class="row align-items-end">
            <div class="col-lg-8 col-md-6 order-2 order-md-1">
                <p class="text-paragraph text-justify mb-5">
                    Urea, also known as carbamide, is an organic compound with chemical formula CO(NH₂)₂.
                    This amide has two –NH₂ groups joined by a carbonyl functional group. Urea serves an important role in
                    the metabolism of nitrogen-containing compounds by animals and is the main nitrogen-containing substance
                    in the urine of mammals.
                </p>
                <h5 class="txt__head mb-3">Information</h5>
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
                                <td class="blue__text">46.00</td>
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

                        </tbody>
                    </table>
                    <label for="" class="text-paragraph">
                        The shape of the granules is not dusty
                    </label>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-1 order-md-2 text-md-end text-center">
                <img src="{{ asset('image/detail/tac-standard-biuret-dtl.png') }}" alt="" class="w-100 img__detail">
            </div>
        </div>
        <h5 class="txt__head mt-5">User & Safety Information</h5>
        <p class="text__gray text-justify mb-0">To ensure that users of our TAC Urea have complete knowledge of its
            operation, we have compiled a list of guidelines to help you achieve maximum productivity.</p>
        <h5 class="txt__head mt-4 mb-2">Dos</h5>
        <ul class="text__gray list__detail">

            <li> Refill your TAC Urea before it runs out. </li>
            <li> Fuel, oil, water, dust, dirt, and other contaminants should be kept away from the TAC Urea storage tank.

            </li>
            <li>Urea should be stored between 30 and -11 degrees Celsius.
            </li>
            <li> Use specialized equipment for storing and transporting TAC Urea.
            </li>

        </ul>

        <h5 class="txt__head mt-4 mb-2">Donts</h5>
        <ul class="text__gray list__detail">
            <li>Don’t add water or any other compounds into TAC Urea
            </li>
            <li>Don’t add water directly into the SCR system, it will damage the SCR system</li>
            <li> Don’t store TAC Urea in areas of direct sunlight or rain</li>
        </ul>
        <div class="row mt-5">
            <div class="col-lg-10 col-md-12">
                <div class="row">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="col-lg-3 col-md-4 col-6  mb-lg-0 mb-3">
                            <img src="{{ asset('image/detail/urea-' . $i . '.png') }}" alt=""
                                class="img__prods__list">
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
   
    <div class="inner-padd"></div>
@endsection

@section('js')
  
@endsection
