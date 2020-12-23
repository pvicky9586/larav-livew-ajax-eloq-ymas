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














Route::view('users','crud_larav-livew.crud-modal.home');



Route::get('/NewPost', function(){
	return view('PublicPost.create');
})->name('NewPost');




//Route::resource('/modal','PostCont');




//CRUD solo laravel view crud_larav
Route::resource('posts', PostLaravController::class);

//CRUD livewire view larav-livew
Route::get('/crud_larav-livew', function(){
  return view('crud_larav-livew.index');
})->name('crud_larav-livew');



//  Route::get('/post', function(){ 
// 	return view('crud_larav-ajax.index');
// })->name('Larav-Ajax');

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