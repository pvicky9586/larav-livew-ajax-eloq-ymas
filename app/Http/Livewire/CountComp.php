<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;

class CountComp extends Component
{
	

	public $comments, $posts, $CommentPosts;

	function mount(){
		$comments=Comment::all();
		$this->comments=$comments;	

		$posts = Post::withCount(['comments'])->get();
		$this->posts=$posts;
	}


    public function render()
    {
     	$allposts = Post::all();
        return view('livewire.count-comp',compact('allposts'), [
        	'users' => User::withCount(['posts','comments'])->get()
    	]);
    }
}
