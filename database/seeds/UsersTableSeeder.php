<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'screen_name' => $faker->userName,
                'name' => $faker->name,
                'profile_image' => 'https://placehold.jp/50x50.png',
                'email' => 'test' . $i .'@test.com',
                'password' => $i .'1234567',
                'remember_token' => str_random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

    }
}
