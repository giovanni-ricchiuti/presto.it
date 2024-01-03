<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class UsersList extends Component
{
    public $accordionOpen = null;

    public function render()
    {
        $users = User::paginate(6);

        return view('livewire.users-list', ['users' => $users]);
    }

    

    #[On('user-created')]
    public function updatedSearch()
    {
        return back();
    }

    public function edit($user_id)
    {
        $this->dispatch('user-edit', ['user' => $user_id])->to(UserForm::class);
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:MakeUserRevisor', ["email" => $user->email]);

        Session::flash('success', 'L\'utente è stato reso revisore con successo!');
    }

    public function delete(User $user)
    {
        $user->delete();

        return back();
    }
}
