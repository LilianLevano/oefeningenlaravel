<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
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
            'description' => $this->faker->paragraph(),
            'due_date' => $this->faker->date(),
            'completed_at' => $this->faker->boolean(70)
                ? $this->faker->dateTime()
                : null,
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'author_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),

        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($task) {
            $tags = Tag::inRandomOrder()
                ->take(rand(1,3))
                ->pluck('id');

            $task->tags()->attach($tags);
        });
    }


}
