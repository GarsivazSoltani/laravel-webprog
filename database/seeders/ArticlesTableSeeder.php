<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        foreach(range(1, 10) as $item){
            Article::create([
                'title' => $faker->text(50),
                'body' => $faker->paragraph(rand(10, 20))
            ]);
        }
    }
}
