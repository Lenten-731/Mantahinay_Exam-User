<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class Table extends Component
{
    public $users;

    // Load users when component is mounted
    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user.table', [
            'users' => $this->users,
        ]);
    }
}