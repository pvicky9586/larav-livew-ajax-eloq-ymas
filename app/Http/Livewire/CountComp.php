<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\withPagination;
use App\Models\User;

class CountComp extends Component
{
	use withPagination;

    public function render()
    {
    	//$users = 
        return view('livewire.count-comp', [
        	'users' => User::withCount(['posts','comments'])->get()
    	]);
    }
}
