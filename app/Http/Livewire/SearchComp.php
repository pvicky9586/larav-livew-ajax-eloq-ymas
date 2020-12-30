<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class SearchComp extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';

	public $title, $body;
	public $search = '';




    public function render()
	    {
	    	return view('livewire.search-comp', [
			'posts'=> Post::where(function($sub_query)
			{
				$sub_query->where('body','like', '%'.$this->search.'%')
				->orWhere('title','like', '%'.$this->search.'%');
				})->orderBy('id','desc')->paginate(10) 
			]);

    }
}
