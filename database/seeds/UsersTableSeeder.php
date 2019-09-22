<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                "name" => "Administrator",
                "email" => "naji1706d@aptechgdn.net",
                "email_verified_at" => NULL,
                "password" => Hash::make("admin"),
                "role" => 3
            ]
        );

        User::insert(
            [
                "name" => "User_1",
                "email" => "sad@asd.com",
                "email_verified_at" => NULL,
                "password" => Hash::make("user1"),
                "role" => 0
            ],
        );
    }
}
