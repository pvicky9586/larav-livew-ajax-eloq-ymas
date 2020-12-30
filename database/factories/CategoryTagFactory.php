<?php

namespace Database\Factories;

use App\Models\CategoryTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
    
        return [        
            
            'category_id'=>rand(1,5),
            'tag_id'=>rand(1,20), //de 50 tag tomorè solo 20
           ];

    }
}
