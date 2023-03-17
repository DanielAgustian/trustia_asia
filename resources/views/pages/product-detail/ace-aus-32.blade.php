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
        <h1 class="big__blue__title mb-4">ACE AUS 32</h1>
        <div class="row ">
            <div class="col-lg-8 col-md-6 order-2 order-md-1">
                <p class="text-paragraph text-justify mb-5">
                    ACE AUS 32 is a diesel emission fluid that functions to reduce NOx emissions for diesel engines with SCR
                    (Selective Catalytic Reduction) technology where NOx will be converted to nitrogen and water to achieve
                    Euro 5 exhaust emission standards.
                </p>
                <div class="row justify-content-center">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{ asset('image/detail/ace-aus-32-' . $i . '.png') }}" alt=""
                                class="img__prods__list">
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-1 order-md-2 text-md-end text-center">
                <img src="{{ asset('image/detail/ace-aus-32-dtl.png') }}" alt="ace-aus-32" class="w-100 img__detail">
            </div>
        </div>
        <h5 class="txt__head mt-4 mb-4">How does ACE AUS 32 works?</h5>
        <p class="text-paragraph text-justify mb-5">
            ACE AUS 32 works in conjunction with vehicle engine SCR systems to reduce nitrogen oxide (NOx) exhaust
            emissions. Active emissions control technology vehicles are usually identified by the use of the words 'SCR' or
            'Blue' in their model names.
            <br>
            <br>
            ACE AUS 32 DEF is sprayed and mixed into exhaust gas after it passes through the diesel particulate filter and
            enters the SCR catalytic converter via a dosing control system. In this case, the ammonia in the urea reacts
            with NOx in the exhaust stream, neutralizing it to form harmless nitrogen (N2) and water vapour (H2O), while
            also lowering total fuel consumption by 2-6 percent.
            <br>
            <br>
            ACE AUS 32 and SCR systems are extremely effective, reducing NOx emissions by up to 90%, hydrocarbon and carbon
            monoxide emissions by 50% to 90%, and particulate emissions by 30% to 50%.
        </p>

        <h5 class="txt__head mt-4 mb-4">How does ACE AUS 32 works?</h5>
        <div class="row">
            <div class="col-lg-8 col-md-10 col-12">
                <div class="table__detail">
                    <table class="table table-borderless table-striped">

                        <tbody>
                            <tr>
                                <td class="grey__text">• Distinction between single products and mixtures</th>
                                <td class="blue__text">Mixtures</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Chemical Name </th>
                                <td class="blue__text">Aqueros urea solution</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Ingredients and Content </th>
                                <td class="blue__text">Urea : 31.81% - 33.3% <br>
                                    Water : 66.7% - 68.2%</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Chemical or Structural Formula </th>
                                <td class="blue__text">(NH2)2CO</td>

                            </tr>
                            <tr>
                                <td class="grey__text">• Official Gazzere Publication
                                    Reference Number </th>
                                <td class="blue__text">Chemical Substances Control Law (2) - 1732</td>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <h5 class="txt__head mt-4 mb-4">Use and Storage Instructions:</h5>
        <ul class="storage__list list__detail">
            <li>Before pouring ACE AUS 32, make sure the packaging, funnel and filling tank hole are clean.</li>
            <li>Pour slowly using a special funnel that is included in the Quester unit on the ACE AUS 32 tank.
            </li>
            <li>Categorized as non-hazardous material, if it comes into contact with skin or clothing, it is recommended to
                wash
                it immediately with clean water.
            </li>
            <li>Should be stored in a ventilated place protected from direct exposure to sunlightand dust.</li>
            <li>Do not use used liquid containers or other materials to store ACE AUS 32.</li>
            <li>Always store and tightly close the ACE AUS 32 packaging after use and keep it out of reach of children.</li>
        </ul>

    </div>
    @include('components.product-list')
    <div class="inner-padd"></div>
@endsection

@section('js')
    
@endsection
