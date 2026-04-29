<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
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
            'content' => $this->faker->paragraph(),
            'author_id' => $this->faker->numberBetween(1, 10),
            'category' => $this->faker->randomElement(['Iets', 'Tweede woord', 'Derde woord']),
            'published_at' => $this->faker->date(),
            //
        ];
    }
}
