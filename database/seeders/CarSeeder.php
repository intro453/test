<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!DB::table('cars')->exists()) {
            DB::table('cars')->insert([
                [
                    'make' => 'Toyota',
                    'model' => 'Corolla',
                    'year' => 2020,
                    'color' => 'White',
                    'is_sold' => false,
                    'description' => 'Компактный и экономичный седан.',
                ],
                [
                    'make' => 'BMW',
                    'model' => 'X5',
                    'year' => 2019,
                    'color' => 'Black',
                    'is_sold' => true,
                    'description' => 'Большой кроссовер с мощным двигателем.',
                ],
                [
                    'make' => 'Tesla',
                    'model' => 'Model 3',
                    'year' => 2022,
                    'color' => 'Red',
                    'is_sold' => false,
                    'description' => 'Электромобиль с автопилотом.',
                ],
            ]);
        }
    }
}
