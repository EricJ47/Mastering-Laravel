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
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'status' => rand(1, 2),
            'published_at' => fake()->date(),
            'user_id' => rand(1, 10),
            'category_id' => rand(1, 3),
            'views' => rand(0, 1000),
        ];
    }
}
