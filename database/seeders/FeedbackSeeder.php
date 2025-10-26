<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $feedbacks = [];
        $now = now();

        for ($i = 0; $i < 100; $i++) {
            $feedbacks[] = [
                'name' => $faker->name,
                'email' => $faker->email,
                'subject' => $faker->word,
                'message' => $faker->text,
                'created_at' => $now->subMinutes(50),
                'updated_at' => $now,
            ];
        }

        Feedback::insert($feedbacks);
    }
}
