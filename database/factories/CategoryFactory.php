<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
   
    protected $model = \App\Models\Category::class;

  
    public function definition()
    {
        //$title = $this->faker->unique()->text(5);
        return [

            'name' => $title,
            'slug' => Str::camel($title),
            'body' => $this->faker->paragraph,
        ];

        //Str::camel -> //quita espacio y convierte primera primera letra de palabra siguiente en mayuscula
        //Str::slug ->conviente todo en minuscula y comvierte estacion a '-'
    }
}
