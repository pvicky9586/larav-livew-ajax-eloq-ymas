<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
   protected $fillable = [
   		'name',
   	];


  // public function categorys() 
  //   {
  //       return $this->belongsToMany(Category::class);
  //   }
   	// consultar relacion de table category_tag
}
