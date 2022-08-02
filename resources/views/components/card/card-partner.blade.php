<div class="col-lg-4 col-md-4 col-12 mb-4">
    <div class="card card-partner">
        <div class="card-body p-3">
            <div class="d-flex mb-3 align-items-center">
                <div>
                    <div class="number">
                        {{ $number }}
                    </div>
                </div>
                @if ($alt != "")
                    <img src="{{$logo}}" alt="{{$alt}}">
                @endif
                
            </div>

            <h4 class="title__card">{{ $title }}</h4>
        </div>
    </div>
</div>
