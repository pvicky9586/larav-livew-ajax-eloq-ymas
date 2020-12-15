<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class SearchComp extends Component
{
	use WithPagination;
	public $title, $body;
	public $searchPart = '';



    public function render()
	    {
	    	return view('livewire.search-comp', [
			'posts'=> Post::where(function($sub_query)
			{
				$sub_query->where('body','like', '%'.$this->searchPart.'%')
				->orWhere('title','like', '%'.$this->searchPart.'%');
				})->orderBy('id','desc')->simplepaginate(10) 
			]);

    }
}
