<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
    	'title',
    	'body',
    	'category_id',
    	'user_id',
    	'file',
        'status',
        'factory',
        'created_at',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
=======

    
    // un post pertene a un usuario (*)
=======

    

>>>>>>> Eloquent
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

<<<<<<< HEAD
    // un post tiene muchos comments(N-M)
    public function comments()
    {
           return $this->hasMany(Comment::class);
    }


=======
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }


    public function comments()
    {
           return $this->hasMany(Comment::class);
    }
>>>>>>> Eloquent




<<<<<<< HEAD








    // comments de un usuario
 
    //  etiquetas de un post 


    
=======
    public function tags() //extracion de las todas las tag de un post
    {
           return $this->hasMany(PostTag::class);
    }
>>>>>>> Eloquent









<<<<<<< HEAD
  

   // $count = Post::where('status', '=', 1)->count();

>>>>>>> 92a0b79... 1er eloquen view filtado de user-post-comments
=======


>>>>>>> Eloquent
}
