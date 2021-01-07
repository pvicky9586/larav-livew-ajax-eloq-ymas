<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
class PostController extends Controller
{

  // CRUD CON AJAX
    public function index(){
      $post= Post::orderBy('id','DESC')->paginate(10);
      return view('crud_larav-ajax.index',compact('post'));
    }


    public function store(Request $request){

      $validator = array(
        'title' => 'required',
        'body' => 'required',
      );

      $post = new Post;
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return back();
      //return response()->json($post);
}

public function editPost(request $request){
   $validator = array(
        'title' => 'required',
        'body' => 'required',
      );
  $post = Post::find ($request->id);
  $post->title = $request->title;
  $post->body = $request->body;
  $post->save();
  return response()->json($post);
  //return back();
}

public function deletePost(request $request){
  $post = Post::find ($request->id)->delete();
  return response()->json();
}
}