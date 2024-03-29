<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>'This is a test '.fake()->name() ,
            'content' =>'This is a test post This is a test postThis is a test postThis is a test post'. fake()->name(),
            'image' =>  'noimage.jpg',
            "fovourite" => "1",
            'created_at' =>now(),

        ];
    }
}
