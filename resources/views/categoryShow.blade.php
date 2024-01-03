<x-layout-articles>
    <div class="container box-title p-3 text-center">
        <h1 class="py-3">{{__('ui.esploraCategoria')}} <span class="text-light">{{ $category->name }}</span> </h1>
    </div>
    <div class="container-articles w-100 px-3 pb-3 pt-5">

        {{-- elenco categorie --}}
        {{-- sezione categorie --}}

        <div class="container-sm mx-auto box-home-card-category mt-3">
            <div class="row gap-4 d-flex justify-content-center mx-auto px-0">
                @foreach ($categories as $cat)
                <div class="card col p-0 zoom-card2 border-0">
                    
                        <a href="{{ route('showCategory', ['category' => $cat]) }}" class="btn p-0 border-0 box-cover2">

                            <img src="/{{ $cat->image }}" class="card-img img-category" alt="Stony Beach"/>

                            <div class="w-100 h-100 box-title-card-category position-absolute p-0">
                            </div>
                            <div
                                class="card-img-overlay d-flex align-items-center justify-content-center flex-column w-100  position-absolute">
                                <h6 class="title-card-category-show position-relative">{{ $cat->name }}</h6>
                            </div>
                        </a>
                        <div class="bg-rettangolo-yello-categori-show2 w-10"></div>
                        <div class="bg-rettangolo-salmone-categori-show3"></div>
                    </div>
                @endforeach
            </div>
        </div>


        {{-- <div class="col-md-12 col-12 mt-5 pt-5">
            <div class="row">
                <h3>{{__('ui.listaCategorie')}} </h3>
            </div>

            <div class="row">
                @foreach ($categories as $cat)
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="card-title">{{ $cat->name }}</h6>
                            <a href="{{ route('showCategory', ['category' => $cat]) }}" class="btn btn-primary">{{__('ui.esplora')}} /a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div> --}}

        <div class="mt-4">
            {{-- menù linea gialla --}}
            <div class="box-filter bf-mobile container d-flex justify-content-between align-items-center px-5">
                <div class="text-filter">
                    @auth
                        <a class="link-light link-underline link-underline-opacity-0"
                            href="{{ route('announcements.create') }}">
                            <h6 class="m-0">{{__('ui.newArticle')}} </h6>
                        </a>
                    @else
                        <a class="link-light link-underline link-underline-opacity-0" href="{{ route('login') }}">
                            <h6 class="m-0">{{__('ui.newArticle')}} </h6>
                        </a>
                    @endauth
                </div>

                {{-- ordinamento --}}
                <div class="d-flex ">
                    <div class="form-row">
                        <select id="order" class="form-select" onchange="sortList()">
                            <option value="">{{__('ui.ordinaPer')}} </option>
                            <option value="recenti">{{__('ui.recenti')}} </option>
                            <option value="vecchi">{{__('ui.vecchi')}} </option>
                        </select>
                    </div>
                    </form>
                </div>
            </div>
            
            {{-- card annuncio --}}
            <div class="d-flex row justify-content-center align-items-center mx-0 mt-5">
                <div class="row">
                    
                    @forelse ($announcements as $announcement)
                        <x-card 
                        :routeCategory="route('showCategory', ['category' => $announcement->category])" 
                        :nameCategory="$announcement->category->name" 
                        :title="$announcement->title" 
                        :description="$announcement->description" 
                        :price="$announcement->price"
                        :routeAnnouncement="route('announcements.show', compact('announcement'))" 
                        :createdAt="$announcement->created_at->format('d/m/Y')"
                        :authorName="$announcement->user->name"
                        :user="$announcement->user"
                        :images="$announcement->images"
                        /> 
                    @empty
                        <h2 class="font-bold text-5xl text-center text-danger">{{__('ui.noArticoliCategoria')}} :
                            {{ $category->name }}</h2>
                    @endforelse
                </div>



            

            </div>

        </div>

    </div>


</x-layout-articles>
