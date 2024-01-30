<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Locked;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Auth;

class UsersTable extends Component
{
    use WithPagination,  WithoutUrlPagination;

    public $query = "";

    public function deleteConfirm(User $user)
    {
        $this->dispatch(
            'delete:confirm',
            userId: $user->id,
            userName: $user->name
        );
    }

    public function deleteUser(User $user)
    {
        User::where('id', $user->id)->delete();
    }

    public function search()
    {
        $this->resetPage();
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
