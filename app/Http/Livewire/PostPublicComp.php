<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class PostPublicComp extends Component
{

	use WithPagination;

	public $title, $body, $file, $created_at;
	public $post, $mensaje;
	public $updateMode = false;
	public $searchPart = '';




    

    public function render()
    {
    	  return view('livewire.post-public-comp', [
			'posts'=> Post::where(function($sub_query)
			{
				$sub_query->where('body','like', '%'.$this->searchPart.'%')
				->orWhere('title','like', '%'.$this->searchPart.'%');
				})->orderBy('id','desc')->simplepaginate(5) 
			]);
    }


  public function store() {
        $validatedDate = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);


       Post::create([
			'title' => $this->title,
			'body' => $this->body,

		]);
		$this->default();
		$this->emit('postStore'); // Close model to using to jquery
		$this->default();
		return back()->with('mensaje','Datos Registrados');	

  		
	}

	public function refreshlist(){
		$this->posts = Post::all();

	}


	public function default(){
		$this->title = '';
		$this->body = '';		
	}








}
