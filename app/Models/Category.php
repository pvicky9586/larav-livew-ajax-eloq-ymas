<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
    	'name',
    	'detall',
    	'tag_id'
    ];


       public function tag()
        {
            return $this->hasOne(Tag::class);
        }

}
