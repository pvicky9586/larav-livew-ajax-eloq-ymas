<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;






Route::get('/bb', function(){
  return view('bootbox');
});




Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/post', function () {
    return view('post');
});


Route::get('/count', function(){
	return view('Count.index');
})->name('counts');



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

//CRUD laravel livewire Modal views en  crud-larav-livew.crud-modal
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