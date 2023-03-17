<nav class="navbar fixed-top navbar-expand-lg navbar-light  navbar__blue d-lg-block d-none fixed-top">
    <div class="container">

        <a class="navbar-brand" href="{{route('homepage')}}">
            <img src="{{ asset('image/logo.svg') }}" alt="" class="logo__navbar">
        </a>



        <div class="d-lg-flex d-block">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{set_active_sidebar('homepage')}}"  href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{set_active_sidebar('aboutUs')}}" href="{{route('aboutUs')}}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{set_active_sidebar('productDetail')}} {{set_active_sidebar('ourProduct')}}" href="{{route('ourProduct')}}">Our Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{set_active_sidebar('ourPartner')}}" href="{{route('ourPartner')}}">Our Partners</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link {{set_active_sidebar('contactUs')}}" href="{{route('contactUs')}}">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="d-lg-none d-block">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>





    </div>
</nav>
{{-- Mobile Version --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-light  navbar__blue d-lg-none d-block">
    <div class="container">

        <a class="navbar-brand" href="{{route('homepage')}}">
            <img src="{{ asset('image/logo.svg') }}" alt="" class="logo__navbar">
        </a>






        <div class="d-lg-none d-block">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
                {{-- <span class="navbar-toggler-icon"></span> --}}
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{set_active_sidebar('homepage')}}"  href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{set_active_sidebar('aboutUs')}}" href="{{route('aboutUs')}}">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{set_active_sidebar('ourProduct')}}" href="{{route('ourProduct')}}">Our Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{set_active_sidebar('ourPartner')}}" href="{{route('ourPartner')}}">Our Partners</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{set_active_sidebar('contactUs')}}" href="{{route('contactUs')}}">Contact Us</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
