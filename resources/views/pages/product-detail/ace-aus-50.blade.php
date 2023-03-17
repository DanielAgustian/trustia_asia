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
        <h1 class="big__blue__title mb-4">ACE AUS 50</h1>
        <div class="row ">
            <div class="col-lg-8 col-md-6 order-2 order-md-1">
                <p class="text-paragraph text-justify mb-5">
                    AUS 50 offers a 50% aqueous solution of urea. By choosing a higher concentration of urea, it will take
                    up less volume, which means smaller storage vessels can be used. It is also ideal diesel boilers, It can
                    be achieved simply by injecting the aqueous solution into the boiler, at which point it becomes a vapor.
                    AUS 50 is often used in power plants. It can achieves up to 95% Nitrogen Oxide (NOx) emission reduction.
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
                <img src="{{ asset('image/detail/ace-aus-50-dtl.png') }}" alt="ace-aus-50" class="w-100 img__detail">
            </div>
        </div>

        <h5 class="txt__head mt-4 mb-4">Product Content</h5>
        <div class="row">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="table__detail">
                    <table class="table table-borderless ">
                        <thead>
                            <tr>
                                <th scope="col">Components</th>
                                <th scope="col">Units</th>
                                <th scope="col">Minimum</th>
                                <th scope="col">Maximum</th>
                                <th scope="col">Typical</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="grey__text">• Urea</th>
                                <td class="blue__text">wt.%</td>
                                <td class="blue__text">48.5</td>
                                <td class="blue__text">5.1</td>
                                <td class="blue__text">48.8</td>
                            </tr>
                            <tr>
                                <td class="grey__text">• Total Nitrogen</th>
                                <td class="blue__text">wt.% N</td>
                                <td class="blue__text">23</td>
                                <td class="blue__text"></td>
                                <td class="blue__text"></td>
                            </tr>

                            <tr>
                                <td class="grey__text">• Biuret</th>
                                <td class="blue__text">wt.%</td>
                                <td class="blue__text"></td>
                                <td class="blue__text"></td>
                                <td class="blue__text">0.5</td>
                            </tr>
                            <tr>
                                <td class="grey__text">• Free Amonia</th>
                                <td class="blue__text">ppm. NH3</td>
                                <td class="blue__text"></td>
                                <td class="blue__text"></td>
                                <td class="blue__text">Trace</td>
                            </tr>
                            <tr>
                                <td class="grey__text">• pH. 10%</th>
                                <td class="blue__text">(v.v)</td>
                                <td class="blue__text"></td>
                                <td class="blue__text"></td>
                                <td class="blue__text">8.5</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

        <h5 class="txt__head mt-4 mb-4 text__gray">The Advantages and Disadvantages of AUS 50 </h5>
        <div class="row">
            <div class="col-md-4 col-12 mb-3 mb-lg-0 px-3">
                <h5 class="txt__head mt-4 mb-4">Pros of using AUS 50 :</h5>
                <ul class="storage__list list__detail">
                    <li>Contributes significantly to air pollution</li>
                    <li>Reduces harmful emissions</li>
                    <li>Prevent respiratory diseases</li>
                </ul>
            </div>
            <div class="col-md-8 col-12 mb-0 disadvantage__box px-3 ">
                <h5 class="txt__head mt-4 mb-4">Cons of using AUS 50 :</h5>
                <ul class="storage__list list__detail">
                    <li>If the tank is emptied, water pollution occurs, and the SCR (Selective Catalytic Reduction) causes
                        damage to the catalyst in the system</li>
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
