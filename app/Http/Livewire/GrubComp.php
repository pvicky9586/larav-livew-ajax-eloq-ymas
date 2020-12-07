<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class GrubComp extends Component
{
	use WithPagination;
	public $view = 'create';
	public $post_id, $title, $body;
	public $searchPart = '';



    public function render()
    {
    	return view('livewire.grub-comp', [
		'posts'=> Post::where(function($sub_query)
		{
			$sub_query->where('body','like', '%'.$this->searchPart.'%')
			->orWhere('title','like', '%'.$this->searchPart.'%');
			})->orderBy('id','desc')->simplepaginate(10) 
		]);
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
	}

	public function default(){
		$this->title = '';
		$this->body = '';			
		$this->view = 'create';		
	}
}
