<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'John Doe',
                'email' => 'user@gmail.com',
                'phone' => '123456789',
                'adresse' => '123 Main Street',
                'password' => Hash::make('123456789'),
                'status' => true,
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'user1@gmail.com',
                'phone' => '987654321',
                'adresse' => '456 Oak Avenue',
                'password' => Hash::make('123456789'),
                'status' => true,
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'user3@gmail.com',
                'phone' => '5551234567',
                'adresse' => '789 Elm Street',
                'password' => Hash::make('123456789'),
                'status' => true,
            ],
        ];

        DB::table('users')->insert($users);
    }
}
