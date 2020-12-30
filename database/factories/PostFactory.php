<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
   
    protected $model = \App\Models\Post::class;


    public function definition()
    {
        //$title = $faker->sentence(4);
       
         return [
          'title' => $this->faker->text(20), //20 caracteres
          'body' => $this->faker->text(300),  //50 caracteres
          'file' => $this->faker->imageUrl($width = 400, $height = 400),
          'status' => $this->faker->randomElement(['0','1']),
          'factory' => 1,

          'category_id'=>rand(1,5), //crea id aleatorios ten en cuenta que sera que no supere la cantidad de registro falso que hallas insertado
          'user_id'=>rand(1,10) //crea id aleatorios

        ];
    }
}

