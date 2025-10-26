<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $articles = [];
        $now = now();

        for ($i = 0; $i < 100; $i++) {
            $articles[] = [
                'title' => $faker->sentence,
                'slug' => Str::substr($faker->slug,0,50),
                'description' => $faker->text,
                'status' => Article::STATUS_DRAFT,
                'published_at' => $now,
                'created_at' => $now->subMinutes(50),
                'updated_at' => $now,
            ];
        }

        Article::insert($articles);
    }
}
