<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======
     protected $fillable = [
    	'comment',
    	'post_id'
    ];

    //un comentario pertenece a un poat en pasticular (N-M)
    public function post() 
    {
        return $this->belongsTo(Post::class);
    }

>>>>>>> 92a0b79... 1er eloquen view filtado de user-post-comments
}
