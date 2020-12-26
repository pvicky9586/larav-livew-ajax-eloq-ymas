<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
     protected $fillable = [
        'post_id','tag_id',
        'created_at'
       ];

    
    // public function posts() //extracion de las todas las tag de un post
    // {
    //     return $this->hasMany(Post::class);
    // }
}

