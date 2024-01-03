<div class="container bg-elenco-utente p-0 rounded-bottom-4 ombra">
    {{-- <h4 class="">Elenco Utenti</h4> --}}

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    
    <div class="bg-elenco-utente ">

        

                <table class="tabella-Desk table table-striped custom-table m-0">

                    <thead>
                        <tr class="">
                            {{-- <th scope="col" class="py-4">#</th> --}}
                            <th scope="col" class="py-4 tabella-menu-pad-th">Nome</th>
                            <th scope="col" class="py-4 tabella-menu-pad-th">Email</th>
                            <th scope="col" class="py-4 tabella-menu-pad-th">Revisore</th>
                            <th scope="col" class="container-btn text-center py-4 text-black" style="font-weight: bold;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            
                            <tr scope="row custom-riga">
                                {{-- <td>{{ $user->id }}</td> --}}
                                <td class="tabella-menu-pad-td">{{ $user->name }}</td>
                                <td class="tabella-menu-pad-td">{{ $user->email }}</td>
                                <td class="tabella-menu-pad-td">{{ $user->is_revisor ? 'si' : 'no' }}</td>
                                <td class="text-end container-btn">
                                    {{-- {{dd(auth()->user()->is_admin)}} --}}
                                    @if ($user->is_admin == '0')
                                        
                                    <button type="button" class="btn btn-sm btn-modifica" wire:click="edit({{ $user->id }})">Modifica</button>
                                    <button type="button" class="btn btn-sm btn-revisore" wire:click="makeRevisor({{ $user->id }})">Rendi Revisore</button>
                                    <button type="button" class="btn btn-sm btn-elimina" wire:click="delete({{ $user->id }})">Elimina</button>
                                
            
                                    @else
                                        <strong style="color: #1c1919;" align=center>Non modificabile</strong>
                                    
                                    @endif
                                </td>
                            </tr>
                        @endforeach
    
                        
                    </tbody>

                </table>

                

                <div class="m-0 Contenitor-elenco-utenti-mobile">
                        @foreach ($users as $user)

                            

                            <div class="w-100 row gap-3">
                                <div class="d-flex w-100 g-3">

                                    <div class="tabella-menu-mobile col-3 px-2 ">
                                        {{-- <th scope="col" class="py-4">#</th> --}}
                                        <h3  class="py-2 my-0">Nome</h3>
                                        <h3  class="py-2 my-0">Email</h3>
                                        <h3  class="py-2 my-0">Revisore</h3>
                                        
                                    </div>
                                
                                
                                    <div class="col-9 tabella-menu-text-mobile p-2 h-auto">
                                        {{-- <td>{{ $user->id }}</td> --}}
                                        <p class="py-2 my-0 tabella-menu-text-p-mobile border-bottom">{{ $user->name }}</p>
                                        
                                        <p class="py-2 my-0 tabella-menu-text-p-mobile border-bottom">{{ $user->email }}</p>
                                        <p class="py-2 my-0 tabella-menu-text-p-mobile border-bottom">{{ $user->is_revisor ? 'si' : 'no' }}</p>
                                        
                                    </div>

                                    
                                    
                                </div>
                                
                                
                                <div class="d-flex text-end container-btn my-0">
                                    <h3  class="container-btn col-3 text-center py-4 tabella-menu-action-mobile text-black my-0" style="font-weight: bold;">Action</h3>
                                    <div class="col-9 py-2">
                                        @if ($user->is_admin == '0')
                                        
                                        <div class="d-flex">
                                            <button type="button" class="btn  btn-modifica m-2" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" wire:click="edit({{ $user->id }})">Modifica</button>                                                                                                                     
                                            <button type="button" class="btn  btn-revisore m-2" wire:click="makeRevisor({{ $user->id }})">Rendi Revisore</button>
                                            <button type="button" class="btn  btn-elimina m-2" wire:click="delete({{ $user->id }})">Elimina</button>
                                        </div>
                                        
                                        
                                        
                                        
                
                                        @else
                                            {{-- <strong style="color: #1c1919;" align=center>Non modificabile</strong> --}}
                                            <button type="button" class="btn btn-non-modifica m-2 border-0 opacity-25" disabled>Non modificabile</button>
                                        @endif
                                    </div>
                                    
                                    
                                </div>

                                
                    
    
                        
                            </div>
                           
                    @endforeach
                </div>
                
                
        
    </div>
    @if ($users->links()->paginator->hasPages())
    <div class="mt-4 p-4 box has-text-centered">
        {{ $users->links() }}
    </div>
    @endif                       
    
</div>


{{-- <div class="container bg-elenco-utente">
    <h4 class="title-utenti">Elenco Utenti</h4>

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-end">
                        <button type="button" class="btn btn-sm btn-secondary" wire:click="edit({{ $user->id }})">Modifica</button>
                        <button type="button" class="btn btn-sm btn-success" wire:click="makeRevisor({{ $user->id }})">Rendi Revisore</button>
                        <button type="button" class="btn btn-sm btn-danger" wire:click="delete({{ $user->id }})">Elimina</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
