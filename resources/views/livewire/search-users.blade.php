<div class="container bg-elenco-utente px-0">
    <div class="p-2">
        <div class="row">
            <h1 class="text-center">{{__('ui.utenti')}}</h1>
            <div class="col-12">
                <input type="text" class="form-control" placeholder="Cerca utente" wire:model.live="search">
            </div>
            <div class="col-6">
                @foreach ($users as $user)
                    <li>{{ $user->name }}</li>
                @endforeach
            </div>

        </div>
    </div>
</div>
