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
    	'file'
    ];

<<<<<<< HEAD
=======

    
    // un post pertene a un usuario (*)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    // un post tiene muchos comments(N-M)
    public function comments()
    {
           return $this->hasMany(Comment::class);
    }














    // comments de un usuario
 
    //  etiquetas de un post 


    









  

   // $count = Post::where('status', '=', 1)->count();

>>>>>>> 92a0b79... 1er eloquen view filtado de user-post-comments
}
