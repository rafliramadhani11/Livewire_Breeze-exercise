<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Auth;

class UsersTable extends Component
{
    use WithPagination,  WithoutUrlPagination;

    public $query = "";

    public function search()
    {
        $this->resetPage();
    }

    function delete(User $user)
    {
        dd($user);
    }

    public function render()
    {
        $users = User::where(function ($query) {
            $query->where('name', 'like', '%' . $this->query . '%')
                ->orWhere('email', 'like', '%' . $this->query . '%');
        })
            ->where('id', '!=', Auth::user()->id)
            ->paginate(7);

        return view('livewire.users-table', [
            'users' => $users
        ]);
    }
}
