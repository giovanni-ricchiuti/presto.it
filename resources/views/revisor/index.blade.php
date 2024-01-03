<x-layout-articles>

    {{-- titolo --}}

    <div class="container-fluid d-flex justify-content-center  p-0 ">
        <div class="container box-title p-3 ombra">
            <h1 class="text-center box-title-page-mobile">
                {{ $announcement_to_check ? __('ui.revisoreTitolo1') : __('ui.revisoreTitolo2')  }}
            </h1>
        </div>


        <div class="container-articles w-100 ">

            <div class="container-fluid p-0 ">

                {{-- carosello --}}
                <div class="box-carosello d-flex container-article-mobile">
                    @if ($announcement_to_check)
                        <div
                            class="containerSliderArticle col-6 d-flex justify-content-center box-img-article-mobile z-1">

                            @if ($announcement_to_check->images->isNotEmpty())
                                <div class="w">
                                    <div class="ts">
                                        @php $n = 0; @endphp
                                        @foreach ($announcement_to_check->images as $image)
                                            <input type="radio" id="c{{ $n + 1 }}" name="ts"
                                                {{ $loop->first ? 'checked' : '' }}>
                                            <label class="t" for="c{{ $n + 1 }}">
                                                <img class="" src="{{ Storage::url($image->path) }}"
                                                    alt="">
                                            </label>
                                            @php $n++; @endphp
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <!-- se mancano immagini -->

                                <div class="w">
                                    <div class="ts">
                                        @php $n = 0; @endphp
                                        @for ($i = 0; $i < 3; $i++)
                                            <input type="radio" id="c{{ $n + 1 }}" name="ts"
                                                {{ $i == 0 ? 'checked' : '' }}>
                                            <label class="t" for="c{{ $n + 1 }}">
                                                <img src="https://picsum.photos/600/400?random={{ $i + 1 }}"
                                                    alt="Lorem Picsum Image {{ $i + 1 }}">
                                            </label>
                                            @php $n++; @endphp
                                        @endfor
                                    </div>
                                </div>
                            @endif

                        </div>

                        {{-- valutazione img --}}
                        <div class="col-6 d-flex flex-column box-valutazione-article-mobile">
                            <div class="card-body bg-valutazione p-4 text-center ">

                                <h5>{{ __('ui.revisoreImmagini') }}</h5>
                                <p>{{ __('ui.adulti') }}:
                                    @if (!empty($image->adult))
                                    <span class="{{ $image->adult }}"></span>
                                    @else
                                    <span class="text-success fas fa-circle"></span>
                                    @endif
                                </p>
                                <p>{{ __('ui.satira') }}:
                                    @if (!empty($image->spoof))
                                    <span class="{{ $image->spoof }}"></span>
                                    @else
                                    <span class="text-success fas fa-circle"></span>
                                    @endif
                                </p>
                                <p>{{ __('ui.medicina') }}:
                                    @if (!empty($image->medical))
                                    <span class="{{ $image->medical }}"></span>
                                    @else
                                    <span class="text-success fas fa-circle"></span>
                                    @endif
                                </p>
                                <p>{{ __('ui.violenza') }}:
                                    @if (!empty($image->violence))
                                    <span class="{{ $image->violence }}"></span>
                                    @else
                                    <span class="text-success fas fa-circle"></span>
                                    @endif
                                </p>
                                <p>{{ __('ui.contenutoAmmiccante') }}:
                                    @if (!empty($image->racy))
                                    <span class="{{ $image->racy }}"></span>
                                    @else
                                    <span class="text-success fas fa-circle"></span>
                                    @endif
                                </p>
                                <hr class="hr-footer">
                                @if (!empty($image->labels))
                                    @foreach ($image->labels as $label)
                                        <div>
                                            <p class="small label-container">{{ $label }}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <div>
                                        <p class="small label-container">{{ __('ui.colpaApi') }}</p>
                                    </div>
                                @endif
                            </div>

                            {{-- text --}}
                            <div
                                class="mx-auto container-testo-articolo-Revisorere m-5 p-5 border-4 mt-0 h-auto box-text-article-mobile">
                                <h2 class="card-title text-dark pb-3 box-text-descrizione-mobile">
                                    <strong>{{ __('ui.titolo') }}:</strong> <br> {{ $announcement_to_check->title }}
                                </h2>
                                <p class="card-text text-dark pb-3 pe-3 box-text-descrizione-mobile"><strong>
                                {{ __('ui.descrizione') }}: </strong> <br> {{ $announcement_to_check->description }}</p>
                                <div class="d-flex justify-content-between align-items-lg-baseline box-data-btn ">
                                    <p class="card-footer text-dark pb-3 box-crea-mobile">{{ __('ui.creatoIl') }}: <br>
                                        {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                                    @if ($announcement_to_check->user)
                                        <p class="card-footer text-dark pb-3 box-crea-mobile">{{ __('ui.creatoDa') }}:
                                            <br>{{ $announcement_to_check->user->name }}
                                        </p>
                                    @else
                                        <p class="card-footer text-dark pb-3 box-crea-mobile">{{ __('ui.creatoDa') }}: <br> {{ __('ui.utentenondisponibile') }}</p>
                                    @endif
                                </div>

                                {{-- pulsante accetta-rifiuta --}}
                                <div class="container d-flex justify-content-center  mt-5 ">
                                    <div class="row d-flex  align-item-center ">
                                        <div class="col-6">
                                            <form
                                                action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success shadow">{{ __('ui.accetta') }}</button>
                                            </form>
                                        </div>
                                        <div class="col-6">
                                            <form
                                                action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-danger shadow">{{ __('ui.rifiuta') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>



</x-layout-articles>