<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class CrudComp extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';

	public $view = 'create';
	public $post_id, $title, $body, $status;
	public $search = '';



    public function render()
	    {
	    	return view('livewire.crud-comp', [
			'posts'=> Post::where(function($sub_query)
			{
				$sub_query->where('body','like', '%'.$this->search.'%')
				->orWhere('title','like', '%'.$this->search.'%');
				})->orderBy('id','desc')->paginate(10) 
			]);

    }

    public function store() {
		$this->validate(['title' => 'required']); 
		                                           
		$part = Post::create([
		'title' => $this->title,
		'body' => $this->body,	
			
		]);
	
		$this->default();
		return back()->with('mensaje','New Post Agregado');			
	}


    public function edit($id){
		$post= Post::find($id);
		$this->post_id	= $post->id; 
		$this->title = $post->title;
		$this->body =  $post->body;				
		$this->view = 'edit'; 		
	} 

	public function update(){
		$post = Post::find($this->post_id); 		
		$post->update([
			'title' => $this->title,
			'body' => $this->body,
		]); 
		$this->default(); 
		return back()->with('mensaje','Datos Actualizados');
	}

   public function destroy ($id){
		Post::destroy($id); 
		$this->default();  
	}

	public function default(){
		$this->title = '';
		$this->body = '';			
		$this->view = 'create';		
	}
}
