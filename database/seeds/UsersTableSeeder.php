<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Timmeh",
            'email' => 'TimmehJimmeh@gmail.com',
            'password' => bcrypt('YouKilledKenny'),
        ]);

        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'Admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => "Reviewer",
            'email' => 'Reviewer@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
