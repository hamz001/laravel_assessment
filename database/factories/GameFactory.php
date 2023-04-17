<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'version' => "Deluxe Version",
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(),
            'featured_image' => $this->faker->imageUrl(1280, 720, 'games', true),
            'article' => $this->faker->paragraphs(5, true),
            'uploader' => 1,
            'release_date' => $this->faker->date(),
            'extra_title' => $this->faker->name(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
