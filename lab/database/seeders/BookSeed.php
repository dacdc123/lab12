<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 101; $i++) {
            DB::table('books')->insert([
                'title' => fake()->text(30),
                'thumbnail' => fake()->imageUrl(),
                'author' => fake()->text(10),
                'publisher' => fake()->text(10),
                'publication' => fake()->dateTime(), 
                'price' => fake()->randomFloat(2, 1, 1000), 
                'quantity' => fake()->numberBetween(1, 100), 
                'category_id' => rand(1, 6),
            ]);
        }
    }
}
