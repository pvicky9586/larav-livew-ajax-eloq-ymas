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
        'created_at',
    ];

    public function comments()
    {
           return $this->hasMany(Comment::class);
    }

}
