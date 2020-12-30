<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;


<<<<<<< HEAD
  
=======
   public function users() 
    {
        return $this->hasMany(User::class);
    }
>>>>>>> Eloquent

}
