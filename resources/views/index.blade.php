<x-layout-main>

    <div class="container-fluid d-flex flex-column justify-content-center px-0 mx-auto mt-3">

        {{-- hero e card-articoli --}}
        <div class="container-md hero-section row mx-auto">
            <div class="col-md-8 col-12 position-relative position-mobile">
                <div class="hero-one">
                    <div class="hero-oneT">
                        <img src="/img/hero.jpg" alt="Immagine Hero" class="img-fluid">
                        <div class="hero-two">
                            <div class="btn-hero-two d-flex justify-content-center">
                                @auth
                                    <a class="link-light link-underline link-underline-opacity-0"
                                        href="{{ route('announcements.index') }}">
                                        <h6 class="btn btn-logout-inverso" >{{__('ui.indexArticlesShow')}}</h6>
                                    </a>
                                @else
                                    <a class="link-light link-underline mt-4 link-underline-opacity-0 ms-2"
                                        href="{{ route('register') }}">
                                        <h6 class="btn btn-logout-inverso" >{{__('ui.indexRegister')}}</h6>
                                    </a>
                                @endauth
                                <p class="m-0 ms-4 px-0 py-0 text-light" style="font-size: 1rem;">{{__('ui.indexHeroText')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-12 mt-md-0 mt-4">
                <div class="hero-content text-center">
                    <h2 class="nome-sito">{{__('ui.indexArticles')}}</h2>
                    
                    <div class="d-flex flex-column align-items-center"></div>

                    <div class="d-flex flex-column align-items-center gap-5">
                        @foreach ($announcements->take(3) as $announcement)
                            <x-home-card :routeCategory="route('showCategory', ['category' => $announcement->category])" :nameCategory="$announcement->category->name" :title="$announcement->title" :description="$announcement->description"
                                :price="$announcement->price" :routeAnnouncement="route('announcements.show', compact('announcement'))" :images="$announcement->images" />
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- title category --}}
            <div class="container-md text-center container-home-text-category py-4 mt-5">
            
                <h3 class="title-category">{{__('ui.allCategory')}}</h3>
                <p class="container-home-text-category-mobile">{{__('ui.description')}} <br> {{__('ui.description2')}}</p>
            </div>

        </div>


        {{-- slider card category --}}

        <div class="cotainer-slider-category">



            <div class="container-md-Categorie-Home mx-auto mt-0 box-home-card-category">

                <ul class="slider">

                    @foreach ($categories as $index => $category)
                        {{-- <div class="bg-rettangolo-yello-img1 d-flex justify-content-center align-items-center shadow">
                        </div> --}}
                        <li class="item" style="background-image: url('{{ $category->image }}')">

                            <div class="content-Categorie-Home">
                                <h2 class="title-Categorie-Home">{{ $category->name }}</h2>
                                <p class="description-Categorie-Home">{{ $category->description }}</p>
                                <a href="{{ route('showCategory', ['category' => $category]) }}"
                                    class="btn-Categorie-Home link-underline link-underline-opacity-0">{{__('ui.scopri')}} </a>
                            </div>
                        </li>
                        {{-- <div class="bg-rettangolo-yello-img2 d-flex justify-content-center align-items-center shadow">
                        </div> --}}
                    @endforeach
                </ul>

                <nav class='nav-slider-category'>
                    <ion-icon class='btn-frecce-Categorie-Home prev' name="arrow-back-outline"></ion-icon>
                    <ion-icon class='btn-frecce-Categorie-Home next' name="arrow-forward-outline"></ion-icon>
                </nav>
            </div>
        </div>


        {{-- unisciti al niostro team --}}
        <div
            class="container-fluid d-flex flex-column justify-content-center mx-0 px-0 container-home-card-category position-abslolute">


            <div class="container-md lavoraConNoi-section d-flex flex-column justify-content-center mt-5">

                @if (session('message'))
                    <div class="alert alert-{{ session('status', 'info') }}">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="container container-sm d-flex justify-content-center position-relative position-mobile posizione-LavoraConNoi">
                    <div class="lavoraConNoi-one lavoraConNoi-cetratura ">
                        <div class="lavoraConNoi-oneT shadow">
                            <img src="/img/Work-05-[Modificato]-01.png" alt="lavora con noi"
                                class="img-fluid bg-img-lavoraConNoi">
                            <div class="lavoraConNoi-two row">
                                <div class="d-flex justify-content-end">

                                    <div class="col-md-6 py-5 pe-5 lavoraConNoi-text-mobile lavoraConNoi-text-mobile-posit">
                                        <div class="card-body lavoraConNoi-text-mobile">
                                            <h5 class="card-title"><span style="font-weight: bold;">{{__('ui.unisciti')}}</span>
                                                <br>{{__('ui.alNostro')}} <span style="font-weight: bold;">team!</span></h5>
                                            <p class="card-text">
                                            {{__('ui.textRevisor')}}
                                            </p>
                                            <a href="{{ route('become.revisor') }}" class="btn btn-primary">{{__('ui.revisor')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</x-layout-main>
