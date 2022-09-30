<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(2,4)),
            'content' => fake()->paragraph(mt_rand(3,5)),
            'image' => fake()->word().'.jpg',
            'user_id' => mt_rand(1,2),
            'category_id' => mt_rand(1,2)
        ];
    }
}
