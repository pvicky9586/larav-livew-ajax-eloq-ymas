<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        return [
            'name' => $title,
            'slug' => Str::camel($title),
            'body' => $this->faker->paragraph,
        ];

        //Str::camel -> //quita espacio y conviente depues de palabra, la primera letra de la palabra siguiente en mayuscula
        //Str::slug ->conviente todo en minuscula y espacios a '-'
    }
}
