<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
    	'name',
        'email',
        'comment',
    	'post_id'
    ];

    //un comentario pertenece a un poat en pasticular (N-M)
    public function post() 
    {
        return $this->belongsTo(Post::class);
    }


}
