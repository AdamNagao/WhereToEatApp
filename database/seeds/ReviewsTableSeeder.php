<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'id' => "1",
            'restaurant_id' => "1",
            'rating' => "3",
            'tagline' => "Food so average I died of boredom",
            'description' => "IT'S BLOODY RAW",

        ]);

        DB::table('reviews')->insert([
            'id' => "2",
            'restaurant_id' => "1",
            'rating' => "2",
            'tagline' => "some lame food",
            'description' => "I like turtles",

        ]);
        DB::table('reviews')->insert([
            'id' => "3",
            'restaurant_id' => "2",
            'rating' => "4",
            'tagline' => "GOOD FOOD",
            'description' => "They make food",

        ]);

        DB::table('reviews')->insert([
            'id' => "4",
            'restaurant_id' => "2",
            'rating' => "5",
            'tagline' => "Cool and Good",
            'description' => "Eat Chicken",

        ]);
    }
}
