<div class="container-md px-0">

    <nav class="navbar navbar-expand-lg bg-navBar">
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="/img/svg/loghi/Presto-it_vers_uso_bg_viola.svg"
                    alt="" width="250" height="auto"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-desk-menu" id="navbarTogglerDemo02">
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center nav-colore-hover nav-ul-mobile gap-3">
                    <li class="nav-item">
                        <a class="nav-link nav-colore-hover"
                            href="{{ route('announcements.index') }}">{{ __('ui.articoli') }}</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-colore-hover" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->email }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end nav-ul-account">
                                <li><a class="dropdown-item nav-a-account nav-colore-hover" href="{{ route('account') }}">{{__('ui.navAccount')}}</a></li>
                                @if (Auth::user()->is_revisor)
                                    <li class="nav-item">
                                        <a href="{{ route('revisor.index') }}" class="nav-link btn btn-primary" aria-current="page">
                                            {{__('ui.navRevisor')}}
                                            <span
                                                class="badge badge-danger ml-2">{{ \App\Models\Announcement::toBeRevisionedCount() }}
                                            </span>
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="px-2">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="btn-logout" type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-cerca-inverso btn-nav-aggiungi-articolo"
                                href="{{ route('announcements.create') }}">
                                <i class="fas fa-plus p-2"><span>{{__('ui.articoloNavAggiungi')}}</span></i>

                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link nav-colore-hover" href="/login">{{ __('ui.accedi') }}</a>
                        </li>
                        <li class="nav-item">
                            <div class=”w-full”>
                                <a class="nav-link nav-colore-hover" href="/register">{{ __('ui.registrati') }}</a>
                        </li>
                    @endauth



                    <div class="dropdown">
                        <button class="btn btn-lingua dropdown-toggle d-flex align-items-center" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-earth-americas"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end contenitore-lingua-flag">
                            <li class=""><a class="dropdown-item text-black lingua-flag-li-it"
                                    href="#"><x-_locale lang='it' nation='it' /></a></li>
                            <li><a class="dropdown-item lingua-flag" href="#"><x-_locale lang='es'
                                        nation='es' /></a></li>
                            <li class="lingua-flag-li-gb"><a class="dropdown-item lingua-flag-li-gb"
                                    href="#"><x-_locale lang='gb' nation='gb' /></a></li>

                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Navbar superiore -->
    {{-- <nav class="navbar navbar-expand-lg bg-transparent text-primary ">
        <div class="container-fluid d-flex align-items-center mx-0 px-0 align-content-center">

            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="/img/svg/loghi/Presto-it_vers_uso_bg_viola.svg" alt="" width="250" height="auto">

                </a>
            </div>
            <div class="d-flex container-dropdown">



                <button class="navbar-toggler box-btn-dropdown" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center nav-colore-hover">
                        <li class="nav-item">
                            <a class="nav-link nav-colore-hover"
                                href="{{ route('announcements.index') }}">{{ __('ui.articoli') }}</a>
                        </li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle nav-colore-hover" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->email }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item nav-colore-hover" href="{{ route('account') }}">{{ __('ui.ilTuoProfilo') }}</a></li>
                                    @if (Auth::user()->is_revisor)
                                        <li class="nav-item">
                                            <a href="{{ route('revisor.index') }}" class="nav-link btn btn-primary"
                                                aria-current="page">
                                                {{ __('ui.zonaRevisore') }}
                                                <span
                                                    class="badge badge-danger ml-2">{{ \App\Models\Announcement::toBeRevisionedCount() }}
                                                </span>
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="px-2">
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button class="btn-logout" type="submit">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="btn btn-cerca-inverso btn-nav-aggiungi-articolo"
                                    href="{{ route('announcements.create') }}">
                                    <i class="fas fa-plus p-2"><span>{{__('ui.articoloNavAggiungi')}}</span></i>

                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link nav-colore-hover" href="/login">{{ __('ui.accedi') }}</a>
                            </li>
                            <li class="nav-item">
                                <div class=”w-full”>
                                    <a class="nav-link nav-colore-hover" href="/register">{{ __('ui.registrati') }}</a>
                            </li>
                        @endauth

                        <div class="dropdown">
                            <button class="btn btn-lingua dropdown-toggle d-flex align-items-center" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-earth-americas"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end contenitore-lingua-flag">
                                <li class=""><a class="dropdown-item text-black lingua-flag-li-it"
                                        href="#"><x-_locale lang='it' nation='it' /></a></li>
                                <li><a class="dropdown-item lingua-flag" href="#"><x-_locale lang='es'
                                            nation='es' /></a></li>
                                <li class="lingua-flag-li-gb"><a class="dropdown-item lingua-flag-li-gb"
                                        href="#"><x-_locale lang='gb' nation='gb' /></a></li>

                            </ul>
                        </div>




                    </ul>
                </div>
            </div>

        </div>
    </nav> --}}
</div>

<div class="container-md">
    <!-- Navbar inferiore -->
    <nav class="navbar navbar-expand-lg text-white">
        <div class="d-flex justify-content-center w-100">
            <form class="d-flex search-form" action="{{ route('announcements.search') }}" method="GET">
                <input class="form-control me-2" type="search" name="searched" placeholder="Search"
                    aria-label="Search">

                <button class="btn btn-cerca" type="submit">{{ __('ui.cerca') }}</button>
            </form>
        </div>
    </nav>
</div>
