<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Article::factory(20)->create();
        Category::factory(3)->create();
        Task::factory(20)->create();
    }
}
