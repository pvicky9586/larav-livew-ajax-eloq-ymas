<?php


namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;

use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class PostPublicComp extends Component
{
	use WithFileUploads;
	use WithPagination;

	protected $paginationTheme = 'bootstrap';

	public $title, $body, $file, $status, $category_id;
	public $categorys, $tags, $tag_id=[];
	public $factory = 0;
	public $File='';
	public $post, $mensaje,  $comments, $commentsPost;
	public $updateMode = false;
	public $search = '';
	

	function mount(){
		$categorys=Category::all();
		$this->categorys=$categorys;
		
		$tags=Tag::all();
		$this->tags=$tags;
		
		$comments = Comment::all();
    	$this->comments=$comments;

		$commentsPost = Post::withCount(['comments'])->get();		
    	$this->commentsPost=$commentsPost; // pasar name comment


	}	





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



   public function updatingSearch()
    {
        $this->resetPage();
    }



  public function store() {
        $validatedDate = $this->validate([
              'title' => 'required',
              'body' => 'required',
              'category_id' => 'required',
              'tag_id'=>'required',
              'status'=>'required',
              'file' => 'required|image|max:1024',
        ]);
        // $imgUrl = url($this->file); 
        // $imgExt = $this->file->getClientOriginalExtension();
        // $ImgnameExt = md5($this->file . microtime()).'.'.$this->file->extension();
        // $imgName = $this->file->getClientOriginalName();

        $File = $this->file->store('ImgPost'); //upload nombre aleatorio, evida reg repetidos
        $save = Post::create([
			 'title' => $this->title,
			 'body' => $this->body,
			 'category_id'=>$this->category_id,
			 'file' => $File,
			 'status' => $this->status,
			 'factory' => $this->factory,
		]);

		$Ntag= Count($this->tag_id);
        for($i=0; $i<$Ntag; $i++){
			$save->tags()->create([
				'post_id'=>$save->id,
				'tag_id' => $this->tag_id[$i],
			]);
		}
		$this->default();
		$this->emit('postStore'); // Close model to using to jquery
		return back()->with('mensaje','Datos Registrados');
			  		
	}


	




	public function default(){
		$this->title = '';
		$this->body = '';
		$this->file = '';
		$this->category_id = '';
		$this->status = '';
		 
	}








}
