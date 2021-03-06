<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\PostTag;

class CrudComp extends Component
{
	use WithPagination;
	use WithFileUploads;
	protected $paginationTheme = 'bootstrap';

	public $view = 'create';
	public $post_id, $title, $body, $status, $file, $category_id;
	public $categorys;
	public $factory; //valor que determina no factori
	public $File ='', $filePost='';
	public $search = '', $message, $error;



function mount(){
		$categorys=Category::all();
		$this->categorys=$categorys;


	}



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
		 $File = $this->file->store('ImgPost'); 

		$post = Post::create([
		'title' => $this->title,
		'body' => $this->body,
		'category_id'=>$this->category_id,	
		'file' => $File,
		'status' => $this->status,
		'factory' => 0,			
		]);
	
		$this->default();
		return back()->with('mensaje','New Post Agregado');			
	}


    public function edit($id){
		$post= Post::find($id);
		$this->post_id	= $post->id; 
		$this->title = $post->title;
		$this->body =  $post->body;
		$this->status =  $post->status;		
		$this->category_id =  $post->category_id;
		$this->file =  $post->file;	
		$this->factory = $post->factory;
		$this->filePost = $post->file;
		$this->view = 'edit'; 

	} 

	public function update(){
		$post = Post::find($this->post_id); 
		//$File = $this->file->store('ImgPost');		
		$post->update([
			'title' => $this->title,
			'body' => $this->body,
			'category_id' => $this->category_id,
			'status' => $this->status,
			//'file' => $File,
		]); 
		session()->flash('message','Registro Actualizado con exito!');
		$this->default();

	}

  	 public function destroy ($id){
	   	 $postCom = Comment::where('post_id','=',$id)->first();
	     $postTag = PostTag::where('post_id','=',$id)->first();
	      if($postCom || $postTag){
	         session()->flash('error','Imposible eliminar, consulte al administrador de base de datos');
	      }else{
			Post::destroy($id); 
			session()->flash('message','Registro Eliminado con exito!');
			$this->default();  
			}
	}



	public function default(){
		$this->title = '';
		$this->body = '';			
		$this->file = '';
		$this->category_id = '';	
		$this->view = 'create';		
	}
}
