<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class PostPublicComp extends Component
{

	use WithPagination;

	public $prompt='hola';

	protected $listeners = [
		'refreshParent' => '$refresh'
	];
	public $title, $body, $file;
	public $searchPart = '';
	public $NewPost = 'NewPost';
	public $isOpen = 0;
    
	public function refreshParent(){
		$this->prompt = "refrescado";
	}

    public function render()
    {
        return view('livewire.post-public-comp', [
			'posts'=> Post::where(function($sub_query)
			{
				$sub_query->where('body','like', '%'.$this->searchPart.'%')
				->orWhere('title','like', '%'.$this->searchPart.'%');
				})->orderBy('id','desc')->simplepaginate(2) 
			]);
    }


  public function store() {

		Post::create([
			'title' => $this->title,
			'body' => $this->body,

		]);

		$this->dispatchBrowserEvent('closeModal');
		$this->emit('refreshParent');
	}



	public function default(){
		$this->title = '';
		$this->body = '';			
		$this->view = 'create';		
	}

	public function create(){
		$this->default();
		$this->openModal();
	}

	public function openModal(){
		$this->isOpen = true;
	}

	public function closeModal(){
		$this->isOpen = false;
	}








}
