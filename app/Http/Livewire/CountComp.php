<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class CountComp extends Component
{
	
    public function render()
    {
    	//$users = 
        return view('livewire.count-comp', [
        	'users' => User::withCount(['posts','comments'])->get()
    	]);
    }
}
