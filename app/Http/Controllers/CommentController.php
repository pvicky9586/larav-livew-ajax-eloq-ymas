<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
class CommentController extends Controller
{
    

    function index($id){

    	$commentsPost = Post::with(['comments'])->find($id);	
    	$comments = Comment::all();	
    	$post = Post::find($id);
    	//return $commentsPost ;
    	return view('PublicPost.comment',compact('post','comments','commentsPost'));
    }

    public function store(Request $request){
    	
 		$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);

        Comment::create($request->all());

        return redirect()->route('Public')
            ->with('mensaje', 'Post comentado.');
    }
 








}
