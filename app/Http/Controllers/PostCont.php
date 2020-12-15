<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use validator;
use Response;
use Pagination;
use Illuminate\Support\Facedes\Input;

class PostCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post= Post::orderBy('id','DESC')->paginate(10);
        return view('post-modals',compact('post'));
        //return Post::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $NewPost = new Post;
            $NewPost->title = $request->title;
            $NewPost->body = $request->body;
            $NewPost->save();
            if($NewPost){
                $this->title= '';
                $this->body='';
            }
       
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return "hola";
      //  $post = Post::findOrFail($id);
      //  $post_id=$post->id;
      //  $post->title = $request->title;
      // // $post->body =  $this->body;  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
