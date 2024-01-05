<?php

namespace Database\Factories;

use App\Models\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
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
        // $faker = \Faker\Factory::create();
        // $faker = Factory::create();
        $faker = \Faker\Factory::create();
        return [
            'title' => $faker->text(50),
            'body' => $faker->paragraph(rand(10, 20))
        ];
    }
}
