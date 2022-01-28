<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Steve Jobs',
                'email' => 'admin@mail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),
                'role' => 'admin'
            ],
            [
                'name' => 'Bill Gates',
                'email' => 'director@mail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'), // password
                'remember_token' => Str::random(10),
                'role' => 'director'
            ],
        ];

        DB::table('users')->insert($users);
    }
}
