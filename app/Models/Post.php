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

    public function comments()
    {
           return $this->hasMany(Comment::class);
    }

   // $count = Post::where('status', '=', 1)->count();

}
