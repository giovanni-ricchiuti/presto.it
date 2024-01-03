<div class="container row justify-content-center mt-4 pt-5">

    <figure class="col-md-2 box-img p-0 d-flex align-content-around">
        <div class="bg-rettangolo-yello-img1 d-flex justify-content-center align-items-center shadow">
        </div>
        {{-- @if ($images->isNotEmpty())
            <img src="{{ $images->first()->getUrl(400, 300) }}" alt="Immagine"
                class="img-fluid d-flex mt-auto shadow box-img-card" style="border-radius: 40px;">
        @else
            <img src="https://picsum.photos/id/1/400/300" alt="Immagine"
                class="img-fluid d-flex mt-auto shadow box-img-card" style="border-radius: 40px;">
        @endif --}}
        @if ($images->isNotEmpty())
            <img src="{{ $images->first()->getUrl() }}" alt="Immagine" class="img-fluid d-flex mt-auto shadow box-img-card"
                style="border-radius: 40px;">
        @else
            <img src="https://picsum.photos/id/1/400/300" alt="Immagine"
                class="img-fluid d-flex mt-auto shadow box-img-card" style="border-radius: 40px;">
        @endif

        {{-- <p></p> --}}

        <div class="bg-rettangolo-yello-img2 d-flex justify-content-center align-items-center shadow">
        </div>
    </figure>

    <div class="col-md-6 box-text d-flex flex-column justify-content-center ms-4">
        <div class="d-flex justify-content-between align-items-baseline">
            <h2 class="card-title card-title-article">{{ $title }}
            </h2>
            <div class="container-prezzo shadow mt-5">
                <div class="box-prezzo">
                    <h5 class="card-title p-3">{{ $price }} €</h5>
                    <div class="box-prezzo-salmone">
                    </div>
                </div>
            </div>
        </div>
        <h6 class="card-category-article mt-2">{{ $nameCategory }}</h6>



        {{-- <p class="mt-2">{{ $description }}.</p> --}}
        <div class="d-flex justify-content-between align-items-baseline box-data-btn">
            <p class="mb-0 p-data">{{ __('ui.creatoIl') }} :
                {{ $createdAt }}</p>
            <p class="card-text small"><a href="{{ route('author.show', ['user' => $user->id]) }}"
                    class="bold link-offset-2 link-underline link-underline-opacity-0"
                    style="font-size: 1rem; color: #fc6a74;">{{ $authorName }}</a> : {{ __('ui.autore') }}</p>
        </div>
        <a href="{{ $routeAnnouncement }}" class="btn btn-cerca-inverso ann-card-mobile">{{ __('ui.visualizza') }}</a>
    </div>

    <div class="col-md-10">
        <hr class="hr-articles mt-5">
    </div>

</div>
