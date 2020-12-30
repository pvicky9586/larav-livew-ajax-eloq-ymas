<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    
    protected $model = Comment::class;

    
    public function definition()
    {
        return [
          'comment' => $this->faker->text(100),  //100 caracteres
          'post_id'=>rand(1,20) //crea id aleatorios
        ];
    }
}


         