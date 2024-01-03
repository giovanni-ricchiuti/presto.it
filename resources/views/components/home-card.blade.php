<div class="container row justify-content-center mt-4">

    <figure class="col-md-4 box-img p-0 d-flex align-content-around">
        <div class="bg-rettangolo-yello-img1 d-flex justify-content-center align-items-center shadow">
        </div>

        {{--             @if ($images->isNotEmpty())
            <img src="{{$images->first()->getUrl(400,300)}}" alt="Immagine" class="img-fluid d-flex mt-auto shadow box-img-card"
            style="border-radius: 40px;">
            @else 
            <img src="https://picsum.photos/id/1/400/300" alt="Immagine" class="img-fluid d-flex mt-auto shadow box-img-card"
            style="border-radius: 40px;">
            @endif --}}

        @if ($images->isNotEmpty())
            <img src="{{ $images->first()->getUrl() }}" alt="Immagine" class="img-fluid d-flex mt-auto shadow box-img-card"
                style="border-radius: 40px;">
        @else
            <img src="https://picsum.photos/id/1/400/300" alt="Immagine"
                class="img-fluid d-flex mt-auto shadow box-img-card" style="border-radius: 40px;">
        @endif

        <div class="bg-rettangolo-yello-img2 d-flex justify-content-center align-items-center shadow">
        </div>
    </figure>
    <div class="col-md-7 box-text d-flex flex-column justify-content-center ms-4 text-start box-card-text-mobile">
        <div class="d-flex justify-content-between align-items-baseline">
            <h2 class="card-title box-title-home-h2">{{ $title }}
            </h2>
        </div>
        <h6 class="home-category-h6 mt-2">{{ $nameCategory }}</h6>

        <h5 class="box-prezzo-home-h5 container-prezzo-home">{{ $price }} €</h5>
        <div class="d-flex justify-content-between align-items-baseline box-data-btn">

            <a href="{{ $routeAnnouncement }}" class="btn btn-cerca-inverso ombra">{{ __('ui.visualizza') }}</a>

        </div>
    </div>



</div>

{{-- <div class="container-fluid d-flex justify-content-center mt-4 w-auto container-card-mobile-home">

    <figure class="col-xs-1 box-img p-3 d-flex align-content-around">

        <div class="bg-rettangolo-yello-img1 d-flex justify-content-center align-items-center">
        </div>

        <img src="https://picsum.photos/600/600" alt="Immagine" class="img-fluid d-flex mt-auto box-img-card"
            style="border-radius: 40px;">

        <div class="bg-card-img-salmone-img2 d-flex justify-content-center align-items-center">
        </div>

    </figure>

    <div class="col-xs-3 box-text d-flex flex-column justify-content-center ms-4">
        <div class="d-flex justify-content-between align-items-baseline">
            <h2 class="card-title box-title-home-h2">{{ $title }}
            </h2>
            <div class="container-prezzo-home my-2">
                <div class="box-prezzo-home">
                    <h5 class="card-title p-2 box-prezzo-home-h5">{{ $price }} €</h5>
                    
                </div>
            </div>
            <h6 class="home-category-h6">{{ $nameCategory }}</h6>
        </div>
        
        
        <div class="d-flex justify-content-between align-items-baseline box-data-btn">
            
            <a href="{{ $routeAnnouncement }}"
                    class="btn btn-logout">{{__('ui.visualizza')}}</a>
                
        </div>
    </div>


</div> --}}
