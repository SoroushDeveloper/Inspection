<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Soroush',
            'last_name' => 'Sagharichiha',
            'password' => 'Soroush1380',
            'email' => 'sagharichihas@gmail.com',
            'personal_code' => '4311524625',
            'user_type' => 'Admin',
        ]);
        User::create([
            'first_name' => 'Kianoush',
            'last_name' => 'Sagharchi',
            'password' => 'Soroush1380',
            'email' => 'kianoush@gmail.com',
            'personal_code' => '4321534726',
            'user_type' => 'Inspector',
        ]);
    }
}
