<?php

namespace Database\Factories;

use App\Models\CategoryTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryTagFactory extends Factory
{
   
    protected $model = CategoryTag::class;

  
    public function definition()
    {
    
        return [        
            
            'category_id'=>rand(1,5),
            'tag_id'=>rand(1,10), //solo 10 tag para la relaciontomorè solo 20
           ];

    }
}
