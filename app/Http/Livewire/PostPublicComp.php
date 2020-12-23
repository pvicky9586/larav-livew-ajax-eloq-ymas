<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

use App\Models\Category;
use App\Models\Tag;

use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class PostPublicComp extends Component
{
	use WithFileUploads;
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

	public $title, $body, $file, $status, $cat_id='', $tag_id='';
	public $factory = 0;
	public $File='';
	public $post, $mensaje;
	public $updateMode = false;
	public $search = '';
	public $cats, $tags;

	function mount(){
		$cats=Category::all();
			$this->cats=$cats;

		$tags=Tag::all();
			$this->tags=$tags;		
	}
	public function updatingSearch()
    {
        $this->resetPage();
    }

    //Usado una vista de paginación personalizada
    // public function paginationView()
    // {
    //     return 'custom-pagination-links-view';
    // }
    //en view   {{ $posts->links('custom-pagination-links-view') }}







    public function render()
    {		
    	  return view('livewire.post-public-comp',[
			'posts'=> Post::where(function($sub_query)
			{
				$sub_query->where('body','like', '%'.$this->search.'%')
				->orWhere('title','like', '%'.$this->search.'%');
				})->where('status','=',1)->orderBy('id','desc')->paginate(5) 
			]);
    }

  public function store() {
        $validatedDate = $this->validate([
              // 'title' => 'required',
              // 'body' => 'required',
              'file' => 'required|image|max:1024',
        ]);


        // $imgUrl = url($this->file); 
        // $imgExt = $this->file->getClientOriginalExtension();
        // $ImgnameExt = md5($this->file . microtime()).'.'.$this->file->extension();
        // $imgName = $this->file->getClientOriginalName();

        $File = $this->file->store('ImgPost'); //upload nombre aleatorio, evida reg repetidos


        // $this->file->storeAs('posts', $this->file,'public'); //upload storesAs tres params (directory, nombre-tmp-file, disk(definido in app/conf/filesystems.php))

        $save = Post::create([
			 'title' => $this->title,
			 'body' => $this->body,
			 'file' => $File,
			 'status' => $this->status,
			 'factory' => $this->factory,
		]);
		   
       

		$this->default();
		$this->emit('postStore'); // Close model to using to jquery
		return back()->with('mensaje','Datos Registrados');	  		
	}







	public function default(){
		$this->title = '';
		$this->body = '';
		 
	}








}
