<x-layout-articles>

    <div class="container box-title p-3">
        <h1 class="fw-bold text-center display-4">{{__('ui.articoliDi')}} {{ $user->name }}</h1>
        
    </div>

    <div class="container-fluid w-100 container-articles py-5">

        <div class="container mt-4 d-flex flex-column justify-content-center">
    
            <div class="box-text d-flex flex-column justify-content-center ms-4 gap-3">
                @foreach ($articles as $article)
                <figure class="col-md-2 box-img p-0 d-flex align-content-around">
                    
                    <div class="bg-rettangolo-yello-img1 d-flex justify-content-center align-items-center shadow">
                    </div>
                    @if ($article->images->isNotEmpty())
                        <img src="{{ $article->images->first()->getUrl(400, 300) }}" alt="Immagine"
                            class="img-fluid d-flex mt-auto shadow box-img-card" style="border-radius: 40px;">
                    @else
                        <img src="https://picsum.photos/id/1/400/300" alt="Immagine"
                            class="img-fluid d-flex mt-auto shadow box-img-card" style="border-radius: 40px;">
                    @endif
            
                    
                    <div class="bg-rettangolo-yello-img2 d-flex justify-content-center align-items-center shadow">
                    </div>
                    
                </figure>
    
                <div class="d-flex justify-content-between align-items-baseline">
                    <h2 class="card-title card-title-article">{{ $article->title }}
                    </h2>
                    <div class="container-prezzo shadow">
                        <div class="box-prezzo">
                            <h5 class="card-title p-3">{{ $article->price }} €</h5>
                            <div class="box-prezzo-salmone">
                            </div>
                        </div>
                    </div>
                </div>

                <p class="card-category-article mt-2">{{__('ui.category')}} : <a
                    class="link-offset-2 link-underline link-underline-opacity-0 box-testo-articolo-categoria"
                    href="{{ route('showCategory', ['category' => $article->category]) }}">{{ $article->category->name }}</a>
                </p>    
                {{-- <h6 class="card-category-article mt-2">{{__('ui.category')}} : {{ $article->category->name }}</h6> --}}
                {{-- <p class="mt-2">{{ $description }}.</p> --}}
                <div class="d-flex justify-content-between align-items-baseline box-data-btn">
                    <p class="mb-0 p-data">{{__('ui.creatoIl')}} :
                        {{ $article->created_at->format('d/m/Y') }}</p>
                    
                    <a href="{{ route('announcements.show', ['announcement' => $article->id]) }}" class="btn btn-cerca-inverso">{{__('ui.visualizza')}}
                    </a>
                </div>

                <div class="">
                    <hr class="hr-articles mt-4">
                </div>

                @endforeach
            </div>
            
            <div class="text-center mt-3">
                <a href="{{ route('announcements.index') }}" class="btn btn-primary">{{__('ui.returnArticle')}}</a>
            </div>
        </div>

    </div>


</x-layout-articles>