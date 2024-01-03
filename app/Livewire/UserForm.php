<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
// use Livewire\Attributes\Rule;
use Livewire\Attributes\On;

class UserForm extends Component
{
    public $userId = null ;

    /* #[Rule('required', message:'Validato con attributo')] */ // solo realtime
    public $name ='';

    /* #[Rule('required', message: 'req validato con rule')]
    #[Rule('email', message: 'Validato con rule' )] */ // solo realtime
    public $email ='';

    public $password ='';

    

    public function store(){

        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' .$this->userId,
            'password' => $this->userId ? '' : 'required',
        ], [
            'name.required' => 'Il campo Nome non può essere vuoto',
            'email.required' => 'Il campo Email non può essere vuoto',
            'password.required' => 'Il campo Password non può essere vuoto',
        ]);

        if($this->userId){

            if($this->password == ''){

                $update = $this->only('name', 'email');

            } else {

                $update = $this->only('name', 'email', 'password');

            }

            (User::find($this->userId))->update($update);

            session()->flash('success', 'Utente modificato con successo!');
        
        } else {

            User::create($this->only('name', 'email', 'password'));
    
            session()->flash('success', 'Utente creato con successo!');

        }

        $this->newUser();

        $this->dispatch('user-created');

    }

    #[On('user-edit')]
    public function edit(User $user){
        $this->userId = $user->id;

        $this->name = $user->name;

        $this->email = $user->email;
    }

    public function newUser(){

        $this->userId = null;

        $this->name ='';
        $this->email ='';
        $this->password ='';

        $this->resetErrorBag();

    }

    

    public function render()
    {
        return view('livewire.user-form');
    }
}
