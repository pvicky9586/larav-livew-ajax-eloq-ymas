<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class User extends Component
{
    public function render()
    {
        return view('livewire.user');
    }
}
