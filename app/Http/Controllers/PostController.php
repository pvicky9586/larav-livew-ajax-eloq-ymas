<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
class PostController extends Controller
{


    public function index(){
      $post= Post::orderBy('id','DESC')->paginate(10);
     // $post = Post::paginate(10);
      return view('post.index',compact('post'));
    }


    public function store(Request $request){
    //   $rules = array(
    //     'title' => 'required',
    //     'body' => 'required',
    //   );
    // $validator = Validator::make ( Input::all(), $rules);
    // if ($validator->fails())
    // return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

    // else {
      $post = new Post;
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return back();
      //return response()->json($post);
    //}
}

public function editPost(request $request){
  $post = Post::find ($request->id);
  $post->title = $request->title;
  $post->body = $request->body;
  $post->save();
  return response()->json($post);
}

public function deletePost(request $request){
  $post = Post::find ($request->id)->delete();
  return response()->json();
}
}