<x-layout-articles>

    <div class="container box-title p-3">
        <h1 class="fw-bold text-center display-4 box-title-page-mobile">{{ __('ui.gestisciProfilo') }}</h1>
    </div>

    <div class="container-articles w-100 px-3 pb-3">
        <div class="box-articles">
            <div class="container d-flex justify-content-center posizione-LavoraConNoi-Utenti pt-5 mt-3">
                <div class="lavoraConNoi-one-Utenti lavoraConNoi-cetratura-Utenti mx-auto w-100">
                    <div class="lavoraConNoi-oneT-Utenti d-flex">
                        <div class="col-9 bg-cerca-utente container-elenco-utente ombra w-100">
                            <div
                                class="d-flex justify-content-between align-items-center px-5 container p-4 bg-elenco-utente">
                                <div class="container-md">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h1 class="card-title text-center">{{ __('ui.gestisciProfiloTitolo') }}
                                                        {{ $user->name }}</h1>
                                                    <p class="card-text">{{ __('ui.gestisciProfiloNome') }}:
                                                        {{ $user->name }}
                                                    </p>
                                                    <p class="card-text">Email :
                                                        {{ $user->email }}</p>

                                                    @if ($user->is_revisor)
                                                        <p class="card-text">{{ __('ui.gestisciProfiloRuolo1') }}
                                                        </p>
                                                    @else
                                                        <p class="card-text">{{ __('ui.gestisciProfiloRuolo2') }}</p>
                                                    @endif

                                                    <p class="card-text">
                                                        {{ __('ui.gestisciProfiloAnnunci') }} :
                                                        <a href="{{ route('author.show', ['user' => $user->id]) }}">
                                                            {{ $user->announcements->count() }}
                                                        </a>
                                                    </p>
                                                    <p class="card-text">{{ __('ui.gestisciProfiloCreato') }}
                                                        {{ $user->created_at->format('d/m/Y') }}</p>
                                                    <div class="d-flex justify-content-between">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#editModal">
                                                            {{ __('ui.gestisciProfiloBottoneModifica') }}
                                                        </button>

                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                            {{ __('ui.gestisciProfiloBottoneElimina') }}
                                                        </button>
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
            </div>

            <!-- Modale per la modifica -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">
                                {{ __('ui.gestisciProfiloModificaDati') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.update', ['id' => $user->id]) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name"
                                        class="form-label text-dark">{{ __('ui.gestisciProfiloNome') }}</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $user->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email"
                                        class="form-label text-dark">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $user->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="password"
                                        class="form-label text-dark">{{ __('ui.gestisciProfiloPassword') }}</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="password"
                                        class="form-label text-dark">{{ __('ui.gestisciProfiloPassword2') }}</label>
                                    <input type="password" class="form-control">
                                </div>
                                <button type="submit"
                                    class="btn btn-primary">{{ __('ui.gestisciProfiloBottoneSalva') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Modale per l'eliminazione -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">
                                {{ __('ui.gestisciProfiloConfermaEliminazione') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>{{ __('ui.gestisciProfiloDomanda') }}</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('admin.destroy', ['id' => $user->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-danger">{{ __('ui.gestisciProfiloBottoneElimina') }}</button>
                            </form>

                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">{{ __('ui.gestisciProfiloBottoneAnnulla') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layout-articles>
