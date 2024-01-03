<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {
        $users = [];

        if (!empty($this->search)) {
            $users = User::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->get();
        }

        return view('livewire.search-users', [
            'users' => $users,
        ]);
    }
}