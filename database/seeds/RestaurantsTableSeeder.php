<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'id' => "1",
            'name' => 'An average Restaurant',
            'description' => 'I think my dog might eat it',
            'streetaddress' => 'yolo ave',
            'city' => 'middle of nowhere',
            'state' => 'California',
            'website' => 'canvas.csun.edu',
        ]);

        DB::table('restaurants')->insert([
            'id' => "2",
            'name' => 'A better average Restaurant',
            'description' => 'They have tacos',
            'streetaddress' => 'taco ave',
            'city' => 'Mount Taco',
            'state' => 'California',
            'website' => 'TacosAreTheRealMPV.com',
        ]);
    }
}
