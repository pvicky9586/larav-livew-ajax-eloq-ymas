<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
   
    protected $model = \App\Models\Tag::class;

  
    public function definition()
    {
        $title = $this->faker->unique()->text(5);
        return [
             'name' => Str::camel($title)
           ];
    }
}
