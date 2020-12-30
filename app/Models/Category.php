<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
    	'name',
    	'detall'
    ];
<<<<<<< HEAD
<<<<<<< HEAD
=======



>>>>>>> 92a0b79... 1er eloquen view filtado de user-post-comments
=======

    public function posts() 
    {
        return $this->hasMany(Post::class);
    }



    public function tags() 
    {
        
        //tiene muchas etiquetas 
        //debe ir dirigida a la tabla de categorias_tag
        //
    } 




>>>>>>> Eloquent
}
