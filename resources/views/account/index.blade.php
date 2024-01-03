<x-layout-main>



    <div class="container text-center mt-5 mb-5 pb-5">

        @if (session('message'))
            <div class="alert alert-{{ session('status', 'info') }} mx-auto" style="max-width: 600px;">
                {{ session('message') }}
            </div>
        @endif

        <h1>{{ __('ui.benvenuto') }} {{ auth()->user()->name }}</h1>
        <div class="row gx-3 gy-5 mt-5">

            @if (auth()->user() && auth()->user()->is_revisor)
                <div class="col-md-4">
                    <div class="bg-rettangolo-articolo1 me-3 card-ombra-registrati-login">
                        <h3 class="pt-5">{{ __('ui.approva') }}</h3>
                        <p class="m-4">{{ __('ui.sezioneApprova') }}</p>

                        <div
                            class="bg-rettangolo-mod-articolo d-flex justify-content-center align-items-center card-ombra-registrati-login">
                            <a href="{{ route('revisor.index') }}" class="btn btn-secondary shadow" aria-current="page">
                                {{ __('ui.approva') }} {{ \App\Models\Announcement::toBeRevisionedCount() }}
                                {{-- <span
                                    class="badge badge-danger ml-2 text-black">{{ \App\Models\Announcement::toBeRevisionedCount() }}
                                </span> --}}
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user() && auth()->user()->is_admin)
                <div class="col-md-4">
                    <div class="bg-rettangolo-articolo1 me-3 card-ombra-registrati-login">
                        <h3 class="pt-5">{{ __('ui.gestisciUtenti') }}</h3>
                        <p class="m-4">{{ __('ui.sezioneGestisci') }}</p>
                        <div
                            class="bg-rettangolo-mod-articolo d-flex justify-content-center align-items-center card-ombra-registrati-login">
                            <a href="{{ route('admin.users') }}"
                                class="btn btn-secondary shadow">{{ __('ui.gestisci') }}</a>
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user() && !auth()->user()->is_admin)
                <div class="col-md-4">
                    <div class="bg-rettangolo-articolo1 me-3 card-ombra-registrati-login">
                        <h3 class="pt-5">{{ __('ui.dashTitle') }}</h3>
                        <p class="m-4">{{ __('ui.dashDescription') }}</p>
                        <div class="bg-rettangolo-mod-articolo d-flex justify-content-center align-items-center card-ombra-registrati-login">
                            <a href="{{ route('admin.manage') }}" class="btn btn-secondary shadow">{{ __('ui.dashButton') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        


            <div class="col-md-4">
                <div class="bg-rettangolo-articolo1 me-3 card-ombra-registrati-login">
                    <h3 class="pt-5">{{ __('ui.viewArticoli') }}</h3>
                    <p class="m-4">{{ __('ui.sezioneVisualizza') }}</p>
                    <div
                        class="bg-rettangolo-mod-articolo d-flex justify-content-center align-items-center card-ombra-registrati-login">
                        <a href="{{ route('author.show', ['user' => $user->id]) }}"
                            class="btn btn-secondary shadow">{{ __('ui.viewArticoli') }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-layout-main>
