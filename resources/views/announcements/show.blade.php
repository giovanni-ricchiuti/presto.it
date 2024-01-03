<x-layout-articles>

    {{-- RETTANGO TITOLO --}}
    <div class="container box-title p-3 ombra">
        <h1>{{ $announcement->title }}</h1>
        <a class="link-light link-underline link-underline-opacity-0"
            href="{{ route('showCategory', ['category' => $announcement->category]) }}">{{ $announcement->category->name }}</a>
    </div>

    <div class="container-articles  w-100 d-flex p-0 m-0 container-article-mobile">

        
                 {{-- carosello --}}
                <div class="containerSliderArticle col-6 d-flex justify-content-center box-img-article-mobile">
                        
                        @if ($announcement->images->isNotEmpty())
                            <div class="w">
                                <div class="ts">
                                    @php $n = 0; @endphp
                                    @foreach ($announcement->images as $image)
                                        <input type="radio" id="c{{ $n + 1 }}" name="ts" {{ $loop->first ? 'checked' : '' }}>
                                        <label class="t" for="c{{ $n + 1 }}">
                                            <img class="" src="{{ Storage::url($image->path) }}" alt="">
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
                                        <input type="radio" id="c{{ $n + 1 }}" name="ts" {{ $i == 0 ? 'checked' : '' }}>
                                        <label class="t" for="c{{ $n + 1 }}">
                                            <img src="https://picsum.photos/600/400?random={{ $i + 1 }}" alt="Lorem Picsum Image {{ $i + 1 }}">
                                        </label>
                                        @php $n++; @endphp
                                    @endfor
                                </div>
                            </div>
                        @endif

                </div>

            
                {{-- text --}}
                <div class=" col-5 box-testo-articolo box-text d-flex flex-column justify-content-center mt-5 pt-2 px-5 box-text-article-mobile">

                    <div class="container d-flex justify-content-between align-items-center p-0">
    
                        <div>
                            <h5 class="title-announcement-show">{{ $announcement->title }}</h5>
                            <p class="card-category-article mt-2">{{__('ui.category')}} <a
                                    class="link-offset-2 link-underline link-underline-opacity-0 box-testo-articolo-categoria"
                                    href="{{ route('showCategory', ['category' => $announcement->category]) }}">{{ $announcement->category->name }}</a>
                            </p>
                        </div>
    
                        <div class="box-prezzo">
                            <h5 class="card-title p-3 container-prezzo">{{ $announcement->price }} €</h5>
                            <div class="box-prezzo-salmone">
                            </div>
    
                        </div>
    
                    </div>
                    <div>
                        <p class="mt-4">{{ $announcement->description }}</p>
                    </div>
                </div>

            
        
    </div>



</x-layout-articles>
