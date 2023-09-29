<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.search-users', ['users' => $users]);

    }
}
