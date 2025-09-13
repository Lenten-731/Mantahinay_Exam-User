<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),          // realistic name
            'email' => $this->faker->unique()->safeEmail(), // realistic unique email
            'password' => Hash::make('password'),    // default password for all users
            'email_verified_at' => now(),
            'remember_token' => \Str::random(10),
        ];
    }
}
