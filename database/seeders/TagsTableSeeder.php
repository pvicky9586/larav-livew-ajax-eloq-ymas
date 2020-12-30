<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        \App\Models\Tag::factory()->count(10)->create();
=======
        \App\Models\Tag::factory()->count(50)->create();
>>>>>>> 92a0b79... 1er eloquen view filtado de user-post-comments
=======
        \App\Models\Tag::factory()->count(50)->create();
>>>>>>> Eloquent
    }
}
