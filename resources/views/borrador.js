







//PRUEBAS route/web.php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Profile;

Route::get('/cons', function(){
  $prof = Category::all();
  $tag = Tag::all();
  $prof = Profile::all();
  return $prof;
});

// consultas Eloquent

Route::get('/eloq', function(){
  

  $post=Post::find(1);
  $post->comments;
  $post->tags;


 return $post;
});

