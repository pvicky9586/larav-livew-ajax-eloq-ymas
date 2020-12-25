<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Profile;


Route::get('/', function () {
    return view('welcome');
})->name('inicio');


Route::get('/count', function(){
	return view('Count.index');
})->name('counts');



Route::get('/menu', function(){
	return view('Menus.Menu');
})->name('menu');


Route::get('/search', function(){
	return view('Search.index');
})->name('search');


Route::get('/Public', function(){
	return view('PublicPost.index');
})->name('Public');





//CRUD solo laravel view crud_laravel
Route::resource('posts', PostLaravController::class);
//CRUD livewire view larav-livew
Route::get('/crud_larav-livew', function(){
  return view('crud_larav-livew.index');
})->name('crud_larav-livew');
//CRUD laravel livewire Modal views en  crud-larav-livew.crus-modal
Route::view('users','crud_larav-livew.crud-modal.home');



//CRUD view crud-larav-ajax
  Route::resource('post','PostController');
  Route::POST('addPost','PostController@addPost');
  Route::POST('editPost','PostController@editPost');
  Route::POST('deletePost','PostController@deletePost');


//Agrupar rutas que pertenecen a un controladores que estan bajo un mismo namespace ejemplo:  
//Route::group(['middleware' => ['web'], function{ 
  // Route::resource('post','PostController');
  // Route::POST('addPost','PostController@addPost');
  // Route::POST('editPost','PostController@editPost');
  // Route::POST('deletePost','PostController@deletePost');
//});











//PRUEBAS
Route::get('/cons', function(){
  $prof = Category::all();
  $tag = Tag::all();
  $prof = Profile::all();
  return $prof;
});




Route::get('/eloq', function(){
  $user = User::find(1);
  $user->comments;
  $user->posts; //todos los post que tenga un usuario

  $post=Post::find(1);
  $post->comments;  //commentarios de un post
  $post->user;  // a que user pertenece dicho post
 // $post->Count('comments');
  
  //return $user; //retorno todos los commentario de un usuario
  return $post;  //retorno los comentarios de un post
});












