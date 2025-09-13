<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Clear old users
        User::truncate();

        $users = [
            ['name' => 'John Doe', 'email' => 'johndoe@example.com'],
            ['name' => 'Jane Smith', 'email' => 'janesmith@example.com'],
            ['name' => 'Michael Johnson', 'email' => 'michaelj@example.com'],
            ['name' => 'Emily Davis', 'email' => 'emilyd@example.com'],
            ['name' => 'David Wilson', 'email' => 'davidw@example.com'],
            ['name' => 'Sarah Miller', 'email' => 'sarahm@example.com'],
            ['name' => 'James Brown', 'email' => 'jamesb@example.com'],
            ['name' => 'Linda Martinez', 'email' => 'lindam@example.com'],
            ['name' => 'Robert Taylor', 'email' => 'robertt@example.com'],
            ['name' => 'Patricia Anderson', 'email' => 'patriciaa@example.com'],
            ['name' => 'Christopher Thomas', 'email' => 'christhomas@example.com'],
            ['name' => 'Barbara Jackson', 'email' => 'barbaraj@example.com'],
            ['name' => 'Daniel White', 'email' => 'danielw@example.com'],
            ['name' => 'Elizabeth Harris', 'email' => 'elizh@example.com'],
            ['name' => 'Matthew Martin', 'email' => 'mattmartin@example.com'],
            ['name' => 'Jennifer Thompson', 'email' => 'jennthompson@example.com'],
            ['name' => 'Anthony Garcia', 'email' => 'anthonyg@example.com'],
            ['name' => 'Karen Martinez', 'email' => 'karenm@example.com'],
            ['name' => 'William Robinson', 'email' => 'willr@example.com'],
            ['name' => 'Susan Clark', 'email' => 'susanclark@example.com'],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('password'), // same password for all
            ]);
        }
    }
}
