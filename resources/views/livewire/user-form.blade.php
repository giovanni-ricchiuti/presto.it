
<div class="p-3 rounded bg-crea-utente">
    <h4 class="title-utenti">{{ $userId ? 'Modifica Utente' : 'Crea utente' }}</h4>

    <x-success />

    <p>User id : {{ $userId }}</p>

    <form wire:submit.prevent="store" class="mt-3">
        <div class="row g-3 text-black">
            <div class="col-12">
                <label for="name">{{__('ui.nome')}}</label>
                <input type="text" id="name" class="form-control" wire:model.blur="name">
                @error('name') <span class="small text-danger">{{ $message}}</span>@enderror
            </div>
            <div class="col-12">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" wire:model.blur="email">
                @error('email') <span class="small text-danger">{{ $message}}</span>@enderror
            </div>
            <div class="col-12">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" wire:model.blur="password">
                @error('password') <span class="small text-danger">{{ $message}}</span>@enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-secondary">{{ $userId ? 'Modifica' : 'Crea' }}</button>
                @if ($userId)
                    <button type="button" class="btn btn-info" wire:click="newUser">{{__('ui.nuovo')}}</button>
                @endif
            </div>
        </div>
    </form>

</div>

