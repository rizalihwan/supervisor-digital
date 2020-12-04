<?php

use Illuminate\Database\Seeder;
use \App\user;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'name' => 'test guru',
                'role' => 'guru',
                'email' => 'rizalihwan94@gmail.com',
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now()
        ]);
    }
}
