<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class GrubComp extends Component
{
	use WithPagination;

    public function render()
    {
    	return view('livewire.grub-comp', [
        	'posts' => Post::orderBy('id','desc')->paginate()
    	]);
    }
}
