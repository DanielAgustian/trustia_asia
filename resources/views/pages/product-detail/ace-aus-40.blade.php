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
        <h1 class="big__blue__title mb-4">ACE AUS 40</h1>
        <div class="row ">
            <div class="col-lg-8 col-md-6 order-2 order-md-1">
                <p class="text-paragraph text-justify mb-5">
                    Aqueous Urea Solution (AUS) 40 is the other type of DEF (Diesel Exhaust Fluid) usually used for ship. It
                    reduce Nitrogen Oxide (NOx) emissions from vessels and sometimes from the other diesel engine exhaust
                    systems. Marine Urea is injected into the diesel engine exhaust system and reacts with nitrogen oxide
                    gas emissions. So this solution converts the harmful emissions to water vapor and Nitrogen.
                </p>
                <div class="row justify-content-center">
                    @for ($i = 1; $i < 4; $i++)
                        <div class="col-lg-4 col-md-4 col-6">
                            <img src="{{ asset('image/detail/ace-aus-40-' . $i . '.png') }}" alt=""
                                class="img__prods__list">
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-1 order-md-2 text-md-end text-center">
                <img src="{{ asset('image/detail/ace-aus-40-dtl.png') }}" alt="ace-aus-40" class="w-100 img__detail">
            </div>
        </div>
       
        <h5 class="txt__head mt-4 mb-4">Product Content</h5>
        <div class="row">
            <div class="col-lg-6  col-12">
                <div class="table__detail">
                    <table class="table table-borderless table-striped">

                        <tbody>
                            <tr>
                                <td class="grey__text">• Urea Content (wt %) (m/m)</th>
                                <td class="blue__text">40,5</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Insoluble matter, mg/kg</th>
                                <td class="blue__text">less than 1</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Alkalinity (as NH3), mass % </th>
                                <td class="blue__text">max 0,5</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Biuret (mass %) </th>
                                <td class="blue__text">max 0,8</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Aldehyde, mg/kg</th>
                                <td class="blue__text">max 100</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Phosphoric acid (PO ), mg/kg</th>
                                <td class="blue__text">max 1</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Copper mg/kg</th>
                                <td class="blue__text">less than 1</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Calcium mg/kg</th>
                                <td class="blue__text">less than 1</td>

                            </tr>
                            
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-lg-6  col-12">
                <div class="table__detail">
                    <table class="table table-borderless table-striped">

                        <tbody>
                            <tr>
                                <td class="grey__text">• Magnesium (Mg) (mg/kg)</th>
                                <td class="blue__text">less than 1</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Sodium (Na), (mg/kg)</th>
                                <td class="blue__text">less than 1</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Potassium mg/kg</th>
                                <td class="blue__text">less than 1</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Density at 20 oC (kg/m3) </th>
                                <td class="blue__text">1105 – 1177</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Refractive Index at 20</th>
                                <td class="blue__text">max 0,5</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Infrared absorption spectrum analysis (IR analysis)</th>
                                <td class="blue__text">Yes</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Iron, mg/kg</th>
                                <td class="blue__text">less than 1</td>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <h5 class="txt__head mt-4 mb-4 text__gray">The advantage and Disavantages of AUS 40</h5>
        <div class="row">
            <div class="col-md-4 col-12 mb-3 mb-lg-0 px-3">
                <h5 class="txt__head mt-4 mb-4">Pros of using AUS 40:</h5>
                <ul class="storage__list list__detail">
                    <li>Contributes significantly to air pollution</li>
                    <li>Reduces harmful emissions</li>
                    <li>Prevent respiratory diseases</li>
                </ul>
            </div>
            <div class="col-md-8 col-12 mb-0 disadvantage__box px-3 ">
                <h5 class="txt__head mt-4 mb-4">Cons of using AUS 40 :</h5>
                <ul class="storage__list list__detail">
                    <li>If the tank is emptied, water pollution occurs, and the SCR (Selective Catalytic Reduction) causes damage to the catalyst in the system</li>
                    <li>Aqueros Urea Solution is corrosive</li>
                    <li>Increase the cost of marine vehicles</li>
                </ul>
            </div>
        </div>

    </div>
    @include('components.product-list')

    <div class="inner-padd"></div>
@endsection

@section('js')
@endsection
