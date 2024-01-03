<x-layout-articles>


    <div class="container box-title p-3">
        <h1 class="fw-bold text-center display-4">Risultati della ricerca</h1>
        <h2 class="text-center lead">Questi sono i risultati della tua ricerca</h2>
    </div>

    

    <div class="container-articles d-flex justify-content-center w-100 px-3 pb-3">

        <div class="box-articles">

            <div class="box-text d-flex justify-content-center">

                <div class="container justify-content-center mt-4 px-0">

                    @if ($results->isEmpty())
                        <p class="text-center">Non ho trovato nessun risultato.</p>
                    @else
                        @foreach ($results as $result)
                            <div class="box-text d-flex flex-column justify-content-center">
                                
                                    <div class="container d-flex justify-content-center mt-4">
                                        <figure class="col-md-4 box-img p-0 d-flex align-content-around">

                                            <div class="bg-rettangolo-yello-img1 d-flex justify-content-center align-items-center shadow">
                                            </div>
                                            @if ($result->image)
                                                <img src="{{ asset('storage/' . $result->image) }}"
                                                    alt="{{ $result->title }}"
                                                    class="img-fluid d-flex mt-auto shadow box-img-card"
                                                    style="width: 100px;">
                                            @else
                                                <div class="img-thumbnail bg-secondary text-black box-img-card mb-0"
                                                    style="width: auto;">
                                                    <h2 class="" style="width: auto;">No Image</h2>
                                                </div>
                                            @endif
                                            <div class="bg-rettangolo-yello-img2 d-flex justify-content-center align-items-center shadow">
                                            </div>

                                        </figure>
                                        <div class="ps-2">
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <h2 class="card-title card-title-article">{{ $result->title }}
                                                </h2>
                                                <div class="container-prezzo shadow">
                                                    <div class="box-prezzo">
                                                        <h5 class="card-title p-3">{{ $result->price }} €</h5>
                                                        <div class="box-prezzo-salmone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="card-category-article mt-2">{{ $result->category->name }}</h6>
                                            <div
                                                class="d-flex justify-content-between align-items-baseline box-data-btn">
                                                <p class="card-text small">Autore:{{ $result->user->name }}</p>
                                                <a href="{{ route('announcements.show', ['announcement' => $result]) }}"
                                                    class="btn btn-cerca-inverso">Visualizza
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            @if ($announcements->links()->paginator->hasPages())
                <div class="mt-4 p-4 box has-text-centered">
                    {{ $announcements->links() }}
                </div>
            @endif
        </div>

    </div>


</x-layout-articles>
