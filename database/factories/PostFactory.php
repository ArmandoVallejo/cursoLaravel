<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(3, true),
            'content' => $this->faker->text(50),
            'posted' => $this->faker->randomElement(['yes', 'no']),
            'category_id' => \App\Models\Category::all()->random()->id,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
