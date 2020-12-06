<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

//use App\Http\Livewire\PostComp;

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
});

Route::get('/post', function () {
    return view('post');
});
//Route::get('/posts',Post::class);

Route::get('/users', function(){
	$users = User::withCount(['posts','comments'])->get();

	return view('user',compact('users'));
});


