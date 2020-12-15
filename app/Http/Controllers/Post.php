<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Post;


class Post extends BaseController
{
   


  public function store(Request $request) {

		// $NewPost = new Post;
		// $NewPost->title = $request->title;
		// $NewPost->body = $request->body;
		// $NewPost->save();
		// $posts = Post::all();
		// return redirect()->route('posts',compact('post'))->with('mensaje','New Post');
  	echo "hola";
    }


  public function edit(Request $request) {

		// $NewPost = new Post;
		// $NewPost->title = $request->title;
		// $NewPost->body = $request->body;
		// $NewPost->save();
		// $posts = Post::all();
		// return redirect()->route('posts',compact('post'))->with('mensaje','New Post');
		return view('list-modal');
    }



}
