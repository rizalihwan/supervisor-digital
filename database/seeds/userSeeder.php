<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($a = 0; $a <= 1; $a++) {
            DB::table('users')->insert([
                'name' => 'test guru',
                'role' => 'guru',
                'email' => $faker->email,
                'password' => bcrypt('test123'),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
        }
    }
}
