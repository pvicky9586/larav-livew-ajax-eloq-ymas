<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;



//use App\Http\Controllers\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inicio');


Route::get('/count', function(){
	return view('Count.Count');
})->name('counts');

Route::get('/crub', function(){
	return view('Crub.crub');
})->name('crub');

Route::get('/menu', function(){
	return view('Menus.Menu');
})->name('menu');

Route::get('/search', function(){
	return view('Search.Search');
})->name('search');


Route::get('/posts', function(){
	return view('PublicPost.index');
})->name('posts');



Route::get('/NewPost', function(){
	return view('PublicPost.create');
})->name('NewPost');




Route::resource('/modal','PostCont');




Route::group(['middleware' => ['web']], function() {
  Route::resource('post','PostController');
  Route::POST('store','PostController@store');
  Route::POST('editPost','PostController@editPost');
  Route::POST('deletePost','PostController@deletePost');
});