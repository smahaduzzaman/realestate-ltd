<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin User
            [
                'name'=>'Admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'email_verified_at' => now(),
                'password'=>Hash::make('1234'),
                'photo' => fake()->imageUrl('60', '60'),
                'phone' => '0123456788',
                'address' => 'Yangon, Myanmar',
                'role'=>'admin',
                'status'=>'active',
                'remember_token' => '1234567890',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            // Agent User
            [
                'name'=>'Agent',
                'username'=>'agent',
                'email'=>'agent@gmail.com',
                'email_verified_at' => now(),
                'password'=>Hash::make('1234'),
                'photo' => fake()->imageUrl('60', '60'),
                'phone' => '0123456789',
                'address' => 'Parse, Waingmaw, Kachin State',
                'role'=>'agent',
                'status'=>'active',
                'remember_token' => '1234567890',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
            // User
            [
                'name'=>'User',
                'username'=>'user',
                'email'=>'user@gmail.com',
                'email_verified_at' => now(),
                'password'=>Hash::make('1234'),
                'photo' => fake()->imageUrl('60', '60'),
                'phone' => '0123456790',
                'address' => 'Dhaka, Bangladesh',
                'role'=>'user',
                'status'=>'active',
                'remember_token' => '1234567890',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00',
            ],
        ]);
    }
}
