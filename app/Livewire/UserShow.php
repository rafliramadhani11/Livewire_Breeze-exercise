<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserShow extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.user-show');
    }
}
