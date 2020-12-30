<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
<<<<<<< HEAD
<<<<<<< HEAD
   protected $fillable = [ 	'name'  ];
=======
=======
>>>>>>> Eloquent
   protected $fillable = [
   		'name',
   	];

<<<<<<< HEAD
>>>>>>> 92a0b79... 1er eloquen view filtado de user-post-comments
=======

  // public function categorys() 
  //   {
  //       return $this->belongsToMany(Category::class);
  //   }
   	// consultar relacion de table category_tag
>>>>>>> Eloquent
}
