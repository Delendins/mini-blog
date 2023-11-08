<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1, 8),
            'user_id' => mt_rand(1, 5),
            'title' => fake()->sentence(3),
            'slug' => fake()->slug(3),
            'body' => fake()->paragraph(5),
        ];
    }
}
