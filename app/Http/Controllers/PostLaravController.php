<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Post;

class PostLaravController extends Controller
{


    public function index()
    {
       $posts= Post::orderBy('id','DESC')->paginate(10);
       return view('crud-larav.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

 
    public function create()
    {
       return view('crud-larav.create');
    }

 
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Post creado con exito.');
    }


    public function show($id)
    {
        $post = Post::find($id);
        return view('crud-larav.show', compact('post'));
       
    }

    public function edit($id)
    { 
        $post = Post::find($id);
        return view('crud-larav.edit', compact('post'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('posts.index')
            ->with('success', 'Post actializado exitoxamente');
    }

    public function destroy($id)
    {
        $post = Post::find ($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post Eliminado');
    }
}
